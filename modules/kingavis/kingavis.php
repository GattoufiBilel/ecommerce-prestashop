<?php
/**
*  NOTICE OF LICENSE
* 
*  Module for Prestashop
*  100% Swiss development
* 
*  @author    Webbax <contact@webbax.ch>
*  @copyright -
*  @license   -
*
*/

/* 
 * V17.3.02 - 05.12.19
 * - ajout de l'id de la boutique courante lors de l'exportation
 * V17.3.01 - 24.10.19
 * - ajout option avancée pour forcer la transmission manuellement
 * - transmission sur les boutiques actives uniquement (multi-boutiques)
 * V17.2.06 - 19.09.19
 * - ajout méthode de transfert par "pixel"
 * - transfert des données uniquement via le front-office (footer)
 * V17.2.05 - 04.07.19 
 * - ajout méthode "ka_file_get_contents"
 * - ajustements (rétro-compat.) pour PS 1.4
 * V17.2.04 - 06.11.18 
 * - footer.tpl (contrôle ready JS)
 * V17.2.03 - 30.08.18
 * - processus cron en mode Ajax
 * - traduction langue "nl"
 * V17.2.02 - 26.06.18
 * - extends "Module" au lieu de "PaymentModule"
 * V17.2.01 - 22.05.18
 * - ajout de "private_key" sur $url_add_order
 * V17.1.10 - 22.05.18
 * - contrôle automatique de la version du module 
 * V17.1.9 - 22.05.18
 * - utilisation de Language::getIsoById($Order->id_lang)
 * V17.1.8 - 08.05.18
 * - optimisation transmission urlencode
 * V17.1.7 - 03.05.18
 * - intégration nouvelle méthode de transmission
 * V17.1.6 - 26.10.17
 * - envoi des avis en fonction de l'état de commande
 * V17.1.5 - 26.10.17
 * - correction message confirmation commande (it)
 * V17.1.4 - 28.09.17
 * - ajustement CSS couleur du texte de confirmation
 * V17.1.3 - 19.07.17
 * - correction lien SSL image
 * V17.1.2 - 20.04.17
 * - publication vers Prestashop Addons
 * V17.1.1 - 02.04.17
 * - retrait espacements (id_merchant/token)
 * - ajout option export date via "Datepicker"
 * V17.1.0 - 20.02.17
 * - correction déploiement module : unexpected '['
 */

class Kingavis extends Module{
    
    private $_html = '';
    private $_postErrors = array();
    private $url_mod;
    private $url_prod;
    private $url_dev;
    private $url_king_avis;
    private $url_distant_widget_js;
    private $url_add_order;
    private $url_upd_order;
    private $url_upd_plugin;
    private $date_start_export;
    private $date_end_export;

    public function __construct(){
        
        $this->name = 'kingavis';
        $this->tab = 'others';
        $this->version = '17.3.02';
        $this->module_key = '432455a090fe0a7b2084d58806ad9297';
        $this->author = 'Webbax';

        /* PS 1.6 */
        $this->bootstrap = true;
        $this->ps_version  = Tools::substr(_PS_VERSION_,0,3);

        global $cookie;

        $isos_langs_accepted = array('fr','de','en','it');
        $Lang = new Language($cookie->id_lang);
        if(in_array($Lang->iso_code,$isos_langs_accepted)){
            $this->iso_lang = $Lang->iso_code;
        }else{
            $this->iso_lang = 'fr';
        }
        
        $this->url_dev = 'http://localhost/king_avis/';
        $this->url_prod = 'https://king-avis.com/';
        
        $merchant_token = Configuration::get('KINGAVIS_MERCHANT_TOKEN');
        if(empty($merchant_token) && Tools::getIsset('merchant_token')){$merchant_token=Tools::getValue('merchant_token');}
        // localhost debug
        if($merchant_token=='991bf70b65ba2b823dd8b50fd3621a2b893b475'){
            $this->url_king_avis = $this->url_dev;
            $this->url_mod = 'dev';
        // production
        }else{
            $this->url_king_avis = $this->url_prod;
            $this->url_mod = 'prod';
        }
        
        $this->url_add_order = $this->url_king_avis.$this->iso_lang.'/merchantorder/add?';
        $this->url_upd_order = $this->url_king_avis.$this->iso_lang.'/merchantorder/upd?';
                
        $DateStart = new DateTime();
        $DateStart->modify('-100 days');
        $this->date_start_export = $DateStart->format('Y-m-d');
        $DateEnd = new DateTime();
        $DateEnd->modify('-10 days');
        $this->date_end_export = $DateEnd->format('Y-m-d');
        $file_name_js = Configuration::get('KINGAVIS_MERCHANT_ID').'-'.$merchant_token.'.js';
        $this->url_distant_widget_js = $this->url_king_avis.'widgets/'.$file_name_js;
        
        parent::__construct();

        $this->displayName = 'King-Avis';
        $this->description = $this->l('Collect and display your guest reviews');
        $this->confirmUninstall = $this->l('Are you sure you ?'); 
        
    }

