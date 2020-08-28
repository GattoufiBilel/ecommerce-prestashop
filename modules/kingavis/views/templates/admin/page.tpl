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

<link rel="stylesheet" type="text/css" href="{$_path|escape:'htmlall':'UTF-8'}views/css/bo.css">
<div class="panel">   
    <h2>{$displayName|escape:'htmlall':'UTF-8'}</h2>
    <div id="bo-ka-panel">
        <br/>
        <fieldset>
            <legend><img src="{$_path|escape:'htmlall':'UTF-8'}logo.gif" /> {l s='Information' mod='kingavis'}</legend>
            <u><a href="{$url_king_avis_login|escape:'htmlall':'UTF-8'}" target="_blank">{l s='To use this service you must register on King-Avis.' mod='kingavis'}</a></u><br/>
        </fieldset>
        <br/>
        <fieldset>
            <legend><img src="{$_path|escape:'htmlall':'UTF-8'}logo.gif" />&nbsp;{l s='Configuration' mod='kingavis'}</legend>
            <form method="post">
                <table cellpadding="0" cellspacing="0">
                    <tr>
                        <td>{l s='Merchant' mod='kingavis'} ID</td>
                        <td>
                            <input type="text" name="merchant_id" value="{$merchant_id|escape:'htmlall':'UTF-8'}" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            {l s='Merchant' mod='kingavis'} Token
                        </td>
                        <td>
                            <input type="text" name="merchant_token" value="{$merchant_token|escape:'htmlall':'UTF-8'}" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            {l s='Merchant' mod='kingavis'} Private Key
                        </td>
                        <td>
                            <input type="text" name="merchant_private_key" value="{$merchant_private_key|escape:'htmlall':'UTF-8'}" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            {l s='Transfer mode' mod='kingavis'}
                        </td>
                        <td>
                            <select name="transfer_mode">
                                <option value="0" {if $transfer_mode==0}selected="selected"{/if}>Ajax ({l s='recommended' mod='kingavis'})</option>
                                <option value="1" {if $transfer_mode==1}selected="selected"{/if}>Pixel</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            {l s='Hide confirmation King-Avis end of command' mod='kingavis'}
                        </td>
                        <td>
                            <input type="checkbox" name="hide_msg_end_order" value="1" {if $hide_msg_end_order==1}checked="checked"{/if} />
                        </td>
                    </tr>
                    <tr><td colspan="2"><hr/></td></tr>
                    <tr>
                        <td>
                            {l s='Select the order status for which you want to send review requests' mod='kingavis'}
                        </td>
                        <td>
                            {foreach from=$orders_states item=order_state key=k}
                                <input name="ids_orders_states[]" type="checkbox" value="{$order_state.id_order_state|escape:'htmlall':'UTF-8'}" {if $order_state.id_order_state|in_array:$ids_orders_states}checked="checked"{/if}> {$order_state.name|escape:'htmlall':'UTF-8'}<br/>
                            {/foreach}              
                        </td>
                    </tr>  
                    <tr><td colspan="2"><hr/></td></tr>
                    <tr>
                        <td></td>
                        <td>
                            <input class="button btn btn-default" name="btnSubmitConfig" value="{l s='Save' mod='kingavis'}" type="submit" />
                        </td>
                    </tr>
                </table>
            </form>
        </fieldset>
        <br/>
        <fieldset>
            <legend><img src="{$_path|escape:'htmlall':'UTF-8'}logo.gif" />&nbsp;{l s='Export orders' mod='kingavis'}</legend>
            <a href="#" id="btn_export_orders" class="button btn btn-default">{l s='Show' mod='kingavis'}</a>
            <div id="div_export_orders">
                <strong>
                    {l s='Export orders last 3 months to gather opinions quickly. You must then import this file into your King Guest account.' mod='kingavis'} 
                </strong><br/>
                <br/>
                <form method="post">
                    <table cellpadding="0" cellspacing="0">
                        <tr>
                            <td>{l s='Export orders between' mod='kingavis'}</td>
                            <td>
                                :
                                <input type="text" id="date_start_export" class="date" name="date_start_export" value="{if isset($smarty.post.date_start_export)}{$smarty.post.date_start_export|escape:'htmlall':'UTF-8'}{else}{$date_start|escape:'htmlall':'UTF-8'}{/if}" /> 
                                -
                                <input type="text" id="date_end_export" class="date" name="date_end_export" value="{if isset($smarty.post.date_end_export)}{$smarty.post.date_end_export|escape:'htmlall':'UTF-8'}{else}{$date_end|escape:'htmlall':'UTF-8'}{/if}" />
                                <script>
                                    {literal}
                                        $( document ).ready(function(){
                                            $("#date_start_export").datepicker({
                                              prevText: "",
                                              nextText: "",
                                              dateFormat: "yy-mm-dd",
                                            });
                                        });
                                        $( document ).ready(function(){
                                            $("#date_end_export").datepicker({
                                              prevText: "",
                                              nextText: "",
                                              dateFormat: "yy-mm-dd",
                                            });
                                        });
                                    {/literal}
                                </script>
                            </td>
                        </tr>
                        <tr><td colspan="2"><hr/></td></tr>
                        <tr>
                            <td>{l s='Export orders with status' mod='kingavis'}</td>
                            <td>                 
                                {foreach from=$order_states item=os}
                                    <input type="checkbox" name="ids_states[]" value="{$os.id_order_state|escape:'htmlall':'UTF-8'}" {if isset($smarty.post.ids_states) && in_array($os.id_order_state,$smarty.post.ids_states)}checked="checked"{/if}> {$os.name|escape:'htmlall':'UTF-8'}<br/>
                                {/foreach}
                            </td>
                        </tr>
                        <tr><td colspan="2"><hr/></td></tr>
                        <tr>
                            <td></td>
                            <td>
                                <input class="button btn btn-default" name="btnSubmitExport" value="{l s='Export' mod='kingavis'}" type="submit" />
                            </td>
                        </tr>
                    </table>
                </form>
                <script>
                    $(document).ready(function(){
                        $('#btn_export_orders').click(function(){
                            var div_display;
                            div_display = $('#div_export_orders').css('display');
                            if(div_display==='block'){
                                $('#div_export_orders').css('display','none');
                            }else{
                                $('#div_export_orders').css('display','block');
                            }
                            $('#btn_export_orders').css('display','none');
                            return false;
                        });
                    });
                </script>
            </div>
        </fieldset>
        <br/>
        <fieldset>
            <legend><img src="{$_path|escape:'htmlall':'UTF-8'}logo.gif" />&nbsp;{l s='Cache' mod='kingavis'}</legend>
            <form method="post">
                <table cellpadding="0" cellspacing="0">            
                    <tr>
                        <td>
                            <input class="button btn btn-default" name="btnSubmitCache" value="{l s='Empty the cache' mod='kingavis'}" type="submit" />
                        </td>
                    </tr>
                </table>
            </form>
        </fieldset>  
        <br/>
        <fieldset>
            <legend><img src="{$_path|escape:'htmlall':'UTF-8'}logo.gif" />&nbsp;{l s='Advanced options' mod='kingavis'}</legend>
            <table id="table_advanced_options"><tr><td>
                <a href="#" id="btn_advanced_options" class="button btn btn-default">{l s='Show' mod='kingavis'}</a>
                <div id="div_advanced_options">
                    <strong>{l s='This method is used to force the transmission of commands to King-Avis, if the transmission has failed.' mod='kingavis'}</strong><br/>
                    <br/>
                    <form method="post">
                        <table cellpadding="0" cellspacing="0">            
                            <tr>
                                <td>{l s='Force the transmission of orders' mod='kingavis'} (ID order)</td>
                                <td>                 
                                    <input type="text" class="id_order" name="id_order_from" value="{$id_order_from}" /> {l s='to' mod='kingavis'}
                                    <input type="text" class="id_order" name="id_order_to" value="{$id_order_to}" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    {l s='Having the status' mod='kingavis'}
                                </td>
                                <td>
                                    {foreach from=$orders_states item=order_state key=k}
                                        <input name="ids_orders_states_force[]" type="checkbox" value="{$order_state.id_order_state|escape:'htmlall':'UTF-8'}"> {$order_state.name|escape:'htmlall':'UTF-8'}<br/>
                                    {/foreach}              
                                </td>
                            </tr>  
                            <tr>
                                <td>
                                    <input class="button btn btn-default" name="btnSubmitForceExport" value="{l s='Force transmission' mod='kingavis'}" type="submit" />
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
                <script>
                    $(document).ready(function(){
                        $('#btn_advanced_options').click(function(){
                            var div_display;
                            div_display = $('#div_advanced_options').css('display');
                            if(div_display==='block'){
                                $('#div_advanced_options').css('display','none');
                            }else{
                                $('#div_advanced_options').css('display','block');
                            }
                            $('#btn_advanced_options').css('display','none');
                            return false;
                        });
                    });
                </script>
            </td></tr></table>
        </fieldset>               
    </div>
</div>