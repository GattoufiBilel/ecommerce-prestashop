<?php
/* Smarty version 3.1.33, created on 2020-02-24 08:48:08
  from 'C:\wamp64\www\prestashop\prestashop_1.7.6.2\modules\cartsguru\views\templates\hook\jQuery.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e537fb8a4df16_02418511',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7558a670c785f0ea46165824fa71f2b61d158041' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\prestashop_1.7.6.2\\modules\\cartsguru\\views\\templates\\hook\\jQuery.tpl',
      1 => 1582281934,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e537fb8a4df16_02418511 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
  window.cg_waitingJQuery = [];
  function cg_onJQueryReady (fn) {
    if (window.cgjQuery) {
      fn();
    } else {
      window.cg_waitingJQuery.push(fn);
    }
  }

  function cg_onJQueryLoaded () {
    while (window.cg_waitingJQuery.length > 0) {
      var fn = window.cg_waitingJQuery.shift();
      setTimeout(function () {
        fn();
      }, 500);
    }
  }

  function cg_onReady(callback){
    // in case the document is already rendered
    if (document.readyState!='loading') {
      callback();
    }
    // modern browsers
    else if (document.addEventListener) {
      document.addEventListener('DOMContentLoaded', callback);
    }
    // IE <= 8
    else {
      document.attachEvent('onreadystatechange', function(){
          if (document.readyState=='complete') callback();
      });
    }
  }

  cg_onReady(function(){
    if (window.jQuery) {
      window.cgjQuery = window.jQuery;
      cg_onJQueryLoaded();
    } else {
      var script = document.createElement('script');
      document.head.appendChild(script);
      script.type = 'text/javascript';
      script.src = "//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js";
      script.onload = function() {
        window.cgjQuery = jQuery.noConflict(true);
        cg_onJQueryLoaded();
      };
    }
  });
<?php echo '</script'; ?>
>
<?php }
}
