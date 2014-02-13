{if $content}{$content}{/if}
<div id="stockists">
{if $stockists[0]['sc_name']}{$country=$stockists[0]['country_id']}{$region=$stockists[0]['region_id']}{$category=$stockists[0]['st_category']}
    <h3><a href="#" onclick="showDivCountry('#stockists-country-{$country}'); return false;">{$stockists[0]['sc_name']}</a></h3>
    <div id='stockists-country-{$country}' class="hidden">
        <p class="region"><a href="#" onclick="showDivRegion('#stockists-{$region}'); return false;">{$stockists[0]['sr_name']}</a></p>
        <div id='stockists-{$region}' class="hidden">
            <p class="firstcategory">{$category}</p>
{/if}
{foreach from=$stockists item=stockist}
{if $country != $stockist.country_id}{$country=$stockist.country_id}{$region=$stockist.region_id}{$category=$stockist.st_category}
        </div>
    </div>
    <h3><a href="#" onclick="showDivCountry('#stockists-country-{$country}'); return false;">{$stockist.sc_name}</a></h3>
    <div id='stockists-country-{$country}' class="hidden">
        <p class="region"><a href="#" onclick="showDivRegion('#stockists-{$region}'); return false;">{$stockist.sr_name}</a></p>
        <div id='stockists-{$region}' class="hidden">
            <p class="firstcategory">{$category}</p>
{elseif $region != $stockist.region_id}{$region=$stockist.region_id}{$category=$stockist.st_category}
        </div>
        <p class="region"><a href="#" onclick="showDivRegion('#stockists-{$region}'); return false;">{$stockist.sr_name}</a></p>
        <div id='stockists-{$region}' class="hidden">
            <p class="firstcategory">{$category}</p>
{elseif $category != $stockist.st_category}{$category=$stockist.st_category}
            <p class="category">{$category}</p>
{/if}
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
{/foreach}
        </div>
    </div>
</div>