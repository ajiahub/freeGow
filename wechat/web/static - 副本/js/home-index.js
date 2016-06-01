jQuery(function() {
	// ajax 获取用户绑定信息
	ajaxGetUserBind();

	// banner控制
	TouchSlide({
		slideCell : "#home-banner",
		titCell : "#home-banner .indicators ul", // 开启自动分页 autoPage:true
		// ，此时设置 titCell 为导航元素包裹层
		mainCell : "#home-banner .items ul",
		effect : "leftLoop",
		autoPlay : true,// 自动播放
		autoPage : true, // 自动分页
		interTime : 5000,
	});

	// 夺宝banner控制
	if (jQuery('#gift-banner').length > 0) {
		TouchSlide({
			slideCell : "#gift-banner",
			titCell : "#gift-banner .indicators ul", // 开启自动分页 autoPage:true
			// ，此时设置 titCell 为导航元素包裹层
			mainCell : "#gift-banner .items ul",
			effect : "leftLoop",
			autoPlay : true,// 自动播放
			autoPage : true, // 自动分页
			interTime : 5000,
		});
	}
	// 夺宝滚动控制
	if (jQuery('#gift-slider').length > 0) {
		TouchSlide({
			slideCell : "#gift-slider",
			titCell : "#gift-slider .indicators ul", // 开启自动分页 autoPage:true
			// ，此时设置 titCell 为导航元素包裹层
			mainCell : "#gift-slider .items ul",
			effect : "leftLoop",
			autoPlay : true,// 自动播放
			autoPage : true, // 自动分页
			interTime : 5000,
		});
	}

	/*




	if (jQuery('.home-pro-left').length > 0) {
		TouchSlide({
			slideCell : ".home-pro-left",
			titCell : ".home-pro-left .indicators ul", // 开启自动分页 autoPage:true
			// ，此时设置 titCell 为导航元素包裹层
			mainCell : ".home-pro-left .items ul",
			effect : "fade",
			autoPlay : true,// 自动播放
			autoPage : true, // 自动分页
			interTime : 5000,
		});
	}
	if (jQuery('.home-pro-1').length > 0) {
		TouchSlide({
			slideCell : ".home-pro-1",
			titCell : ".home-pro-1 .indicators ul", // 开启自动分页 autoPage:true
			// ，此时设置 titCell 为导航元素包裹层
			mainCell : ".home-pro-1 .items ul",
			effect : "fade",
			autoPlay : true,// 自动播放
			autoPage : true, // 自动分页
			interTime : 5000,
		});
	}
	if (jQuery('.home-pro-2').length > 0) {
		TouchSlide({
			slideCell : ".home-pro-2",
			titCell : ".home-pro-2 .indicators ul", // 开启自动分页 autoPage:true
			// ，此时设置 titCell 为导航元素包裹层
			mainCell : ".home-pro-2 .items ul",
			effect : "fade",
			autoPlay : true,// 自动播放
			autoPage : true, // 自动分页
			interTime : 5000,
		});
	}
	*/

	// 倒计时
	updateActTime();

	// 夺宝倒计时
	updateGiftTime();

	// 滚动
	var scrollTimer;
	$(".home-topnews ul").hover(function() {
		clearInterval(scrollTimer);
	}, function() {
		scrollTimer = setInterval(function() {
			scrollNews();
		}, 5000);
	}).trigger("mouseout");

	// 用户推广信息
	if (jQuery('.tg-userinfo').length > 0) {
		jQuery('body').addClass('has-tguser');
	}

	jQuery('.close-userinfo').bind('click', function() {
		if (jQuery(this).parents('.bind').length > 0) {
			jQuery('.userBind').remove();
		} else {
			jQuery('.tg-userinfo').remove();
			jQuery('body').removeClass('has-tguser');
		}

	});

	jQuery("img.lazy").lazyload({
		event : 'scroll',
		threshold : 200,
		failure_limit : 20,
		effect : "fadeIn",
	});

	// 间隔几秒显示最新下单的人
	setInterval("lastPurchaseUser('/home/AjaxLastPurchase')", 15000);

});

