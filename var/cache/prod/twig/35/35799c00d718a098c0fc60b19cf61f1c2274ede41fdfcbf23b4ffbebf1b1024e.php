<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__2cb5696ba8729aedfad0e61b31dd86fb36d4c84304f945f136bb197ab58cfa86 */
class __TwigTemplate_2d6ed647d903c1a3ceb0c2420c10b7f381cd6167858d0e680d3847f308ed137f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/prestashop/prestashop_1.7.6.2/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/prestashop/prestashop_1.7.6.2/img/app_icon.png\" />

<title>Gestionnaire de modules • Elan@Commerce</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminModulesManage';
    var iso_user = 'fr';
    var lang_is_rtl = '0';
    var full_language_code = 'fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'TN';
    var _PS_VERSION_ = '1.7.6.2';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\\\\\'est inscrit sur votre boutique';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = 'a10a3cd1c5d967bda8fabeb7bfcc526b';
    var token_admin_orders = 'f17ca108b71e5c2c149258ea4340f643';
    var token_admin_customers = '9c4d99b54fc56c014487f64ca27a1347';
    var token_admin_customer_threads = '2f92f9c5b999adf73c5c0e403b7a3f46';
    var currentIndex = 'index.php?controller=AdminModulesManage';
    var employee_token = 'e14b27f483adcc9a42f2096e5b8b4fe6';
    var choose_language_translate = 'Choisissez la langue';
    var default_language = '1';
    var admin_modules_link = '/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php/improve/modules/catalog/recommended?_token=zKvzTVzwK3SgPyYcrc9GaUwtmESDqdiEyw-IB1Y2fh0';
    var admin_notification_get_link = '/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php/common/notifications?_token=zKvzTVzwK3SgPyYcrc9GaUwtmESDqdiEyw-IB1Y2fh0';
    var admin_notification_push_link = '/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php/common/notifications/ack?_token=zKvzTVzwK3SgPyYcrc9GaUwtmESDqdiEyw-IB1Y2fh0';
    var tab_modules_list = '';
    var update_success_msg = 'Mise à jour réussie';
    var errorLogin = 'PrestaShop n\\\\\\'a pas pu se connecter à Addons. Veuillez vérifier vos identifiants et votre connexion Internet.';
    var search_product_msg = 'Rechercher un produit';
  </script>

      <link href=\"/prestashop/prestashop_1.7.6.2/admin671aj8bie/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/prestashop_1.7.6.2/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/prestashop_1.7.6.2/admin671aj8bie/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/prestashop_1.7.6.2/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/prestashop_1.7.6.2/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/prestashop\\/prestashop_1.7.6.2\\/admin671aj8bie\\/\";
