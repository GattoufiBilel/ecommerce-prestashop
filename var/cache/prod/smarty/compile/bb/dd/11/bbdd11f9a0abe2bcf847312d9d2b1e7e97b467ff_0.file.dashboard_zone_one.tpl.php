<?php
/* Smarty version 3.1.33, created on 2020-02-21 12:12:25
  from 'C:\wamp64\www\prestashop\prestashop_1.7.6.2\modules\cartsguru\views\templates\hook\dashboard_zone_one.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e4fbb19aabed0_47179805',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbdd11f9a0abe2bcf847312d9d2b1e7e97b467ff' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\prestashop_1.7.6.2\\modules\\cartsguru\\views\\templates\\hook\\dashboard_zone_one.tpl',
      1 => 1582281934,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4fbb19aabed0_47179805 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section id="cartsguru" class="panel widget">
    <div class="panel-heading">
        <i class="icon-time"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Carts Guru Dashboard','mod'=>'cartsguru'),$_smarty_tpl ) );?>

        <span class="panel-heading-action">
            <a class="list-toolbar-btn" href="#" onclick="refreshDashboard('cartsguru'); return false;" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refresh','mod'=>'cartsguru'),$_smarty_tpl ) );?>
">
                <i class="process-icon-refresh"></i>
            </a>
        </span>
    </div>
    <section id="dash_cg_main" class="">
        <ul class="data_list_large">
            <li>
                <span class="data_label size_l"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Processed Carts','mod'=>'cartsguru'),$_smarty_tpl ) );?>
</span>
                <span class="data_value size_xxl">
                    <span id="cg_processed_carts"></span>
                </span>
            </li>
            <li>
                <span class="data_label size_l"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Orders','mod'=>'cartsguru'),$_smarty_tpl ) );?>
</span>
                <span class="data_value size_xxl">
                    <span id="cg_sales"></span>
                </span>
            </li>
            <li>
                <span class="data_label size_l"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Revenue Recovered','mod'=>'cartsguru'),$_smarty_tpl ) );?>
</span>
                <span class="data_value size_xxl">
                    <span id="cg_turnover"></span>
                </span>
            </li>
        </ul>
    </section>
</section>
<?php }
}
