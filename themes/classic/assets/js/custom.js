/*
 * Custom code goes here.
 * A template should always ship with an empty custom.js
 */
 <p class="text">
    <label for="name">{l s='Name'}</label>
    {if isset($customerThread.name)}
    <input type="text" id="name" name="name" value="{$customerThread.name}" readonly="readonly" />
    {else}
    <input type="text" id="name" name="name" value="{$name}" />
    {/if}
</p>
<p class="text">
    <label for="phone">{l s='Phone number'}</label>
    {if isset($customerThread.phone)}
    <input type="text" id="phone" name="phone" value="{$customerThread.phone}" readonly="readonly" />
    {else}
    <input type="text" id="phone" name="phone" value="{$phone}" />
    {/if}
</p>


