<?php
/* Smarty version 3.1.33, created on 2020-02-24 11:58:57
  from 'C:\wamp64\www\prestashop\prestashop_1.7.6.2\modules\psgdpr\views\templates\front\pdf\personalData.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e53ac714ce9c3_03526604',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '425261859d982a653be08d436f0e37f0d0888741' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\prestashop_1.7.6.2\\modules\\psgdpr\\views\\templates\\front\\pdf\\personalData.tpl',
      1 => 1578308174,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e53ac714ce9c3_03526604 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo $_smarty_tpl->tpl_vars['style_tab']->value;?>



<table width="100%" id="body" border="0" cellpadding="0" cellspacing="0" style="margin:0;">
    <!-- general customer info -->
    <tr>
        <td colspan="12">

            <?php echo $_smarty_tpl->tpl_vars['generalInfo_tab']->value;?>


        </td>
    </tr>

    <tr>
        <td colspan="12" height="30">&nbsp;</td>
    </tr>

    <!-- addresses tab -->
    <tr>
        <td colspan="12">

            <?php echo $_smarty_tpl->tpl_vars['addresses_tab']->value;?>


        </td>
    </tr>

    <tr>
        <td colspan="12" height="10">&nbsp;</td>
    </tr>

    <!-- order list tab -->
    <tr>
        <td colspan="12">

            <?php echo $_smarty_tpl->tpl_vars['orders_tab']->value;?>


        </td>
    </tr>

    <tr>
        <td colspan="12" height="20">&nbsp;</td>
    </tr>

    <!-- cart list tab -->
    <tr>
        <td colspan="12">

            <?php echo $_smarty_tpl->tpl_vars['carts_tab']->value;?>


        </td>
    </tr>

    <tr>
        <td colspan="12" height="10">&nbsp;</td>
    </tr>

    <!-- messages tab -->
    <tr>
        <td colspan="12">

            <?php echo $_smarty_tpl->tpl_vars['messages_tab']->value;?>


        </td>
    </tr>

    <tr>
        <td colspan="12" height="10">&nbsp;</td>
    </tr>

    <!-- connections tab -->
    <tr>
        <td colspan="12">

            <?php echo $_smarty_tpl->tpl_vars['connections_tab']->value;?>


        </td>
    </tr>

    <tr>
        <td colspan="12" height="10">&nbsp;</td>
    </tr>


    <!-- modules tab -->
    <tr>
        <td colspan="12">

            <?php echo $_smarty_tpl->tpl_vars['modules_tab']->value;?>


        </td>
    </tr>

    <tr>
        <td colspan="12" height="10">&nbsp;</td>
    </tr>
</table>
<?php }
}
