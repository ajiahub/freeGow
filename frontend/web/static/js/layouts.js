jQuery(document).ready(function(){
	//拷贝复制
	jQuery("body").on("copy", ".zclip", function(e) {
      e.clipboardData.clearData();
      e.clipboardData.setData("text/plain", $(this).attr("zclip-text"));
      e.preventDefault();
    });
	
	jQuery('.site-menu .site-menu-item .menu-label a').bind('click', function(){
		jQuery('.site-menu .site-menu-item').not(jQuery(this).parents('.site-menu-item')).each(function(itemKey,itemDom){
			jQuery(itemDom).find('li').each(function(itemLiKey,itemLiDom){
				if(!jQuery(itemLiDom).hasClass('menu-label'))
				{
					jQuery(itemLiDom).addClass('hide').hide();
				}
			});
			jQuery(itemDom).removeClass('current-menu');
		});
		
		
		jQuery(this).parents('.site-menu-item').find('li').each(function(itemLiKey,itemLiDom){
			if(!jQuery(itemLiDom).hasClass('menu-label'))
			{
				jQuery(itemLiDom).removeClass('hide').show();
			}
			jQuery(this).parents('.site-menu-item').removeClass('current-menu');
		});
	});
});
