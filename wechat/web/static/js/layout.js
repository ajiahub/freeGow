var lastAddTime;
var lastPostCount = 0;

jQuery(function() {
	jQuery('.media').on('touchstart touchend', function(e) {
		if (e.type == 'touchstart') // touchstart
		{
			jQuery(this).addClass('touch');
		} else
			(e.type == 'touchend') // touchend
		{
			jQuery(this).removeClass('touch');
		}
	});

	jQuery('.header-search form, .footer-search form, .pageheader form')
			.submit(function() {
				if (jQuery(this).find('input[name=key]').val() == '') {
					jQuery(this).find('input[name=key]').focus();
					return false;
				}
			});
	
	// 返回顶部
	if (jQuery(".to-top").size() > 0) {
		if (jQuery(window).scrollTop() > 50) {
			jQuery(".to-top").fadeIn();
		} else {
			jQuery(".to-top").fadeOut();
		}
	}
	
	jQuery(window).scroll(function() {
		// 返回顶部
		if (jQuery(".to-top").size() > 0) {
			if (jQuery(window).scrollTop() > 50) {
				jQuery(".to-top").fadeIn();
			} else {
				jQuery(".to-top").fadeOut();
			}
		}
	});

	// 点击返回顶部
	if (jQuery(".to-top").size() > 0) {
		jQuery(".to-top").bind('touchstart touchmove touchend click tap taphold swipe mousedown', function(e) {
			e.preventDefault();
			e.stopPropagation();
			
			jQuery('body').animate({
				scrollTop : 0
			}, 'slow');
			
			return false;
		});
	}
});

/**
 * 操作搜索
 */
function toggleHeaderSearch() {
	if (jQuery('.pagetitle .header-search').hasClass('hide')) {
		jQuery('.pagetitle .header-search').removeClass('hide').show();
		jQuery('.pagetitle a.page-search').addClass('hide').hide();
	} else {
		jQuery('.pagetitle .header-search').addClass('hide').hide();
		jQuery('.pagetitle a.page-search').removeClass('hide').show();
	}
}

/**
 * 倒计时函数
 * 
 * @param url
 * @param g_id
 * 
 * 添加方法： <script> jQuery(document).ready(function(){ url = ''; g_id = '';
 * setInterval("lastPurchaseUser("+url+", "+g_id+")", 10000); }); </script>
 */
function lastPurchaseUser(url, g_id) {
	return true;
	if (!url || url == '' || url == undefined)
		url = '/home/AjaxLastPurchase';
	lastPostCount = lastPostCount + 1;

	jQuery
			.ajax({
				type : 'POST',
				url : url,
				dataType : 'json',
				data : {
					'addtime' : lastAddTime,
					'g_id' : g_id,
					'postcount' : lastPostCount,
				},
				error : function() {
				},
				success : function(data) {
					if ((data.code == 1 || data.code == '1') && data.data) {
						var actData = data.data;
						$lastAct = jQuery('<div class="last-act">'
								+ '	<div class="container clearfix">'
								+ '		<div class="pull-left last-user text-overflow">'
								+ '			<a href="" class="act-link"></a>'
								+ '			<img src="" class="user-avatar">'
								+ '			<p class="color-fff clearfix">'
								+ '				<span class="act-name"></span>下了<span class="act-count"></span>笔订单 <span class="act-timer"></span>'
								+ '			</p>' + '		</div>' + '	</div>' + '</div>');

						$lastAct.find('.user-avatar').attr({
							'src' : actData.img_s
						});
						$lastAct.find('p').find('.act-name').text(
								actData.nickname);
						$lastAct.find('p').find('.act-count').text(
								actData.count);
						$lastAct.find('p').find('.act-timer').text(
								actData.acttime);
						jQuery('body').append($lastAct);
						lastAddTime = actData.addtime;

						setTimeout(function() {
							jQuery('body').find('.last-act').remove();
						}, 10000);
					} else {

						jQuery('body').find('.last-act').remove();
					}
				}
			});
}