    public function install(){
                
        // précocher les statuts payés
        $os_paid = Db::getInstance()->executeS('SELECT * FROM '._DB_PREFIX_.'order_state WHERE `paid`=1');
        $ar_os_paid = array();
        foreach($os_paid as $op){$ar_os_paid[] = $op['id_order_state'];}
        Configuration::updateValue('KINGAVIS_IDS_ORDERS_STATES',serialize($ar_os_paid)); 
        Configuration::updateValue('KINGAVIS_TRANSFER_MODE',0); 

        // initialisation DB
        Db::getInstance()->execute('CREATE TABLE `'._DB_PREFIX_.'king_avis` (
                                    `id_king_avis` int(11) NOT NULL,
                                    `id_order` int(11) NOT NULL,
                                    `send_order_ka` tinyint(1) NOT NULL,
                                    `wait_send_review` tinyint(1) NOT NULL,
                                    `date_add` datetime NOT NULL,
                                    `date_upd` datetime NOT NULL
                                  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;');
        Db::getInstance()->execute('ALTER TABLE `'._DB_PREFIX_.'king_avis` ADD PRIMARY KEY (`id_king_avis`)');
        Db::getInstance()->execute('ALTER TABLE `'._DB_PREFIX_.'king_avis` MODIFY `id_king_avis` int(11) NOT NULL AUTO_INCREMENT');

        // 1.4 <
        if($this->ps_version<=1.4){
            if(!parent::install() OR 
               !$this->registerHook('header') OR
               !$this->registerHook('orderConfirmation') OR
               !$this->registerHook('footer')
            ){
                return false;
            }else{
                return true;
            }
        // 1.5 - 1.6
        }else{
            if(!parent::install() OR 
               !$this->registerHook('displayHeader') OR
               !$this->registerHook('displayOrderConfirmation') OR
               !$this->registerHook('displayFooter')
            ){
                return false;
            }else{
                return true;
            }
        }
        
    }
    
        
    public function uninstall(){

        if(!parent::uninstall())
            return false;
        
        Db::getInstance()->Execute('DELETE FROM `'._DB_PREFIX_.'configuration` WHERE `name` LIKE "%KINGAVIS_%" ');
        Db::getInstance()->Execute('DROP TABLE `'._DB_PREFIX_.'king_avis`');
        
        return true;
        
    }
    
    public function hookHeader($params){       
        
        // 1.4 rétro compat.
        if($this->ps_version<=1.4){
            global $smarty;
            $smarty->assign(array(
                'url_css_1_4' => $this->_path.'views/css/styles_1.4.css',
                'url_distant_widget_js' => $this->url_distant_widget_js,
            )); 
            return $this->display(__FILE__,'/views/templates/front/hookHeader_1_4.tpl');
        }
        
    }
    
    public function hookdisplayHeader($params){
        
        // PS 1.5, PS 1.6
        if($this->ps_version==1.5 || $this->ps_version==1.6){
            // CSS front
            $this->context->controller->addCSS($this->_path.'views/css/styles_'.$this->ps_version.'.css','all');
            // Widget JS externe
            $this->context->controller->addJS($this->url_distant_widget_js); 
        // PS 1.7
        }elseif($this->ps_version>1.6){
            // CSS front
            $this->context->controller->registerStylesheet('modules-kingavis','modules/'.$this->name.'/views/css/styles_'.$this->ps_version.'.css',array('media' => 'all', 'attributes' => 'async'));
            // Widget JS externe
            $this->context->controller->registerJavascript('modules-kingavis',$this->url_distant_widget_js,array('server' => 'remote', /* 'attributes' => 'async' */));
        }
        
    }
    
    /*
     * Trace l'historique des commandes
     * @params -
     * @return - 
     */
    public function traceHistoryOrders($id_orders=array()){
        
        // trace les commandes du jour
        if(empty($id_orders)){
            $ps_orders = Db::getInstance()->executeS('SELECT * FROM `'._DB_PREFIX_.'orders` WHERE `date_add` LIKE "%'.date('Y-m-d').'%"');
        // trace une tranche spécifique (forcing transmission)
        }else{
            $ps_orders = Db::getInstance()->executeS('SELECT * FROM `'._DB_PREFIX_.'orders` WHERE `id_order` IN('.pSQL($id_orders).') ORDER BY `id_order` ASC');
        }     
        
        $king_orders = Db::getInstance()->executeS('SELECT * FROM `'._DB_PREFIX_.'king_avis` WHERE `date_add` LIKE "%'.date('Y-m-d').'%"');
        $king_orders_ids = array();
        $date_add_and_upd = date('Y-m-d H:i:s');
        if(!empty($ps_orders)){
            foreach($king_orders as $k_o){$king_orders_ids[]=$k_o['id_order'];}
            foreach($ps_orders as $p_o){
                if(!in_array($p_o['id_order'],$king_orders_ids)){
                    $Order = new Order($p_o['id_order']);
                    $id_module_kingavis = Db::getInstance()->getValue('SELECT `id_module` FROM `'._DB_PREFIX_.'module` WHERE `name`="'. pSQL($this->name).'"');
                    $id_module_kingavis_db = Db::getInstance()->getValue('SELECT `id_module` FROM `'._DB_PREFIX_.'module_shop` WHERE `id_module`="'. pSQL($id_module_kingavis).'" AND `id_shop`="'.pSQL($Order->id_shop).'"');
                    if(!empty($id_module_kingavis_db)){ // vérifie si le module est actif sur le shop (important pour le multiboutique)
                        Db::getInstance()->execute('INSERT INTO  `'._DB_PREFIX_.'king_avis` (`id_order`,`date_add`,`date_upd`) VALUES ("'.pSQL($p_o['id_order']).'","'.pSQL($date_add_and_upd).'","'.pSQL($date_add_and_upd).'")');
                    }
                }
            }
        }  
    }
    
    /*
     * Envoie les commandes du jour à King-Avis
     * @params -
     * @return html
     */
    public function sendOrdersToKingAvis(){
       
       global $cookie;
       $orders_send_ka = Db::getInstance()->executeS('SELECT * FROM `'._DB_PREFIX_.'king_avis` WHERE `date_add` LIKE "%'.date('Y-m-d').'%" AND `send_order_ka`=0');
	   
       if(!empty($orders_send_ka)){
		   
            if($this->ps_version<=1.4){
                $id_lang = $cookie->id_lang;	
            }else{
                $id_lang = $this->context->cookie->id_lang;	
            }
           
            $return = '';
            $ids_orders_states = unserialize(Configuration::get('KINGAVIS_IDS_ORDERS_STATES'));
            if(!array($ids_orders_states)){$ids_orders_states=array();}
           
            foreach($orders_send_ka as $ok){
               
               $Order = new Order($ok['id_order']);
               $Customer = new Customer($Order->id_customer);
               $Address = new Address($Order->id_address_invoice);
               $Currency = new Currency($Order->id_currency);
               
               $a_ids_states = array();
               $o_ids_states = $Order->getHistory($id_lang);
               foreach($o_ids_states as $id_state){$a_ids_states[]=$id_state['id_order_state'];}
               
               $wait_send_review = 1;
               foreach($ids_orders_states as $id_order_state){
                    if(in_array($id_order_state,$a_ids_states)){
                        $wait_send_review = 0;
                        break;
                    }
               }
               
               $url_add_order = 
               $this->url_add_order.
               'id_merchant='.Configuration::get('KINGAVIS_MERCHANT_ID').'&'.
               'token='.Configuration::get('KINGAVIS_MERCHANT_TOKEN').'&'.
               'private_key='.Configuration::get('KINGAVIS_MERCHANT_PRIVATE_KEY').'&'.        
               'ref_order='.urlencode($Order->id).'&'.
               'email='.urlencode($Customer->email).'&'.
               'amount='.urlencode($Order->total_paid).'&'.
               'iso_currency='.urlencode($Currency->iso_code).'&'.
               'firstname='.urlencode($Address->firstname).'&'.
               'lastname='.urlencode($Address->lastname).'&'.
               'iso_lang='.urlencode(Language::getIsoById($Order->id_lang)).'&'.
               'wait='.urlencode($wait_send_review);
	
               $transfer_mod = Configuration::get('KINGAVIS_TRANSFER_MODE');
               
               // mode Pixel
               if($transfer_mod==1){
                   $return .= '<img src="'.$url_add_order.'" width="0" height="0" style="height:0!important;width:0!important" />';
               // mode Ajax
               }else{
                   $this->ka_file_get_contents($url_add_order);
               }
               
               Db::getInstance()->execute('UPDATE `'._DB_PREFIX_.'king_avis` SET 
                           `send_order_ka`="1", 
                           `wait_send_review`="'.pSQL($wait_send_review).'", 
                           `date_upd`="'.pSQL(date('Y-m-d H:i:s')).'" 
                            WHERE `id_order`="'.pSQL($Order->id).'"');			
               
            }
            
            return $return;
            
       }
        
    }
    
    /*
     * Autorise l'envoi des avis pour les commandes précédemment en attente
     * @params -
     * @return html 
     */
    public function authorizeSendReview(){
        
        global $cookie;
		
        $ids_orders_states = unserialize(Configuration::get('KINGAVIS_IDS_ORDERS_STATES'));
        if(!array($ids_orders_states)){$ids_orders_states=array();}
		
        if($this->ps_version<=1.4){
            $id_lang = $cookie->id_lang;	
        }else{
            $id_lang = $this->context->cookie->id_lang;	
        }

        $return = '';
        $orders_wait_send_reviews = Db::getInstance()->executeS('SELECT * FROM `'._DB_PREFIX_.'king_avis` WHERE `wait_send_review`=1');

        foreach($orders_wait_send_reviews as $o){
            
           $Order = new Order($o['id_order']);
   
           $a_ids_states = array();
           $o_ids_states = $Order->getHistory($id_lang);
           foreach($o_ids_states as $id_state){$a_ids_states[]=$id_state['id_order_state'];}

           foreach($ids_orders_states as $id_order_state){
               
                if(in_array($id_order_state,$a_ids_states)){
                    
                    $url_upd_order =  $this->url_upd_order.
                              'id_merchant='.Configuration::get('KINGAVIS_MERCHANT_ID').'&'.
                              'token='.Configuration::get('KINGAVIS_MERCHANT_TOKEN').'&'.
                              'private_key='.Configuration::get('KINGAVIS_MERCHANT_PRIVATE_KEY').'&'.
                              'ref_order='.urlencode($Order->id).'&'.
                              'wait=0';
                    
                    $transfer_mod = Configuration::get('KINGAVIS_TRANSFER_MODE');
               
                    // mode Pixel
                    if($transfer_mod==1){
                        $return .= '<img src="'.$url_upd_order.'" width="0" height="0" style="height:0!important;width:0!important" />';
                    // mode Ajax
                    }else{
                        $this->ka_file_get_contents($url_upd_order);
                    }
                    
                    Db::getInstance()->execute('UPDATE `'._DB_PREFIX_.'king_avis` SET 
                         `wait_send_review`="0", 
                         `date_upd`="'.pSQL(date('Y-m-d H:i:s')).'" 
                          WHERE `id_order`="'.pSQL($Order->id).'"');
                    
                    break;
                }
                
           }
 
        }
        
        return $return;
        
    }
    
    /*
     * Envoie la version courante du module à King-Avis
     * @params int $id_merchant
     * @params string $merchant_token
     * @params string $merchant_private_key
     * @params string $plugin_version
     * @return string $res (OK or KO)
     */
    public function sendVersionModuleToKingAvis($id_merchant,$merchant_token,$merchant_private_key,$plugin_version){
        
        // localhost debug
        if($this->url_mod=='dev'){
            $this->url_king_avis = $this->url_dev;
        // production
        }else{
            $this->url_king_avis = $this->url_prod;
        }
        $this->url_upd_plugin = $this->url_king_avis.$this->iso_lang.'/merchant/upd_plugin_version?';

        $url_upd_plugin = 
        $this->url_upd_plugin.
        'id_merchant='.$id_merchant.'&'.
        'token='.$merchant_token.'&'.
        'private_key='.$merchant_private_key.'&'.
        'plugin='.urlencode($plugin_version);

        $transfer_mod = Configuration::get('KINGAVIS_TRANSFER_MODE');
        
        // envoi en mode Pixel
        if($transfer_mod==1){
            $this->_html .= '<img src="'.$url_upd_plugin.'" width="0" height="0" style="height:0!important;width:0!important" />';
            $res = 'OK';
        // file_get_contents
        }else{
            $res = trim($this->ka_file_get_contents($url_upd_plugin));
        }
        
        return $res;
        
    }
    
    public function hookOrderConfirmation($params){
        
        global $cookie;
        global $smarty;
        
        // vide le cache pour assurer une exécution du cron rapide au prochain affichage
        Configuration::updateValue('KINGAVIS_LAST_CRON','');
       
        $smarty->assign(array(
            'hide_msg_end_order' => Configuration::get('KINGAVIS_HIDE_MSG_END_ORDER')
            )
        );
        
        // PS 1.4, PS 1.5
        if($this->ps_version<=1.5){
            return $this->display(__FILE__,'/views/templates/front/confirmation.tpl');
        // PS 1.6, PS 1.7
        }else{
           return $this->display(__FILE__, 'confirmation.tpl');
        }   
        
    }

    private function _postProcess(){
        
        if(Tools::isSubmit('btnSubmitConfig')){
              
            $merchant_id = trim(Tools::getValue('merchant_id'));
            $merchant_token = trim(Tools::getValue('merchant_token'));
            $merchant_private_key = trim(Tools::getValue('merchant_private_key'));
            $transfer_mode = trim(Tools::getValue('transfer_mode'));
            
            Configuration::updateValue('KINGAVIS_MERCHANT_ID',$merchant_id);
            Configuration::updateValue('KINGAVIS_MERCHANT_TOKEN',$merchant_token);
            Configuration::updateValue('KINGAVIS_MERCHANT_PRIVATE_KEY',$merchant_private_key);
            Configuration::updateValue('KINGAVIS_TRANSFER_MODE',$transfer_mode);
            Configuration::updateValue('KINGAVIS_HIDE_MSG_END_ORDER',Tools::getValue('hide_msg_end_order'));
            Configuration::updateValue('KINGAVIS_IDS_ORDERS_STATES',serialize(Tools::getValue('ids_orders_states')));     
            
            $res = $this->sendVersionModuleToKingAvis($merchant_id,$merchant_token,$merchant_private_key,'PS-'.$this->version);
            if($res=='OK'){
                $this->_html .= $this->displayConfirmation($this->l('The connection with King-Avis has been successfully completed'));
            }else{
                $this->_html .= $this->displayError($this->l('The connection with King-Notice failed, please check login information. Also make sure that "file_get_contents" and "curl" are allowed on your server (consult your host).'));
            }
            $this->_html .= $this->displayConfirmation($this->l('The changes were saved.'));
        }
        
        // vérifie la version max 1x par jour (si l'utilisateur vient dans la configuration du module via le back-office)
        $date_check = Configuration::get('KINGAVIS_DATE_CHECK');
        $date_day = date('Y-m-d');
        if($date_day!=$date_check){
            $merchant_id = Configuration::get('KINGAVIS_MERCHANT_ID');
            $merchant_token = Configuration::get('KINGAVIS_MERCHANT_TOKEN');
            $merchant_private_key = Configuration::get('KINGAVIS_MERCHANT_PRIVATE_KEY');
            $version = 'PS-'.$this->version;       
            $this->sendVersionModuleToKingAvis($merchant_id,$merchant_token,$merchant_private_key,$version);
            Configuration::updateValue('KINGAVIS_DATE_CHECK',$date_day);
        }
        
        if(Tools::isSubmit('btnSubmitExport')){
            
            $this->date_start_export = Tools::getValue('date_start_export');
            $this->date_end_export = Tools::getValue('date_end_export');
            
            // sélection des commandes
            $sql = '
            SELECT `id_order`,`current_state`,`id_customer`,`id_address_delivery`,`id_lang` 
            FROM `'._DB_PREFIX_.'orders` 
            WHERE `date_add` BETWEEN "'.pSQL($this->date_start_export).'" AND "'.pSQL($this->date_end_export).'"
            AND `id_shop`="'.pSQL($this->context->shop->id).'"';
            
            $orders = Db::getInstance()->executeS($sql);
            $ids_states = Tools::getValue('ids_states');
            $export_csv = array();
            if(!empty($orders) && !empty($ids_states)){
                foreach($orders as $o){
                    if(in_array($o['current_state'],$ids_states)){
                        $Customer = new Customer($o['id_customer']);
                        $AdressDelivery = new Address($o['id_address_delivery']);
                        $Lang = new Language($o['id_lang']);
                        $export_csv[] = array(
                                            'id_order' => $o['id_order'],
                                            'email' => $Customer->email,
                                            'firstname' => $AdressDelivery->firstname,
                                            'lastname' => $AdressDelivery->lastname,
                                            'lang_iso' => $Lang->iso_code,
                                        );
                    }
                }
            }
            
            if(count($export_csv)==0){
                 $this->_html .= $this->displayError($this->l('No order to export'));    
            }else{
                // génération du CSV
                $file_content = '';
                foreach($export_csv as $line){        
                    $count_field = 0;
                    $last_field = count($line);
                    foreach($line as $field){
                         $count_field ++;                 
                        if($count_field==$last_field){
                            $file_content.=$field."\r\n";
                        }else{
                            $file_content.=$field.';';
                        }
                    }
                }
                $filename = 'orders_king_avis.csv';
                $f = fopen(dirname(__FILE__).'/downloads/'.$filename,'w+');
                fwrite($f,$file_content);
                fclose($f);
                if(!$f){
                    $this->_html .= $this->displayError($this->l('File creation error, verify access to the folder').' : "/modules/'.$this->name.'/downloads/"');    
                }else{
                    $this->_html .= $this->displayConfirmation(count($export_csv).' '.$this->l('exported orders').'<br/>
                                                               <u><a href="'.__PS_BASE_URI__.'modules/'.$this->name.'/downloads/download.php?token='._COOKIE_IV_.'&file='.$filename.'" target="_blank">'.$this->l('direct download CSV file').'</a></u> '.$this->l('or').' <u><a href="'.__PS_BASE_URI__.'modules/'.$this->name.'/downloads/'.$filename.'" target="_blank">'.$this->l('right click -> save as, via this link').'</a></u>'
                                                               );
                } 
            }
        }
        
        if(Tools::isSubmit('btnSubmitCache')){
            Configuration::updateValue('KINGAVIS_LAST_CRON','');
            $this->_html .= $this->displayConfirmation($this->l('The cache was emptied.'));   
        }
        
        
        // si besoin forcer le renvoi des commandes
        $id_order_max = Db::getInstance()->getValue('SELECT MAX(`id_order`) FROM `'._DB_PREFIX_.'orders`');
        if($id_order_max>0){$id_order_from = $id_order_max-1;}
        $id_order_to = $id_order_max;
        
        if(Tools::isSubmit('btnSubmitForceExport')){
            
            $id_order_from = Tools::getValue('id_order_from');
            $id_order_to = Tools::getValue('id_order_to');
            $ids_orders_states_force = Tools::getValue('ids_orders_states_force');
            if(empty($ids_orders_states_force)){$ids_orders_states_force=array(0);}
            
            $ps_orders = Db::getInstance()->executeS('SELECT * FROM `'._DB_PREFIX_.'orders` 
                                                      WHERE `id_order` >="'. pSQL($id_order_from).'" 
                                                      AND `id_order` <="'. pSQL($id_order_to).'"
                                                      AND `current_state` IN('.pSQL(implode(',',$ids_orders_states_force)).')');
            
            if(!empty($ps_orders)){
            
                // supprime de la table interne King-Avis
                $ids_orders_resubmit = array();
                foreach($ps_orders as $o){
                    $ids_orders_resubmit[] = $o['id_order'];
                    Db::getInstance()->execute('DELETE FROM `'._DB_PREFIX_.'king_avis` WHERE `id_order`="'.pSQL($o['id_order']).'"');
                }

                // nouvelle transmission 
                
                // Etape 1
                $this->traceHistoryOrders(pSQL(implode(',',$ids_orders_resubmit)));
                // Etape 2
                $this->_html .= $this->sendOrdersToKingAvis();
                // Etape 3
                $this->_html .= $this->authorizeSendReview();  

                $this->_html .= $this->displayConfirmation($this->l('The transmission of orders has been made').' ('.$this->l('orders sent').' : '.count($ps_orders).')');   
            }else{  
                $this->_html .= $this->displayError($this->l('No orders to process'));  
            }
            
        }
        $this->context->smarty->assign(array('id_order_from'=>$id_order_from,'id_order_to'=>$id_order_to));
        
        
    }

    public function getContent(){
        
        global $smarty;
        global $cookie;
        
        // force le ré-enregistrement du module sur les hooks
        // 1.4 <
        if($this->ps_version<=1.4){
            $this->registerHook('footer');
        // 1.5 - 1.6
        }else{
            $this->registerHook('displayFooter');
        }
        // --

        if(Tools::isSubmit('btnSubmitConfig')){
            if(!Tools::getValue('merchant_id') || !Tools::getValue('merchant_token')){
                $this->_postErrors[] = $this->l('Please complete all fields');
            }   
        }
        if(!sizeof($this->_postErrors)){
                $this->_postProcess();
        }else{
            foreach($this->_postErrors AS $err){
                $this->_html .= $this->displayError($err);
            }
        }
		
        if($this->ps_version<=1.4){
                $id_lang = $cookie->id_lang;	
        }else{
                $id_lang = $this->context->cookie->id_lang;	
        }
        
        $orders_states = OrderState::getOrderStates($id_lang);
        $smarty->assign(array(
            'displayName' => $this->displayName,
            'url_king_avis_login' => $this->url_king_avis.$this->iso_lang.'/auth/login/merchant/',
            '_path' => $this->_path,
            'merchant_id' => Configuration::get('KINGAVIS_MERCHANT_ID'),
            'merchant_token' => Configuration::get('KINGAVIS_MERCHANT_TOKEN'),
            'merchant_private_key' => Configuration::get('KINGAVIS_MERCHANT_PRIVATE_KEY'),
            'transfer_mode' => Configuration::get('KINGAVIS_TRANSFER_MODE'),
            'ids_orders_states' => unserialize(Configuration::get('KINGAVIS_IDS_ORDERS_STATES')),
            'orders_states' => $orders_states,
            'hide_msg_end_order' => Configuration::get('KINGAVIS_HIDE_MSG_END_ORDER'),
            'date_start' => $this->date_start_export,
            'date_end' => $this->date_end_export,
            'order_states' => OrderState::getOrderStates($cookie->id_lang),
        ));
            
        $this->_html .= $smarty->fetch(dirname(__FILE__).'/views/templates/admin/page.tpl'); 

        return $this->_html;
    }
    
    /* 
     * Le footer du shop déclenche l'action
     */
    public function hookDisplayFooter(){
        
        // uniquement sur le front office
        $token = Tools::getValue('token');
        if(empty($token)){

            global $smarty;

            // exécute la tâche chaque 15 min.
            $current_time = time();
            $last_cron = Configuration::get('KINGAVIS_LAST_CRON');

            if(empty($last_cron)){
                $mins = 0;
            }else{
                $delay = 900; // 900sec = 15 minutes 
                $last_cron_delay = $last_cron+$delay;
                $mins = ($current_time-$last_cron_delay)/60;
            }

            if($mins>=0){
     
                Configuration::updateValue('KINGAVIS_LAST_CRON',$current_time);
                $transfer_mod = Configuration::get('KINGAVIS_TRANSFER_MODE');
                
                // envoi en mode Pixel
                if($transfer_mod==1){
                    // step 1
                    $this->traceHistoryOrders();
                    // step 2
                    $this->_html .= $this->sendOrdersToKingAvis();
                    // step 3
                    $this->_html .= $this->authorizeSendReview();     
                // envoi en mode AJAX
                }else{

                    if($this->ps_version<=1.4){
                        $smarty->assign('url_cron',_PS_BASE_URL_SSL_.__PS_BASE_URI__.'modules/kingavis/cron.php');
                        $view_js = $smarty->fetch(dirname(__FILE__).'/views/templates/front/footer.tpl'); 
                        echo $view_js;
                    }else{
                        $this->context->smarty->assign('url_cron',_PS_BASE_URL_SSL_.__PS_BASE_URI__.'modules/kingavis/cron.php');
                        $this->_html .= $this->context->smarty->fetch(dirname(__FILE__).'/views/templates/front/footer.tpl'); 
                    }
                }
            }

           return $this->_html;
       
        }
        
    }
	
    /* 
     * Méthode file_get_contents optimisée (pour multi-versions)
     */
    function ka_file_get_contents($url){
		
		$res_file_get_contents = Tools::file_get_contents($url);
		// teste avec une méthode alternative
		if(empty($res_file_get_contents)){
                    $ch = curl_init();
                    curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.17 (KHTML, like Gecko) Chrome/24.0.1312.52 Safari/537.17');
                    curl_setopt($ch,CURLOPT_URL, $url);
                    curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($ch,CURLOPT_SSL_VERIFYHOST, false);
                    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, false);
                    $res_file_get_contents = curl_exec($ch);
                    //if(curl_errno($ch)){
                            //echo 'Curl error: ' . curl_error($ch);
                    // }
                    curl_close($ch);
		}
		return $res_file_get_contents;
		
    }
	
    /* Prestashop 1.4 */
    function hookFooter($params)
    {
        if($this->ps_version<=1.4){
                $this->hookDisplayFooter($params);
        }
    }
    
    /*
     * Méthode inutilisée / exigée pour Prestashop Addons
     */
    /*
    public function hookPaymentOptions($params){
        return false;
    }
    */
        
}
?>