// 新闻滚动
function scrollNews() {
	var lineHeight = $(".home-topnews ul > li:first").innerHeight();
	$(".home-topnews ul").animate({
		"margin-top" : -lineHeight + "px"
	}, 600, function() {
		$(".home-topnews ul").css({
			"margin-top" : "0px"
		}).find("li:first").appendTo($(".home-topnews ul"));
	})
}

// 倒计时函数
function updateActTime() {
	var date = new Date();
	var time = date.getTime();

	jQuery(".home-special ul li[data-acttime]").each(
			function(i) {
				var actDate = this.getAttribute("data-acttime");
				var actDate1 = eval('new Date('
						+ actDate.replace(/\d+(?=-[^-]+$)/, function(a) {
							return parseInt(a, 10) - 1;
						}).match(/\d+/g) + ')');
				var actTime = actDate1.getTime();

				if (actTime > time) {
					var lag = (actTime - time) / 1000;
					if (lag > 0) {
						var second = Math.floor(lag % 60);
						var minite = Math.floor((lag / 60) % 60);
						var hour = Math.floor((lag / 3600) % 24);
						var day = Math.floor((lag / 3600) / 24);

						if (second < 10)
							second = '0' + second;
						if (minite < 10)
							minite = '0' + minite;
						if (hour < 10)
							hour = '0' + hour;

						var timestring = '<span>' + day + '</span>天 <span>'
								+ hour + '</span>:<span>' + minite
								+ '</span>:<span>' + second + '</span>';
						if (jQuery(this).find('.home-special-wrapper').find(
								'.act-timer').length == 0) {
							jQuery(this).find('.home-special-wrapper').append(
									'<div class="act-timer">' + timestring
											+ '</div>');
						} else {
							jQuery(this).find('.home-special-wrapper').find(
									'.act-timer').html(timestring);
						}

					}
				}
			});
	setTimeout("updateActTime()", 1000);
}

// 夺宝时间倒计时
function updateGiftTime() {
	jQuery('.gift-lists .item:has(.good-info-timer)')
			.each(
					function() {
						var objDom = jQuery(this);
						var openTime = objDom.attr('data-opentime');
						var time = objDom.attr('data-time');

						openDate = new Date();
						openDate.setTime(openTime);
						openDateTime = openDate.getTime();

						timeDate = new Date();
						timeDate.setTime(time);
						time = timeDate.getTime();

						if (openDateTime > time) {
							var lag = (openDateTime - time) / 1000;
							if (lag > 0) {
								var second = Math.floor(lag % 60);
								var minite = Math.floor((lag / 60) % 60);
								var hour = Math.floor((lag / 3600) % 24);
								var day = Math.floor((lag / 3600) / 24);

								if (day < 10) {
									day = '0' + day;
								}
								if (hour < 10) {
									hour = '0' + hour;
								}
								if (minite < 10) {
									minite = '0' + minite;
								}
								if (second < 10) {
									second = '0' + second;
								}
								objDom.find('.good-info-timer').empty().html(
										'<small class="color-eee"><span>' + day
												+ '</span>天<span>' + hour
												+ '</span>:<span>' + minite
												+ '</span>:<span>' + second
												+ '</span></small>');
								objDom.attr({
									'data-time' : time + 1000
								});
							}
						} else {
							objDom
									.find('.good-info-timer')
									.empty()
									.html(
											'<small class="color-888">开奖时间：</small><span>已开奖</span>');
						}
					});
	setTimeout("updateGiftTime()", 1000);
}
/**
 * ajax 获取当前用户手机绑定闲情
 */
function ajaxGetUserBind() {
	var uid = $('.userId').html();
	$.ajax({
		data : {
			uid : uid
		},
		type : "get",
		url : "/Home/AjaxGetUserBind",
		dataType : "json",
		success : function(data) {
			if (data == 1) {
				$('.tg-userinfo').removeClass('hide');
			} else if (data == 2) {
				$('.userBind').removeClass('hide');
			}
		},
	});
}
