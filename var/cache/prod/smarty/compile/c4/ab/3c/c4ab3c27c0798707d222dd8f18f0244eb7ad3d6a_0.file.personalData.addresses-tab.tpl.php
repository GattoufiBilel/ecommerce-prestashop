<?php
/* Smarty version 3.1.33, created on 2020-02-24 11:58:57
  from 'C:\wamp64\www\prestashop\prestashop_1.7.6.2\modules\psgdpr\views\templates\front\pdf\personalData.addresses-tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e53ac713c4f88_09120649',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4ab3c27c0798707d222dd8f18f0244eb7ad3d6a' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\prestashop_1.7.6.2\\modules\\psgdpr\\views\\templates\\front\\pdf\\personalData.addresses-tab.tpl',
      1 => 1578308174,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e53ac713c4f88_09120649 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Addresses','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</h2>
<br>
<table id="summary-tab" width="100%">
    <tr>
        <th class="header" valign="middle"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Alias','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</th>
        <th class="header" valign="middle"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Company','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</th>
        <th class="header" valign="middle"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</th>
        <th class="header" valign="middle"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Address','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</th>
        <th class="header" valign="middle"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Phone(s)','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</th>
        <th class="header" valign="middle"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Country','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</th>
        <th class="header" valign="middle"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</th>
    </tr>

    <?php if (count($_smarty_tpl->tpl_vars['addresses']->value) >= 1) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addresses']->value, 'address');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['address']->value) {
?>
    <tr>
        <td class="center white"><?php echo $_smarty_tpl->tpl_vars['address']->value['alias'];?>
</td>
        <td class="center white"><?php echo $_smarty_tpl->tpl_vars['address']->value['company'];?>
</td>
        <td class="center white"><?php echo $_smarty_tpl->tpl_vars['address']->value['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['address']->value['lastname'];?>
</td>
        <td class="center white"><?php echo $_smarty_tpl->tpl_vars['address']->value['address1'];?>
 <?php echo $_smarty_tpl->tpl_vars['address']->value['address2'];?>
 <?php echo $_smarty_tpl->tpl_vars['address']->value['postcode'];?>
 <?php echo $_smarty_tpl->tpl_vars['address']->value['city'];?>
</td>
        <td class="center white"><?php echo $_smarty_tpl->tpl_vars['address']->value['phone'];?>
 <?php echo $_smarty_tpl->tpl_vars['address']->value['phone_mobile'];?>
</td>
        <td class="center white"><?php echo $_smarty_tpl->tpl_vars['address']->value['country'];?>
</td>
        <td class="center white"><?php echo $_smarty_tpl->tpl_vars['address']->value['date_add'];?>
</td>
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php } else { ?>
    <tr>
        <td colspan="7" class="center white"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No addresses','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</td>
    </tr>
    <?php }?>
</table>

<?php }
}
