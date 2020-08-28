{*
* NOTICE OF LICENSE
*
* Module for Prestashop
*
* 100% Swiss development
* @author Webbax <contact@webbax.ch>
* @copyright -
* @license   -
*}

{if $hide_msg_end_order!==1}
    <div id="fo-ka-confirmation">
        <div class="ka-logo">
            <img src="{if isset($base_dir_ssl)}{$base_dir_ssl|escape:'htmlall':'UTF-8'}{else}{if isset($urls.base_url)}{$urls.base_url|escape:'htmlall':'UTF-8'}{/if}{/if}modules/kingavis/logo.png"/> 
        </div>
        <div class="ka-info">
            {l s='Following receipt of your order, you will be prompted to record your purchase.' mod='kingavis'}<br/>
            {l s='Book welcome the King-Avis Notice email.' mod='kingavis'}
        </div>
        <div style="clear:both;"></div>
    </div>
{/if}