var baseDir = \"\\/prestashop\\/prestashop_1.7.6.2\\/\";
var changeFormLanguageUrl = \"\\/prestashop\\/prestashop_1.7.6.2\\/admin671aj8bie\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=zKvzTVzwK3SgPyYcrc9GaUwtmESDqdiEyw-IB1Y2fh0\";
var currency = {\"iso_code\":\"TND\",\"sign\":\"TND\",\"name\":\"Dinar tunisien\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"TND\",\"currencySymbol\":\"TND\",\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":3,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/prestashop/prestashop_1.7.6.2/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/prestashop_1.7.6.2/admin671aj8bie/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/prestashop_1.7.6.2/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/prestashop_1.7.6.2/js/admin.js?v=1.7.6.2\"></script>
<script type=\"text/javascript\" src=\"/prestashop/prestashop_1.7.6.2/admin671aj8bie/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/prestashop_1.7.6.2/js/tools.js?v=1.7.6.2\"></script>
<script type=\"text/javascript\" src=\"/prestashop/prestashop_1.7.6.2/admin671aj8bie/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/prestashop_1.7.6.2/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/prestashop_1.7.6.2/admin671aj8bie/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/prestashop_1.7.6.2/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/prestashop_1.7.6.2/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>

  <script type=\"text/javascript\">
/*
 * Return total of notification per checkbox checked
 * @param  int nbNewCustomer
 * @param  int nbNewOrder
 * @param  int nbNewMessage
 * @return int result        Total of Notification
 */
function getNotification(nbNewCustomer, nbNewOrder, nbNewMessage) {
    let result = 0;
    //if radiobutton is checked
     result += nbNewOrder;      result += nbNewCustomer;      result += nbNewMessage; 
    return result;
}

function loadAjax(adminController) {
    \$.ajax({
        type: 'POST',
        dataType: 'JSON',
        url: adminController,
        data: {
            ajax: true,
            action: \"GetNotifications\",
        },

        success: function(data) {

            let nbNewCustomers = parseInt(data.customer.total);
            let nbNewOrders = parseInt(data.order.total);
            let nbNewCustomerMessages = parseInt(data.customer_message.total);

            let nbTotalNotification = getNotification(nbNewCustomers, nbNewOrders, nbNewCustomerMessages);

            favicon.badge(nbTotalNotification);
        },
        error: function(err) {
            console.log(err);
            console.log(adminController);
        },
    });
}

function updateNotifications(type) {
  \$.post(
    baseAdminDir + \"ajax.php\",
    {
      \"updateElementEmployee\": \"1\",
      \"updateElementEmployeeType\": type
    }
  );
}

\$(document).ready(function() {
    adminController = adminController.replace(/\\amp;/g, '');
    //set the configuration of the favicon
    window.favicon = new Favico({
        animation: 'popFade',
        bgColor: BgColor,
        textColor: TxtColor,
    });
    loadAjax(adminController)
    setInterval(function() {
        loadAjax(adminController);
    }, 60000); //refresh notification every 60 seconds

    //update favicon when you click on the customer tab into your backoffice
    \$(document).on('click', '#subtab-AdminCustomers', function (e) {
        updateNotifications('customer');
    });
    //update favicon when you click on the customer service tab into your backoffice
    \$(document).on('click', '#subtab-AdminCustomerThreads', function (e) {
        updateNotifications('customer_message');
    });
    //update favicon when you click on the order tab into your backoffice
    \$(document).on('click', '#subtab-AdminOrders', function (e) {
        updateNotifications('order');
    });
});
</script>

<script type=\"text/javascript\">
    let BgColor = \"#DF0067\";
    let TxtColor = \"#ffffff\";
    let CheckBoxOrder = \"1\";
    let CheckBoxCustomer = \"1\";
    let CheckBoxMessage = \"1\";
    let adminController = \"http://localhost/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php?controller=AdminAjaxFaviconBO&amp;token=42eabd5818465a079ab8816c9b808495\";
</script>

<script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost\\/prestashop\\/prestashop_1.7.6.2\\/admin671aj8bie\\/index.php?controller=AdminGamification&token=092ab8e3057de29f49e8abdbc5a6eac2\";
            var current_id_tab = 45;
        </script>

";
        // line 174
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>

<body class=\"lang-fr adminmodulesmanage\">

  <header id=\"header\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php?controller=AdminDashboard&amp;token=4367e2d598065164b90b6dbd540c6991\"></a>
      <span id=\"shop_version\">1.7.6.2</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"http://localhost/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php?controller=AdminOrders&amp;token=f17ca108b71e5c2c149258ea4340f643\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=7ca2258896e32848ce118cda7cbbcd24\"
                 data-item=\"Évaluation du catalogue\"
      >Évaluation du catalogue</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php/improve/modules/manage?token=14bdeb99a9617a88e2d25a864ef460af\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=78ce95ec41790b44c896124f05c6d7b9\"
                 data-item=\"Nouveau bon de réduction\"
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php/sell/catalog/products/new?token=14bdeb99a9617a88e2d25a864ef460af\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php?controller=AdminCategories&amp;addcategory&amp;token=b0ed0d66d020f28a3fc35f20d10ccf1b\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"64\"
        data-icon=\"icon-AdminModulesSf\"
        data-method=\"add\"
        data-url=\"index.php/improve/modules/manage?-IB1Y2fh0\"
        data-post-link=\"http://localhost/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php?controller=AdminQuickAccesses&token=f06d55d3b576a42a7f24b80b394e9898\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Modules - Liste\"
      >
        <i class=\"material-icons\">add_circle</i>
        Ajouter cette page à l'Accès Rapide
      </a>
        <a class=\"dropdown-item\" href=\"http://localhost/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php?controller=AdminQuickAccesses&token=f06d55d3b576a42a7f24b80b394e9898\">
      <i class=\"material-icons\">settings</i>
      Gérer les accès rapides
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php?controller=AdminSearch&amp;token=fcaaaac41943d8c88b561bf0b2778bcf\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Partout
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Partout</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, unité de gestion des stocks (SKU), référence...\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalogue</a>
        <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"E-mail, nom...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clients par nom</a>
        <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clients par adresse IP</a>
        <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Commandes</a>
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Factures</a>
        <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Paniers</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">RECHERCHE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
      </div>

      
      
      <div class=\"component\" id=\"header-shop-list-container\">
          <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/prestashop/prestashop_1.7.6.2/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      Voir ma boutique
    </a>
  </div>
      </div>

              <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Commandes<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clients<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Avez-vous consulté vos <strong><a href=\"http://localhost/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=c1624d11e0ef16b720ee72ac208b410a\">paniers abandonnés</a></strong> ?<br> Votre prochaine commande s'y trouve peut-être !
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l'instant :(<br>
              Êtes-vous actifs sur les réseaux sociaux en ce moment ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l'instant.<br>
              C'est du temps libéré pour autre chose !
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - enregistré le <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\"component\" id=\"header-employee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      
      <span class=\"employee_avatar\"><img class=\"avatar rounded-circle\" src=\"http://profile.prestashop.com/cherifiadnene%40gmail.com.jpg\" /></span>
      <span class=\"employee_profile\">Ravi de vous revoir Adnen</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php/configure/advanced/employees/1/edit?_token=zKvzTVzwK3SgPyYcrc9GaUwtmESDqdiEyw-IB1Y2fh0\">
      <i class=\"material-icons\">settings</i>
      Votre profil
    </a>
    </div>
    
    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/ressources/documentation?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">book</i> Documentation</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/formation?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">school</i> Formation</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">person_pin_circle</i> Trouver un expert</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com/fr/?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-fr&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">extension</i> Place de marché de PrestaShop</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">help</i> Centre d'assistance</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php?controller=AdminLogin&amp;logout=1&amp;token=ac8548708e6adae77323eb68a49380a4\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Déconnexion</span>
    </a>
  </div>
</div>
      </div>
    </nav>

      </header>

  <nav class=\"nav-bar d-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php/configure/advanced/employees/toggle-navigation?_token=zKvzTVzwK3SgPyYcrc9GaUwtmESDqdiEyw-IB1Y2fh0\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"http://localhost/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php?controller=AdminDashboard&amp;token=4367e2d598065164b90b6dbd540c6991\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Tableau de bord</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Vendre</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"http://localhost/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php?controller=AdminOrders&amp;token=f17ca108b71e5c2c149258ea4340f643\" class=\"link\">
                    <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                    <span>
                    Commandes
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"http://localhost/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php?controller=AdminOrders&amp;token=f17ca108b71e5c2c149258ea4340f643\" class=\"link\"> Commandes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php/sell/orders/invoices/?_token=zKvzTVzwK3SgPyYcrc9GaUwtmESDqdiEyw-IB1Y2fh0\" class=\"link\"> Factures
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"http://localhost/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php?controller=AdminSlip&amp;token=7658d4bc27e54eafba24c61f726fd159\" class=\"link\"> Avoirs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php/sell/orders/delivery-slips/?_token=zKvzTVzwK3SgPyYcrc9GaUwtmESDqdiEyw-IB1Y2fh0\" class=\"link\"> Bons de livraison
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"http://localhost/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php?controller=AdminCarts&amp;token=c1624d11e0ef16b720ee72ac208b410a\" class=\"link\"> Paniers
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php/sell/catalog/products?_token=zKvzTVzwK3SgPyYcrc9GaUwtmESDqdiEyw-IB1Y2fh0\" class=\"link\">
                    <i class=\"material-icons mi-store\">store</i>
                    <span>
                    Catalogue
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php/sell/catalog/products?_token=zKvzTVzwK3SgPyYcrc9GaUwtmESDqdiEyw-IB1Y2fh0\" class=\"link\"> Produits
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php/sell/catalog/categories?_token=zKvzTVzwK3SgPyYcrc9GaUwtmESDqdiEyw-IB1Y2fh0\" class=\"link\"> Catégories
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"http://localhost/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php?controller=AdminTracking&amp;token=981a9a5d8257b3312c8b1f53f455befe\" class=\"link\"> Suivi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"http://localhost/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php?controller=AdminAttributesGroups&amp;token=069ef9f8dfec0cf9681fc50f8ddcc37e\" class=\"link\"> Attributs &amp; caractéristiques
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php/sell/catalog/brands/?_token=zKvzTVzwK3SgPyYcrc9GaUwtmESDqdiEyw-IB1Y2fh0\" class=\"link\"> Marques et fournisseurs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"http://localhost/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php?controller=AdminAttachments&amp;token=ab2cde5f1725e067ba83f01c7fb44b8a\" class=\"link\"> Fichiers
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"http://localhost/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php?controller=AdminCartRules&amp;token=78ce95ec41790b44c896124f05c6d7b9\" class=\"link\"> Réductions
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php/sell/stocks/?_token=zKvzTVzwK3SgPyYcrc9GaUwtmESDqdiEyw-IB1Y2fh0\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php/sell/customers/?_token=zKvzTVzwK3SgPyYcrc9GaUwtmESDqdiEyw-IB1Y2fh0\" class=\"link\">
                    <i class=\"material-icons mi-account_circle\">account_circle</i>
                    <span>
                    Clients
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php/sell/customers/?_token=zKvzTVzwK3SgPyYcrc9GaUwtmESDqdiEyw-IB1Y2fh0\" class=\"link\"> Clients
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"http://localhost/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php?controller=AdminAddresses&amp;token=caa3664aa7db4edaad9033f58f22720f\" class=\"link\"> Adresses
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"http://localhost/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php?controller=AdminCustomerThreads&amp;token=2f92f9c5b999adf73c5c0e403b7a3f46\" class=\"link\">
                    <i class=\"material-icons mi-chat\">chat</i>
                    <span>
                    SAV
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"http://localhost/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php?controller=AdminCustomerThreads&amp;token=2f92f9c5b999adf73c5c0e403b7a3f46\" class=\"link\"> SAV
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"http://localhost/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php?controller=AdminOrderMessage&amp;token=189442e91b7edb62c4b92f19592696ca\" class=\"link\"> Messages prédéfinis
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"http://localhost/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php?controller=AdminReturn&amp;token=1645bc5da0a1f9fbaa17c76338dfb4b1\" class=\"link\"> Retours produits
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"http://localhost/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php?controller=AdminStats&amp;token=7ca2258896e32848ce118cda7cbbcd24\" class=\"link\">
                    <i class=\"material-icons mi-assessment\">assessment</i>
                    <span>
                    Statistiques
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Personnaliser</span>
          </li>

                          
                
                                                
                                                    
                <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php/improve/modules/manage?_token=zKvzTVzwK3SgPyYcrc9GaUwtmESDqdiEyw-IB1Y2fh0\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Modules
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_up
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php/improve/modules/manage?_token=zKvzTVzwK3SgPyYcrc9GaUwtmESDqdiEyw-IB1Y2fh0\" class=\"link\"> Module Manager
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                              <a href=\"http://localhost/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php?controller=AdminPsMboModule&amp;token=c92724784546422e469dc2a78b0a5e25\" class=\"link\"> Catalogue de modules
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                  <a href=\"/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php/improve/design/themes/?_token=zKvzTVzwK3SgPyYcrc9GaUwtmESDqdiEyw-IB1Y2fh0\" class=\"link\">
                    <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                    <span>
                    Apparence
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"137\" id=\"subtab-AdminThemesParent\">
                              <a href=\"/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php/improve/design/themes/?_token=zKvzTVzwK3SgPyYcrc9GaUwtmESDqdiEyw-IB1Y2fh0\" class=\"link\"> Thème et logo
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"134\" id=\"subtab-AdminPsMboTheme\">
                              <a href=\"http://localhost/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php?controller=AdminPsMboTheme&amp;token=2be8dd55462c0ae827cdb9443d11c448\" class=\"link\"> Catalogue de thèmes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminMailThemeParent\">
                              <a href=\"/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php/improve/design/mail_theme/?_token=zKvzTVzwK3SgPyYcrc9GaUwtmESDqdiEyw-IB1Y2fh0\" class=\"link\"> Thème d&#039;email
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                              <a href=\"/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php/improve/design/cms-pages/?_token=zKvzTVzwK3SgPyYcrc9GaUwtmESDqdiEyw-IB1Y2fh0\" class=\"link\"> Pages
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php/improve/design/modules/positions/?_token=zKvzTVzwK3SgPyYcrc9GaUwtmESDqdiEyw-IB1Y2fh0\" class=\"link\"> Positions
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"59\" id=\"subtab-AdminImages\">
                              <a href=\"http://localhost/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php?controller=AdminImages&amp;token=46a2198f196441d0b36637ff5a1054b1\" class=\"link\"> Images
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"125\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php/modules/link-widget/list?_token=zKvzTVzwK3SgPyYcrc9GaUwtmESDqdiEyw-IB1Y2fh0\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                  <a href=\"http://localhost/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php?controller=AdminCarriers&amp;token=fc59d1ab6a0dd8a22aa6c682ee0a0f47\" class=\"link\">
                    <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                    <span>
                    Livraison
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                              <a href=\"http://localhost/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php?controller=AdminCarriers&amp;token=fc59d1ab6a0dd8a22aa6c682ee0a0f47\" class=\"link\"> Transporteurs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                              <a href=\"/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php/improve/shipping/preferences?_token=zKvzTVzwK3SgPyYcrc9GaUwtmESDqdiEyw-IB1Y2fh0\" class=\"link\"> Préférences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                  <a href=\"/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php/improve/payment/payment_methods?_token=zKvzTVzwK3SgPyYcrc9GaUwtmESDqdiEyw-IB1Y2fh0\" class=\"link\">
                    <i class=\"material-icons mi-payment\">payment</i>
                    <span>
                    Paiement
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                              <a href=\"/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php/improve/payment/payment_methods?_token=zKvzTVzwK3SgPyYcrc9GaUwtmESDqdiEyw-IB1Y2fh0\" class=\"link\"> Modes de paiement
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php/improve/payment/preferences?_token=zKvzTVzwK3SgPyYcrc9GaUwtmESDqdiEyw-IB1Y2fh0\" class=\"link\"> Préférences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                  <a href=\"/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php/improve/international/localization/?_token=zKvzTVzwK3SgPyYcrc9GaUwtmESDqdiEyw-IB1Y2fh0\" class=\"link\">
                    <i class=\"material-icons mi-language\">language</i>
                    <span>
                    International
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php/improve/international/localization/?_token=zKvzTVzwK3SgPyYcrc9GaUwtmESDqdiEyw-IB1Y2fh0\" class=\"link\"> Localisation
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                              <a href=\"http://localhost/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php?controller=AdminZones&amp;token=98a2c51ade3ff25d0af29f32431dbb40\" class=\"link\"> Zones géographiques
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php/improve/international/taxes/?_token=zKvzTVzwK3SgPyYcrc9GaUwtmESDqdiEyw-IB1Y2fh0\" class=\"link\"> Taxes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                              <a href=\"/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php/improve/international/translations/settings?_token=zKvzTVzwK3SgPyYcrc9GaUwtmESDqdiEyw-IB1Y2fh0\" class=\"link\"> Traductions
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"80\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Configurer</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                  <a href=\"/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php/configure/shop/preferences/preferences?_token=zKvzTVzwK3SgPyYcrc9GaUwtmESDqdiEyw-IB1Y2fh0\" class=\"link\">
                    <i class=\"material-icons mi-settings\">settings</i>
                    <span>
                    Paramètres de la boutique
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php/configure/shop/preferences/preferences?_token=zKvzTVzwK3SgPyYcrc9GaUwtmESDqdiEyw-IB1Y2fh0\" class=\"link\"> Paramètres généraux
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php/configure/shop/order-preferences/?_token=zKvzTVzwK3SgPyYcrc9GaUwtmESDqdiEyw-IB1Y2fh0\" class=\"link\"> Commandes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                              <a href=\"/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php/configure/shop/product-preferences/?_token=zKvzTVzwK3SgPyYcrc9GaUwtmESDqdiEyw-IB1Y2fh0\" class=\"link\"> Produits
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php/configure/shop/customer-preferences/?_token=zKvzTVzwK3SgPyYcrc9GaUwtmESDqdiEyw-IB1Y2fh0\" class=\"link\"> Clients
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                              <a href=\"/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php/configure/shop/contacts/?_token=zKvzTVzwK3SgPyYcrc9GaUwtmESDqdiEyw-IB1Y2fh0\" class=\"link\"> Contact
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                              <a href=\"/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php/configure/shop/seo-urls/?_token=zKvzTVzwK3SgPyYcrc9GaUwtmESDqdiEyw-IB1Y2fh0\" class=\"link\"> Trafic et SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"http://localhost/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php?controller=AdminSearchConf&amp;token=66218b9cd440b33ccc7362943e58d1ad\" class=\"link\"> Rechercher
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"130\" id=\"subtab-AdminGamification\">
                              <a href=\"http://localhost/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php?controller=AdminGamification&amp;token=092ab8e3057de29f49e8abdbc5a6eac2\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php/configure/advanced/system-information/?_token=zKvzTVzwK3SgPyYcrc9GaUwtmESDqdiEyw-IB1Y2fh0\" class=\"link\">
                    <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                    <span>
                    Paramètres avancés
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                              <a href=\"/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php/configure/advanced/system-information/?_token=zKvzTVzwK3SgPyYcrc9GaUwtmESDqdiEyw-IB1Y2fh0\" class=\"link\"> Informations
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                              <a href=\"/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php/configure/advanced/performance/?_token=zKvzTVzwK3SgPyYcrc9GaUwtmESDqdiEyw-IB1Y2fh0\" class=\"link\"> Performances
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php/configure/advanced/administration/?_token=zKvzTVzwK3SgPyYcrc9GaUwtmESDqdiEyw-IB1Y2fh0\" class=\"link\"> Administration
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                              <a href=\"/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php/configure/advanced/emails/?_token=zKvzTVzwK3SgPyYcrc9GaUwtmESDqdiEyw-IB1Y2fh0\" class=\"link\"> Email
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"108\" id=\"subtab-AdminImport\">
                              <a href=\"/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php/configure/advanced/import/?_token=zKvzTVzwK3SgPyYcrc9GaUwtmESDqdiEyw-IB1Y2fh0\" class=\"link\"> Importer
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php/configure/advanced/employees/?_token=zKvzTVzwK3SgPyYcrc9GaUwtmESDqdiEyw-IB1Y2fh0\" class=\"link\"> Équipe
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php/configure/advanced/sql-requests/?_token=zKvzTVzwK3SgPyYcrc9GaUwtmESDqdiEyw-IB1Y2fh0\" class=\"link\"> Base de données
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                              <a href=\"/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php/configure/advanced/logs/?_token=zKvzTVzwK3SgPyYcrc9GaUwtmESDqdiEyw-IB1Y2fh0\" class=\"link\"> Logs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                              <a href=\"/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php/configure/advanced/webservice-keys/?_token=zKvzTVzwK3SgPyYcrc9GaUwtmESDqdiEyw-IB1Y2fh0\" class=\"link\"> Webservice
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
            </ul>
  
</nav>

<div id=\"main-div\">
          
<div class=\"header-toolbar\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Module Manager</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php/improve/modules/manage?_token=zKvzTVzwK3SgPyYcrc9GaUwtmESDqdiEyw-IB1Y2fh0\" aria-current=\"page\">Modules</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Gestionnaire de modules          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
             

<script>
    
    var isSymfonyContext = true;
    var admin_module_ajax_url_psmbo = 'http://localhost/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php?controller=AdminPsMboModule&token=c92724784546422e469dc2a78b0a5e25';
    var controller = 'AdminModulesManage';
    
    if (isSymfonyContext === false) {
        
        \$(document).ready(function() {
            
            \$('.process-icon-modules-list').parent('a').prop('href', admin_module_ajax_url_psmbo);
            
            \$('.fancybox-quick-view').fancybox({
                type: 'ajax',
                autoDimensions: false,
                autoSize: false,
                width: 600,
                height: 'auto',
                helpers: {
                    overlay: {
                        locked: false
                    }
                }
            });
        });
    }
\t
\t\$(document).on('click', '#page-header-desc-configuration-modules-list', function(event) {
\t\tevent.preventDefault();
\t\topenModalOrRedirect(isSymfonyContext);
\t});
\t
\t\$('.process-icon-modules-list').parent('a').unbind().bind('click', function (event) {
\t\tevent.preventDefault();
\t\topenModalOrRedirect(isSymfonyContext);
\t});
    
    function openModalOrRedirect(isSymfonyContext) {
        if (isSymfonyContext === false) {
            \$('#modules_list_container').modal('show');
            openModulesList();
        } else {
            window.location.href = admin_module_ajax_url_psmbo;
        }
    }
\t
    function openModulesList() {
        \$.ajax({
            type: 'POST',
            url: admin_module_ajax_url_psmbo,
            data: {
                ajax : true,
                action : 'GetTabModulesList',
                controllerName: controller
            },
            success : function(data) {
                \$('#modules_list_container_tab_modal').html(data).slideDown();
                \$('#modules_list_loader').hide();
            },
        });
    }
\t
\t
</script>

                                                          <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-add_module\"
                  href=\"#\"                  title=\"Installer un module\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                >
                  <i class=\"material-icons\">cloud_upload</i>                  Installer un module
                </a>
                                                                        <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-addons_connect\"
                  href=\"#\"                  title=\"Se connecter à la marketplace Addons\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                >
                  <i class=\"material-icons\">vpn_key</i>                  Se connecter à la marketplace Addons
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Aide\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Ffr%252Fdoc%252FAdminModules%253Fversion%253D1.7.6.2%2526country%253Dfr/Aide?_token=zKvzTVzwK3SgPyYcrc9GaUwtmESDqdiEyw-IB1Y2fh0\"
                   id=\"product_form_open_help\"
                >
                  Aide
                </a>
                                    </div>
        </div>
      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <li class=\"nav-item\">
                    <a href=\"/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php/improve/modules/manage?_token=zKvzTVzwK3SgPyYcrc9GaUwtmESDqdiEyw-IB1Y2fh0\" id=\"subtab-AdminModulesManage\" class=\"nav-link tab active current\" data-submenu=\"45\">
                      Modules
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php/improve/modules/alerts?_token=zKvzTVzwK3SgPyYcrc9GaUwtmESDqdiEyw-IB1Y2fh0\" id=\"subtab-AdminModulesNotifications\" class=\"nav-link tab \" data-submenu=\"46\">
                      Alertes
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php/improve/modules/updates?_token=zKvzTVzwK3SgPyYcrc9GaUwtmESDqdiEyw-IB1Y2fh0\" id=\"subtab-AdminModulesUpdates\" class=\"nav-link tab \" data-submenu=\"47\">
                      Mises à jour
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </ul>
    </div>
    
</div>
      
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1256
        $this->displayBlock('content_header', $context, $blocks);
        // line 1257
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1258
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1259
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1260
        echo "
             
<div class=\"modal fade\" id=\"modules_list_container\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t<h3 class=\"modal-title\">Modules et services recommandés</h3>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<div id=\"modules_list_container_tab_modal\" style=\"display:none;\"></div>
\t\t\t\t<div id=\"modules_list_loader\"><i class=\"icon-refresh icon-spin\"></i></div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"mt-3\">
    La version mobile de cette page n'est pas encore disponible.
  </p>
  <p class=\"mt-2\">
    En attendant que cette page soit adaptée au mobile, vous êtes invité à la consulter sur ordinateur.
  </p>
  <p class=\"mt-2\">
    Merci.
  </p>
  <a href=\"http://localhost/prestashop/prestashop_1.7.6.2/admin671aj8bie/index.php?controller=AdminDashboard&amp;token=4367e2d598065164b90b6dbd540c6991\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Précédent
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-FR&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/fr/login?email=cherifiadnene%40gmail.com&amp;firstname=Adnen&amp;lastname=Cherifi&amp;website=http%3A%2F%2Flocalhost%2Fprestashop%2Fprestashop_1.7.6.2%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/prestashop/prestashop_1.7.6.2/admin671aj8bie/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connectez-vous à la place de marché de PrestaShop afin d'importer automatiquement tous vos achats.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Vous n'avez pas de compte ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Les clés pour réussir votre boutique sont sur PrestaShop Addons ! Découvrez sur la place de marché officielle de PrestaShop plus de 3 500 modules et thèmes pour augmenter votre trafic, optimiser vos conversions, fidéliser vos clients et vous faciliter l’e-commerce.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connectez-vous à PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/fr/forgot-your-password\">Mot de passe oublié</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/fr/login?email=cherifiadnene%40gmail.com&amp;firstname=Adnen&amp;lastname=Cherifi&amp;website=http%3A%2F%2Flocalhost%2Fprestashop%2Fprestashop_1.7.6.2%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCréer un compte
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Connexion
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
";
        // line 1381
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 174
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
    }

    // line 1256
    public function block_content_header($context, array $blocks = [])
    {
    }

    // line 1257
    public function block_content($context, array $blocks = [])
    {
    }

    // line 1258
    public function block_content_footer($context, array $blocks = [])
    {
    }

    // line 1259
    public function block_sidebar_right($context, array $blocks = [])
    {
    }

    // line 1381
    public function block_javascripts($context, array $blocks = [])
    {
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "__string_template__2cb5696ba8729aedfad0e61b31dd86fb36d4c84304f945f136bb197ab58cfa86";
    }

    public function getDebugInfo()
    {
        return array (  1471 => 1381,  1466 => 1259,  1461 => 1258,  1456 => 1257,  1451 => 1256,  1442 => 174,  1434 => 1381,  1311 => 1260,  1308 => 1259,  1305 => 1258,  1302 => 1257,  1300 => 1256,  214 => 174,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__2cb5696ba8729aedfad0e61b31dd86fb36d4c84304f945f136bb197ab58cfa86", "");
    }
}
