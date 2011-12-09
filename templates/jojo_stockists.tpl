{if $content}{$content} 
{/if}<div id="stockist">
	{if $stockists[0]['sc_name']}
		{$country=$stockists[0]['country_id']}
		{$region=$stockists[0]['region_id']}
		{$category=$stockists[0]['st_category']}
		<h3><a href="#" onclick="showDivCountry('#stockists-country-{$country}'); return false;">{$stockists[0]['sc_name']}</a></h3>
		<div id='stockists-country-{$country}' class="hide-country" style="display: none;">
		<p class="region"><a href="#" onclick="showDivRegion('#stockists-{$region}'); return false;">{$stockists[0]['sr_name']}</a></p>
		<div id='stockists-{$region}' style="display: none;" class="hide-region">
		<p class="firstcategory">{$category}</p>
	{/if}
	{foreach from=$stockists item=stockist}
		{if $country != $stockist.country_id}
			</div>
			</div>
			{$country=$stockist.country_id}
			{$region=$stockist.region_id}
			{$category=$stockist.st_category}
			<h3><a href="#" onclick="showDivCountry('#stockists-country-{$country}'); return false;">{$stockist.sc_name}</a></h3>
			<div id='stockists-country-{$country}' class="hide-country" style="display: none;">
			<p class="region"><a href="#" onclick="showDivRegion('#stockists-{$region}'); return false;">{$stockist.sr_name}</a></p>
			<div id='stockists-{$region}' class="hide-region" style="display: none;">
			<p class="firstcategory">{$category}</p>
		{elseif $region != $stockist.region_id}
			</div>
			{$region=$stockist.region_id}
			<p class="region"><a href="#" onclick="showDivRegion('#stockists-{$region}'); return false;">{$stockist.sr_name}</a></p>
			<div id='stockists-{$region}' class="hide-region" style="display: none;">
			{$category=$stockist.st_category}
			<p class="firstcategory">{$category}</p>
		{elseif $category != $stockist.st_category}
			{$category=$stockist.st_category}
			<p class="category">{$category}</p>
		{/if}
		<p class="stockist">
		{if $stockist.st_name}{$stockist.st_name}<br/>{/if}
		{if $stockist.st_address}{$stockist.st_address}<br/>{/if}
		{if $stockist.st_phone}{$stockist.st_phone}<br/>{/if}
		{if $stockist.st_website}<a href="{$stockist.st_website}">{$stockist.st_website}</a>{/if}
		</p>
	{/foreach}
	</div>
	</div>
	 
</div>