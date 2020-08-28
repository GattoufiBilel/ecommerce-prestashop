<?php
/* Smarty version 3.1.33, created on 2020-02-24 11:58:57
  from 'C:\wamp64\www\prestashop\prestashop_1.7.6.2\modules\psgdpr\views\templates\front\pdf\personalData.messages-tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e53ac713eff17_31923808',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3461744e81ab969785aea7232126ae1b943db554' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\prestashop_1.7.6.2\\modules\\psgdpr\\views\\templates\\front\\pdf\\personalData.messages-tab.tpl',
      1 => 1578308174,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e53ac713eff17_31923808 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Messages','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</h2>
<br>
<table id="summary-tab" width="100%">
    <tr>
        <th class="header" valign="middle"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'IP','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</th>
        <th class="header" valign="middle"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Message','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</th>
        <th class="header" valign="middle"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</th>
    </tr>

    <?php if (count($_smarty_tpl->tpl_vars['messages']->value) >= 1) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'message');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['message']->value) {
?>
    <tr>
        <td class="center white"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['message']->value['ip'],'html','UTF-8' ));?>
</td>
        <td class="center white"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['message']->value['message'],'html','UTF-8' ));?>
</td>
        <td class="center white"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['message']->value['date_add'],'html','UTF-8' ));?>
</td>
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php } else { ?>
    <tr>
        <td colspan="3" class="center white"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No messages','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</td>
    </tr>
    <?php }?>
</table>
<?php }
}
