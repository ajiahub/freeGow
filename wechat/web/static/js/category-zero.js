//初始分页
var page = 1;

jQuery(function() {
	// 用户推广信息
	if (jQuery('.tg-userinfo').length > 0) {
		jQuery('body').addClass('has-tguser');
	}

	jQuery('.close-userinfo').bind('click', function() {
		jQuery('.tg-userinfo').remove();
		jQuery('body').removeClass('has-tguser');
	});

	jQuery("img.lazy").lazyload({
		event : 'scroll',
		threshold : 200,
		failure_limit : 20,
		effect : "fadeIn",
	});

	jQuery(
			'.category-menuwrapper .menu li.active, .category-menuwrapper .submenu li.active')
			.each(
					function() {
						var ulWidth = jQuery(this).parents('ul').width();
						var width = jQuery(this).width();
						var position = jQuery(this).position();
						var menuWidth = jQuery('.category-menuwrapper').width();

						var moveWidth = 0;
						if ((position.left + width) > menuWidth
								&& (ulWidth - position.left) > menuWidth) {
							// 需要左移动
							moveWidth = position.left;
						} else if ((position.left + width) > menuWidth
								&& (ulWidth - position.left) < menuWidth) {
							moveWidth = ulWidth - menuWidth;
						}
						if (moveWidth > 0) {
							jQuery(this).parents('.menu-container').animate({
								scrollLeft : moveWidth
							}, 'slow');
						}
					});
	
	jQuery(window).scroll(function() {
    	//分类滚动跟随
    	if(jQuery(this).scrollTop() > 75)
    	{
    		jQuery('.category-menus').addClass('fixed').find('.menu').addClass('hide').hide();
    	}
    	else
    	{
    		jQuery('.category-menus').removeClass('fixed').find('.menu').removeClass('hide').show();
    	}
	 });

	/*// 页面滚动加载
	jQuery(window)
			.scroll(
					function() {
						// 分类滚动跟随
						if (jQuery(this).scrollTop() > 75) {
							jQuery('.category-menus').addClass('fixed').find(
									'.menu').addClass('hide').hide();
						} else {
							jQuery('.category-menus').removeClass('fixed')
									.find('.menu').removeClass('hide').show();
						}

						if (jQuery(this).scrollTop() + jQuery(window).height()
								+ 50 >= jQuery(document).height()
								&& jQuery(this).scrollTop() > 50) {
							// 当前要加载的页码
							if (!jQuery('.learn-more .btn-more').hasClass(
									'disabled')) {
								var pid = jQuery('.good-lists')
										.attr('data-pid');
								var id = jQuery('.good-lists').attr('data-id');
								var order = jQuery('.good-lists').attr(
										'data-order');
								var area = jQuery('.good-lists').attr(
										'data-area');
								loadGoods(area, pid, id, order);
							}
						}
					});

	// 手动点击加载
	jQuery('.learn-more .btn-more').bind('click touchend tap taphold',
			function() {
				if (!jQuery(this).hasClass('disabled')) {
					var pid = jQuery('.good-lists').attr('data-pid');
					var id = jQuery('.good-lists').attr('data-id');
					var order = jQuery('.good-lists').attr('data-order');
					var area = jQuery('.good-lists').attr('data-area');
					loadGoods(area, pid, id, order);
				}
			})*/
});

function loadGoods(area, pid, id, order) {
	jQuery.ajax({
		type : 'POST',
		url : '/category/ajaxCategoryGoods',
		dataType : 'json',
		data : {
			'area' : area,
			'pid' : pid,
			'id' : id,
			'order' : order,
			'page' : page + 1
		},
		cache : false,
		async : false,
		beforeSend : function() {
			jQuery('.learn-more .btn-more').html(
					'<i class="fa fa-spinner fa-pulse"></i> 正在加载中…').addClass(
					'disabled');
		},
		error : function() {
			setTimeout(function() {
				jQuery('.learn-more .btn-more').text('对不起，加载失败了!').addClass(
						'disabled');
			}, 1500);
			setTimeout(function() {
				jQuery('.learn-more .btn-more').text('点击加载更多!').removeClass(
						'disabled');
			}, 1500);
		},
		success : function(data) {
			if (data.pageHtml && data.currentRows > 0
					&& parseInt(data.currentPage) > parseInt(page)) {
				$pageDom = jQuery(data.pageHtml);

				// 优化懒加载
				$pageDom.find('.lazy').lazyload({
					event : 'scroll',
					threshold : 200,
					failure_limit : 20,
					effect : "fadeIn",
				});
				setTimeout(function() {
					jQuery('.good-lists').append($pageDom);
					page = data.currentPage;

					jQuery('.learn-more .btn-more').text('点击加载更多!')
							.removeClass('disabled');
				}, 1500);
			} else {
				setTimeout(function() {
					jQuery('.learn-more .btn-more').text('亲，没有更多了！').css({
						'background' : '#eee !important',
						'color' : '#666 !important'
					}).addClass('disabled');
				}, 1500);
			}
		}
	});
}