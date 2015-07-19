{if $content}{$content}{/if}
<div id="stockists">
{foreach from=$stockist_array item=s key=k}
    <h2 class="country">{$s.country}</h2>
    <div id="country-{$k}">
    {if $s.regions}{foreach $s.regions rk r}
        <h3 class="region">{$r.region}</h3>
        <div id="region-{$rk}">
            {if $r.categories}{foreach $r.categories ck c}
            <h4 class="category">{$ck}</h4>
            {foreach $c stockist}
            <div class="stockist">
                {if $stockist.st_name}<h5>{$stockist.st_name}</h5>
                {/if}<p>{if $stockist.st_contact}<span>Contact: </span>{$stockist.st_contact}<br />
                {/if}{if $stockist.st_address}{$stockist.st_address}<br/>
                {/if}{if $stockist.st_phone}<span>Phone: </span>{$stockist.st_phone}<br/>
                {/if}{if $stockist.st_fax}<span>Fax: </span>{$stockist.st_fax}<br />
                {/if}{if $stockist.st_email}<a href="mailto:{$stockist.st_email}">{$stockist.st_email}</a>
                {/if}{if $stockist.st_website}<a href="{$stockist.st_website}">{$stockist.st_website_display}</a>
                {/if}</p>
            </div>
            {/foreach}{/foreach}{/if}
        </div>
    {/foreach}{/if}
    </div>
{/foreach}
</div>