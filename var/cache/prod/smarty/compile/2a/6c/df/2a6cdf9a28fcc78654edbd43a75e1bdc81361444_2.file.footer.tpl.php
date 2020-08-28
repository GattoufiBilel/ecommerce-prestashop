<?php
/* Smarty version 3.1.33, created on 2020-02-20 12:01:05
  from 'C:\wamp64\www\prestashop\prestashop_1.7.6.2\modules\kingavis\views\templates\front\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e4e66f15a9bb6_26683346',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a6cdf9a28fcc78654edbd43a75e1bdc81361444' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\prestashop_1.7.6.2\\modules\\kingavis\\views\\templates\\front\\footer.tpl',
      1 => 1580394696,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4e66f15a9bb6_26683346 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
    
        document.addEventListener("DOMContentLoaded", function(event) { 
            var jqxhr = $.get("<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url_cron']->value, ENT_QUOTES, 'UTF-8');?>
",function(){
              console.log("cron King-Avis success");
            })
            .fail(function() {
              console.log("cron King-Avis error");
            })
        });
    
<?php echo '</script'; ?>
><?php }
}
