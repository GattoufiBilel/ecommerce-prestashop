<?php
/* Smarty version 3.1.33, created on 2020-02-25 10:52:22
  from 'C:\wamp64\www\prestashop\prestashop_1.7.6.2\admin671aj8bie\themes\default\template\controllers\stats\stats.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e54ee56ce6760_39283829',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06bed7616b5a9d884d5494d61b83e59ec35ce12c' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\prestashop_1.7.6.2\\admin671aj8bie\\themes\\default\\template\\controllers\\stats\\stats.tpl',
      1 => 1578307639,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e54ee56ce6760_39283829 (Smarty_Internal_Template $_smarty_tpl) {
?>
		<div class="panel">
			<?php if ($_smarty_tpl->tpl_vars['module_name']->value) {?>
				<?php if ($_smarty_tpl->tpl_vars['module_instance']->value && $_smarty_tpl->tpl_vars['module_instance']->value->active) {?>
					<?php echo $_smarty_tpl->tpl_vars['hook']->value;?>

				<?php } else { ?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Module not found','d'=>'Admin.Stats.Notification'),$_smarty_tpl ) );?>

				<?php }?>
			<?php } else { ?>
				<h3 class="space"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please select a module from the left column.','d'=>'Admin.Stats.Notification'),$_smarty_tpl ) );?>
</h3>
			<?php }?>
		</div>
	</div>
</div>
<?php }
}
