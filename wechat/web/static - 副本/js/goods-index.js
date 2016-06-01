/**
 * 添加商品访问量
 */
function addGoodsViews()
{
	var goods_id =  $('input[name=g_id]').val();
	$.ajax({
		type:"get",
		data:{goods_id:goods_id},
		url:"/Goods/AjaxAddGoodsviews",
		dataType:"json",
		sucess:function(data)
		{
			console.log(data);
		},
	});
}

/**
 * 初始化组合切换
 */
function initGoodZuhe(index)
{
	if(jQuery('.good-select .zuhe-attr1').length > 0)
	{
		if(!index) index = 0;
		jQuery('.good-select .zuhe-attr1 span').not(jQuery('.good-select .zuhe-attr1 span').eq(index)).removeClass('active');
		jQuery('.good-select .zuhe-attr1 span').eq(index).addClass('active');
		var key = jQuery('.good-select .zuhe-attr1 span').eq(index).attr('id').substring(5);
		jQuery('.good-select .zuhe-attr2 .good-zuinfo').not(jQuery('.good-select .zuhe-attr2 .good-zuinfo#goodzu-'+key)).addClass('hide').hide();
		
		if(jQuery('.good-select .zuhe-attr2 .good-zuinfo#goodzu-'+key).length > 0)
		{
			jQuery('.good-select .zuhe-attr2 .good-zuinfo#goodzu-'+key).removeClass('hide').show();
			
			if(jQuery('.good-select .zuhe-attr2 .good-zuinfo#goodzu-'+key).find('span.active').length == 0)
			{
				jQuery('.good-select .zuhe-attr2 .good-zuinfo#goodzu-'+key).find('span').eq(0).addClass('active');

				changeGoodzuhe(jQuery('.good-select .zuhe-attr2 .good-zuinfo#goodzu-'+key).find('span').eq(0));
			}
			else
			{
				changeGoodzuhe(jQuery('.good-select .zuhe-attr2 .good-zuinfo#goodzu-'+key).find('span.active'));
			}
		}
		else
		{
			changeGoodzuhe(jQuery('.good-select .zuhe-attr1 span').eq(index));
		}
	}
}

/**
 * 切换组合
 */
function changeGoodzuhe(obj)
{
	var good_id = jQuery(obj).attr('data-good-id');
	var price = jQuery(obj).attr('data-price');
	var scprice = jQuery(obj).attr('data-scprice');
	var wlprice = jQuery(obj).attr('data-wlprice');
	var goodstock = parseInt(jQuery(obj).attr('data-good-stock'));
	var goodnowstock = parseInt(jQuery(obj).attr('data-good-nowstock'));
	var specId= parseInt(jQuery(obj).attr('data-spec-id'));
	
	jQuery('input[name=goods_id]').val(good_id);
	jQuery('.good-price').find('span').text(price);
	jQuery('.good-scprice').find('span').text(scprice);
	jQuery('.good-wlprice').find('span').text(wlprice);
	jQuery('.good-wlprice').find('input[type=hidden]').text(wlprice);
	jQuery('input[name=spec_id]').val(specId);
	jQuery('.good-counts').find('span').text((goodstock-goodnowstock));
	jQuery('.good-nowcount').find('span').text(goodnowstock);
	
	//下架
	if(jQuery('.good-info-wrapper').attr('data-is-onsale') == 0 || jQuery('.good-info-wrapper').attr('data-is-onsale') == '0')
	{
		jQuery('.good-action .btn-buy').addClass('disabled').text('商品已下架').attr({'disabled':'disabled'});
	}
	else if(goodnowstock <= 0)	//库存剩余小于等于0
	{
		jQuery('.good-action .btn-buy').addClass('disabled').text('暂抢光！').attr({'disabled':'disabled'});
	}
	else
	{
		jQuery('.good-action .btn-buy').removeClass('disabled').text('立即领取').removeAttr('disabled');
	}
	
	var slideIndex = jQuery('.focusSlide .items ul li').index(jQuery('.focusSlide .items ul #zuhe-'+good_id));
	TouchSlide({ 
		slideCell: ".focusSlide",
		titCell: ".indicators ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
		mainCell: ".items ul", 
		effect: "leftLoop", 
		autoPlay: false, //自动播放
		autoPage: true, //自动分页
		defaultIndex: slideIndex,
	});
}

jQuery(document).ready(function(){
	//描述部分懒加载
	jQuery('.data-good-description img').each(function(){
		var imgSrc = jQuery(this).attr('src');
		jQuery(this).addClass('lazy').removeAttr('src').attr({'data-original': imgSrc, 'src': '/static/images/loading.jpg'});
	});
	jQuery('.data-good-description').removeClass('hide').show();

	//dom加载完成后添加商品浏览次数
	addGoodsViews();

	// 间隔几秒显示最新下单的人
	var g_id = jQuery('input[type=hidden][name=g_id]').val();
	setInterval("lastPurchaseUser('/home/AjaxLastPurchase', "+g_id+")", 15000);
	
	//懒加载
	jQuery('img.lazy').lazyload({
		event: 'scroll',
		threshold : 150,
	    effect : 'fadeIn',
	});
	
	//评论晒单的图片
	jQuery('.comment-imgs a').touchTouch();
	
	//轮播
	TouchSlide({ 
		slideCell: ".focusSlide",
		titCell: ".indicators ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
		mainCell: ".items ul", 
		effect: "leftLoop", 
		autoPlay: true,//自动播放
		autoPage: true //自动分页
	});
	
	//推荐轮播
	jQuery('.slider').glide({
        autoplay: 3000,
        arrows: true,
        arrowLeftText: '',
        arrowRightText: '',
        navigationCenter: true,
    });
	
	/**
	 * 举报确认
	 */
	jQuery('.goods-report').bind('click touchend tap taphold', function(){
		if(confirm("您确认要举报该商品吗？确认请继续……") == true)
		{
			return true;
		}
		else
		{
			return false;
		}
	});
	
	//下架
	if(jQuery('.good-info-wrapper').attr('data-is-onsale') == 0 || jQuery('.good-info-wrapper').attr('data-is-onsale') == '0')
	{
		jQuery('#focusSlide').addClass('unsale');
		jQuery('.good-action .btn-buy').addClass('disabled').text('商品已下架').attr({'disabled':'disabled'});
	}
	//单品的库存为0
	else if(parseInt(jQuery('.good-nowcount span').text()) <= 0)
	{
		jQuery('.good-action .btn-buy').addClass('disabled').text('暂抢光！').attr({'disabled':'disabled'});
	}
	else
	{
		jQuery('.good-action .btn-buy').removeClass('disabled').text('立即领取').removeAttr('disabled');
	}
	
	//初始化组合
	initGoodZuhe();
	
	//切换组合
	jQuery('.good-select .zuhe-attr1 span').bind('click', function() { 
		  var index = jQuery('.good-select .zuhe-attr1 span').index(jQuery(this));
		  initGoodZuhe(index);
	});

	//切换组合内的方案
	jQuery('.good-select .zuhe-attr2 .good-zuinfo span').bind('click', function() {
		  var index = jQuery(this).parents('.good-zuinfo').find('span').index(jQuery(this));		  
		  jQuery(this).parents('.good-zuinfo').find('span').not(jQuery(this)).removeClass('active');
		  jQuery(this).addClass('active');
		  changeGoodzuhe(jQuery(this));
	});
	
	//关闭来自谁都分享
	jQuery('.close-userinfo').bind('click', function() {
		jQuery('.tg-userinfo').remove();
		jQuery('body').removeClass('has-tguser');
	});
});