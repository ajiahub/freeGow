jQuery(document).ready(function(){
	//new app carousel
	jQuery('.new-app-carousel').carousel();
	
	//top ten apps
	jQuery('.top-ten-apps ul li').bind('mouseover touchstart touchmove click', function() {
		jQuery(this).parents('ul').find('li').not(jQuery(this)).find('.app-detail-info').addClass('hide').hide();
		jQuery(this).parents('ul').find('li').not(jQuery(this)).find('.app-base-info').removeClass('hide').show();
	
		jQuery(this).find('.app-detail-info').removeClass('hide').show();
		jQuery(this).find('.app-base-info').addClass('hide').hide();
	});
	
	//banner
	jQuery('.slider').glide({
        autoplay: 5000,
        arrows: true,
        arrowLeftText: '<i class="fa fa-lg fa-angle-left"></i>',
        arrowRightText: '<i class="fa fa-lg fa-angle-right"></i>',
        navigationCenter: false,
    });
	//to-apps-wrapper
	jQuery('.to-apps-wrapper .app-info').bind('mouseover touchstart touchmove click', function() {
		jQuery('.to-apps-wrapper .app-info').not(jQuery(this)).removeClass('active');
		jQuery(this).addClass('active');
	});
	
	jQuery('.to-apps-wrapper .app-info').bind('mouseout touchend', function() {
		jQuery(this).removeClass('active');
	});
	
	//category-apps
	jQuery('.category-apps .app-info').bind('mouseover touchstart touchmove click', function() {
		jQuery('.category-apps .app-info').not(jQuery(this)).removeClass('active');
		jQuery(this).addClass('active');
	});
	
	jQuery('.category-apps .app-info').bind('mouseout touchend', function() {
		jQuery(this).removeClass('active');
	});
	
	//featured-apps
	jQuery('.featured-apps .app-info').bind('mouseover touchstart touchmove click', function() {
		jQuery('.featured-apps .app-info').not(jQuery(this)).parents('.app-container').removeClass('active');
		jQuery(this).parents('.app-container').addClass('active');
	});
	
	jQuery('.featured-apps .app-info').bind('mouseout touchend', function() {
		jQuery(this).parents('.app-container').removeClass('active');
	});
	
	//eq container height
	var toAppHeight = jQuery('.to-apps-wrapper').height();
	var popAppHeight = jQuery('.popular-games').height();
	if(toAppHeight > popAppHeight)
	{
		jQuery('.popular-games').height(toAppHeight);
	}
	else
	{
		jQuery('.to-apps-wrapper').height(popAppHeight);
	}
	
	//eq container height
	var catAppHeight = jQuery('.category-apps').height();
	var topAppHeight = jQuery('.top-download-apps').height();
	if(topAppHeight > catAppHeight)
	{
		jQuery('.category-apps').height(topAppHeight);
	}
	else
	{
		jQuery('.top-download-apps').height(catAppHeight);
	}
});