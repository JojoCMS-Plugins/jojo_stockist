function showDivCountry(id){
	if($(id).is(':hidden')){
		$("div.hide-country").hide();
		$(id).show();
	}else{
		$(id).hide();
	}
}

function showDivRegion(id){
	if($(id).is(':hidden')){
		$("div.hide-region").hide();
		$(id).show();
	}else{
		$(id).hide();
	}
}