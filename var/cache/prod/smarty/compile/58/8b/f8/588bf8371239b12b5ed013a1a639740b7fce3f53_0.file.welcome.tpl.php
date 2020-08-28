<?php
/* Smarty version 3.1.33, created on 2020-02-21 11:45:47
  from 'C:\wamp64\www\prestashop\prestashop_1.7.6.2\modules\cartsguru\views\templates\admin\welcome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e4fb4dbabca97_77195567',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '588bf8371239b12b5ed013a1a639740b7fce3f53' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\prestashop_1.7.6.2\\modules\\cartsguru\\views\\templates\\admin\\welcome.tpl',
      1 => 1582281934,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4fb4dbabca97_77195567 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="cartsguru-welcome" class="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['activeView']->value,'htmlall','UTF-8' ));?>
">
    <div class="header">
        <div class="inner-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <img class="logo" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['imagesUrl']->value,'urlpathinfo','UTF-8' ));?>
logo_black.png" />
                    </div>
                </div>
                <div class="success-message text-center">
                    <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['imagesUrl']->value,'urlpathinfo','UTF-8' ));?>
success.png" />
                    <h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You successfuly installed Carts Guru','mod'=>'cartsguru'),$_smarty_tpl ) );?>
</h1>
                </div>
                <div class="no-selected-store-message text-center">
                    <h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The multistore option is enabled. If you want configure the module, please select store.','mod'=>'cartsguru'),$_smarty_tpl ) );?>
</h1>
                </div>
                <div class="row header-text">
                    <div class="col-lg-12">
                        <h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The best way to recover your abandoned carts','mod'=>'cartsguru'),$_smarty_tpl ) );?>
</h1>
                        <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Carts Guru is the all-in-one solution to recover your abandoned carts and turn them into sales. Use Emails, SMS, Automatic Calls, Facebook & Instagram to convert more than 20% of your lost customers into sales.','mod'=>'cartsguru'),$_smarty_tpl ) );?>
 </h2>
                    </div>
                </div>
                <form action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formUrl']->value,'htmlall','UTF-8' ));?>
" method="post" class="have-account-form form">
                    <div class="form-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Plug Carts Guru into your PrestaShop store','mod'=>'cartsguru'),$_smarty_tpl ) );?>
</div>
                    <button type="button" class="close-form-btn" onclick="cg_switchView()">
                        X
                    </button>
                    <div class="row">
                        <div class="col-md-4">
                            <input class="input full-width" name="siteid" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Site ID','mod'=>'cartsguru'),$_smarty_tpl ) );?>
" required value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['siteid']->value,'htmlall','UTF-8' ));?>
"/>
                        </div>
                        <div class="col-md-4">
                            <input class="input full-width" name="authkey" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Auth Key','mod'=>'cartsguru'),$_smarty_tpl ) );?>
" required value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['authkey']->value,'htmlall','UTF-8' ));?>
"/>
                        </div>
                        <div class="col-md-4">
                            <button class="btn-full full-width" name="submitConnect"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Connect it now','mod'=>'cartsguru'),$_smarty_tpl ) );?>
</button>
                        </div>
                    </div>
                    <div class="sub-text row">
                        <div class="col-sm-12">
                            <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Don t know this information?','mod'=>'cartsguru'),$_smarty_tpl ) );?>
</span>
                            <a class="link" target="_blank" href="https://app.carts.guru"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Access it here','mod'=>'cartsguru'),$_smarty_tpl ) );?>
</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="triangle-slice"></div>
    <div class="footer">
        <div class="inner-section">
            <div class="container-fluid">

                 <div class="success-buttons">
                    <button class="btn-not-full" onclick="cg_switchView('view-have-account', 'view-success')"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit my settings','mod'=>'cartsguru'),$_smarty_tpl ) );?>
</button>
                    <button class="btn-full" onclick="location.href='https://app.carts.guru/login?utm_source=appstore&utm_medium=prestashop'"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Access to Carts Guru platform','mod'=>'cartsguru'),$_smarty_tpl ) );?>
</button>
                </div>

                <div class="try-buttons">
                    <div class="button-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enjoy all features during your 10-Days','mod'=>'cartsguru'),$_smarty_tpl ) );?>
</div>
                    <button class="btn-not-full" onclick="cg_switchView('view-have-account')"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'I have an account','mod'=>'cartsguru'),$_smarty_tpl ) );?>
</button>
                    <button class="btn-full" onclick="location.href='https://app.carts.guru/signup?utm_source=appstore&utm_medium=prestashop'" name="submitHasNoAccount"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Try it now for free','mod'=>'cartsguru'),$_smarty_tpl ) );?>
</button>
                </div>

                <div class="row">
                    <div class="list">
                        <div class="col-lg-6">
                            <div class="list-item">
                                <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['imagesUrl']->value,'urlpathinfo','UTF-8' ));?>
checkmark.png" />
                                <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Performance-based pricing.','mod'=>'cartsguru'),$_smarty_tpl ) );?>
</span>
                                (<a class="link" target="_blank" href="https://carts.guru?platform=prestashop&utm_source=appstore&utm_medium=prestashop"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'see details here','mod'=>'cartsguru'),$_smarty_tpl ) );?>
</a>)
                            </div>
                            <div class="list-item">
                                <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['imagesUrl']->value,'urlpathinfo','UTF-8' ));?>
checkmark.png" />
                                <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Easy-to-use, incredibly intuitive solution','mod'=>'cartsguru'),$_smarty_tpl ) );?>
</span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="list-item">
                                <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['imagesUrl']->value,'urlpathinfo','UTF-8' ));?>
checkmark.png" />
                                <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Run unlimited campaigns, with unlimited actions','mod'=>'cartsguru'),$_smarty_tpl ) );?>
</span>
                            </div>
                            <div class="list-item">
                                <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['imagesUrl']->value,'urlpathinfo','UTF-8' ));?>
checkmark.png" />
                                <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Risk Free. No credit cards required. Cancel any time','mod'=>'cartsguru'),$_smarty_tpl ) );?>
</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 text-center text-bold features-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Features','mod'=>'cartsguru'),$_smarty_tpl ) );?>
</div>
                </div>
                <div class="row">
                    <div clas="col-sm-12">
                        <div class="channel-block-list text-center">
                            <article class="channel-block">
                                <div class="channel-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email retargeting','mod'=>'cartsguru'),$_smarty_tpl ) );?>
</div>
                                <div class="channel-picture email"></div>
                                <div class="channel-link"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Learn more','mod'=>'cartsguru'),$_smarty_tpl ) );?>
</div>
                                <div class="channel-info">
                                    <div class="channel-block-info-triangle"></div>
                                    <p class="no-margin"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customize campaigns with your brand. Launch them at the perfect moment with automation.','mod'=>'cartsguru'),$_smarty_tpl ) );?>
</p>
                                    <div class="col-xs-6 channel-ef-el">
                                        <div class="channel-ef">52%</div>
                                        <div class="channel-ef-t"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Open rate','mod'=>'cartsguru'),$_smarty_tpl ) );?>
</div>
                                    </div>
                                    <div class="col-xs-6 channel-ef-el">
                                        <div class="channel-ef">14%</div>
                                        <div class="channel-ef-t"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click rate','mod'=>'cartsguru'),$_smarty_tpl ) );?>
</div>
                                    </div>
                                </div>
                            </article>
                            <article class="channel-block">
                                <div class="channel-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'SMS retargeting','mod'=>'cartsguru'),$_smarty_tpl ) );?>
</div>
                                <div class="channel-picture sms"></div>
                                <div class="channel-link"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Learn more','mod'=>'cartsguru'),$_smarty_tpl ) );?>
</div>
                                <div class="channel-info">
                                    <div class="channel-block-info-triangle"></div>
                                    <p class="no-margin"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'With an outstanding 97% open rate. Add SMS Marketing to your mix.','mod'=>'cartsguru'),$_smarty_tpl ) );?>
</p>
                                    <div class="col-xs-6 channel-ef-el">
                                        <div class="channel-ef">20%</div>
                                        <div class="channel-ef-t"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Conversion rate','mod'=>'cartsguru'),$_smarty_tpl ) );?>
</div>
                                    </div>
                                    <div class="col-xs-6 channel-ef-el">
                                        <div class="channel-ef">1%</div>
                                        <div class="channel-ef-t"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unsubscription','mod'=>'cartsguru'),$_smarty_tpl ) );?>
</div>
                                    </div>
                                </div>
                            </article>
                            <article class="channel-block">
                                <div class="channel-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Facebook Messenger','mod'=>'cartsguru'),$_smarty_tpl ) );?>
</div>
                                <div class="channel-picture call"></div>
                                <div class="channel-link"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Learn more','mod'=>'cartsguru'),$_smarty_tpl ) );?>
</div>
                                <div class="channel-info">
                                    <div class="channel-block-info-triangle"></div>
                                    <p class="no-margin"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save this for your most important products and customers. Contact your customer automatically.','mod'=>'cartsguru'),$_smarty_tpl ) );?>
</p>
                                    <div class="col-xs-6 channel-ef-el">
                                        <div class="channel-ef">45%</div>
                                        <div class="channel-ef-t"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click rate','mod'=>'cartsguru'),$_smarty_tpl ) );?>
</div>
                                    </div>
                                    <div class="col-xs-6 channel-ef-el">
                                        <div class="channel-ef">15%</div>
                                        <div class="channel-ef-t"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Conversion rate','mod'=>'cartsguru'),$_smarty_tpl ) );?>
</div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <a class="text-bold features-title" target="_blank" href="https://carts.guru?platform=prestashop&utm_source=appstore&utm_medium=prestashop">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Access Carts Guru website','mod'=>'cartsguru'),$_smarty_tpl ) );?>

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
}
