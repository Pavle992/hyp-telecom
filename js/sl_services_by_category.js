$(document).ready(function(){


	function createSLServiceCategoryContainer(sl_service_category){

		$(".active:first").removeClass('active');
		$("#nav-smartlife").addClass("active");

		var slServiceCat=$.parseJSON(sl_service_category);

		// setting basic sl_service info
		$("#sl_cat").html(slServiceCat.name);
		$('.jumbotron').css('background-image', 'url(..' + slServiceCat.image_path + ')');
		$("#slCat > h2").html(slServiceCat.name);
		$("#slCat > h4").html(slServiceCat.description);


	}


	var url_params = (window.location.search.replace("?", "")).split("=");

    if (typeof loadContent !== 'undefined' && url_params.length === 2) {
        loadContent(
            '../php/get_sl_service_category.php',
            'sl_service_category', $('#sl_service_category_container'), createSLServiceCategoryContainer, 
            {'name' : url_params[1].replace(/%20/g, ' ') });
    }

});