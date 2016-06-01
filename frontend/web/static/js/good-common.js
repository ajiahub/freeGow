var numReg = /^\d+$/;	//非负整数
var floatReg = /^\+{0,1}\d+(\.\d{1,2})?$/;	//非负浮点数，精确到小数点两位
var float = /^[\u4e00-\u9fa5_—【】\- （）() * a-zA-Z0-9]+$/;

jQuery(document).ready(function(){
	//判断页面内容是否被修改
	var pageChange = false;
	var imgCount = jQuery('#image .imgfile input[type=hidden]').length;
	var zuCount = jQuery('#zuhe .speclist-table input[type=hidden]').length;
	//修改基础商品信息
	jQuery('#base select[name], #base input[name], #base textarea[name]').change(function() {
		pageChange = true;
	});

	jQuery(window).bind('beforeunload',function(){
		//基础商品被修改，上传有新截图和添加了新的组合
		if(pageChange || jQuery('#image .imgfile input[type=hidden]').length!==imgCount || jQuery('#zuhe .speclist-table input[type=hidden]').length !== zuCount)
		{
			return '您输入的商品信息尚未保存，确定离开此页面吗？';
		}
	});

	//更新商品分区
	jQuery('#base select[name=area_id]').change(function(){
		var area_id = jQuery('#base select[name=area_id]').val();
		if(area_id !== '')
		{
			jQuery.ajax({
				type: 'POST',
				url: '/goods/ajaxareacategories',
				dataType: 'json',
				async: false,
				data: {'area_id': area_id},
				error:function(){},
				success:function(data){
					if(data.code == 1 || data.code == '1')
					{
						jQuery('#base select[name=cat_id]').empty().append(jQuery('<option value="">请选择商品分类</option>'+data.categories));
					}
					else
					{
						alert('获取分区分类失败');
					}
				}
			});
		}
	});

	//input file
	jQuery('.fileuploadform:has(input[type=file]) .btn-upload').bind('click', function() {
		jQuery(this).parents('.fileuploadform').find('input[type=file]').click();
	});

	//图片上传
	jQuery(".fileuploadform input[type=file]").change(function(){
		var showimg = jQuery(this).parents('.fileuploadform').find('.imglist');
		var btn = jQuery(this).parents('form').find('.btn-upload');
		var fileDom = jQuery(this);
		fileDom.wrap('<form action="/goods/goodpicupload" method="post" enctype="multipart/form-data"></form>');
		jQuery(this).parents('.uploadForm').find('form').ajaxSubmit({
			dataType:  'json',
			beforeSend: function() {
				//showimg.empty();
				var percentVal = '0%';
				btn.addClass('disabled').text("上传中...");
			},
			uploadProgress: function(event, position, total, percentComplete) {
				btn.addClass('disabled').text("上传中..."+percentComplete + '%');
			},
			success: function(data) {
				if(data.code==0 || data.code=='0'){
					alert(data.msg);
					btn.removeClass('disabled').html('<i class="fa fa-file-image-o"></i> 添加图片');
				} else {
					showimg.append(
						'<div class="imgfile">'+
						'<div class="thumbnail">'+
						'<img src="'+data.pic+'" style="margin:5px auto;">'+
						'<div class="text-center">'+
						'<input type="hidden" name="image_id[]" value="'+data.image_id+'">'+
						'<a href="javascript:void(0)" class="btn btn-default btn-xs btn-setdefault" onClick="setDefault('+data.image_id+', this);">封面</a>'+
						'<a href="javascript:void(0)" class="btn btn-default btn-xs" onClick="deleteImg('+data.image_id+',this);">移除</a>'+
						'</div>'+
						'</div>'+
						'</div>'
					);

					btn.removeClass('disabled').html('<i class="fa fa-file-image-o"></i> 添加图片');
				}
				fileDom.unwrap();
			},
			error:function(xhr){
				//console.log(xhr);
				alert('上传失败');
				btn.removeClass('disabled').html('<i class="fa fa-file-image-o"></i> 添加图片');
				fileDom.unwrap();
			}
		});
	});

	//输入验证
	jQuery('.goodsaveform #base .form-group:has(.help-block) input[type=text]:enabled,.goodsaveform #base .form-group:has(.help-block) select[name=category_id]:enabled').bind('blur', function(){
		var a =(parseFloat(document.getElementsByTagName('input')[5].value)+parseFloat(document.getElementsByTagName('input')[4].value))<=parseFloat(document.getElementsByTagName('input')[8].value);

		if($.trim(jQuery(this).val()) == '')
		{
			//为空
			jQuery(this).parents('.form-group').addClass('has-error').find('.help-block').text('不能为空，请您正确输入或选择相应商品信息!').removeClass('hide').show();
		}

		else{
			//不为空
			if((jQuery(this).attr('name') =='goods_name' || jQuery(this).attr('name') =='goods_title')&&  !float.test(jQuery(this).val())){
				//控制字数
				jQuery(this).parents('.form-group').addClass('has-error').find('.help-block').text('请您输入正确的商品信息，不能有特殊符号！！！').removeClass('hide').show();
			}else
			if(jQuery(this).attr('name') =='goods_name'&& jQuery(this).val().length > 12 ){
				//控制字数
				jQuery(this).parents('.form-group').addClass('has-error').find('.help-block').text('请您正确输入或选择相应商品信息!字数必须控制在12字以内！！！').removeClass('hide').show();
			}else if((jQuery(this).attr('name') == 'goodsStock' || jQuery(this).attr('name') == 'goodsNowStock')
				&& !numReg.test(jQuery(this).val()))
			{
				//库存必须是正整数
				jQuery(this).parents('.form-group').addClass('has-error').find('.help-block').text('请正确输入库存信息，应该是大于等于0的整数数字。').removeClass('hide').show();
			}
			else if((jQuery(this).attr('name') == 'scPrice' || jQuery(this).attr('name') == 'Price' ||
				jQuery(this).attr('name') == 'wlPrice' || jQuery(this).attr('name') == 'fxPrice')
				&& !numReg.test(jQuery(this).val()) && !floatReg.test(jQuery(this).val()))
			{
				//价格可以是整数和浮点数，精确小数点后两位
				jQuery(this).parents('.form-group').addClass('has-error').find('.help-block').text('请正确输入价格信息，价格应该为大于等于0，可以精确的小数点后面两位。').removeClass('hide').show();
			}
			else if((jQuery(this).attr('name') == 'Price' || jQuery(this).attr('name') == 'wlPrice' || jQuery(this).attr('name') == 'jsPrice')
				&& a)
			{
				jQuery(this).parents('.form-group').addClass('has-error').find('.help-block').text('平台计算金必须小于现价与物流价的和。').removeClass('hide').show();
			}
			else if(jQuery(this).attr('name') == 'intervaltime' && !numReg.test(jQuery(this).val()))
			{
				//购买时间是正整数
				jQuery(this).parents('.form-group').addClass('has-error').find('.help-block').text('请正确输入购买间隔秒数，应该是大于等于0的整数数字。').removeClass('hide').show();
			}
			else
			{
				jQuery(this).parents('.form-group').removeClass('has-error').find('.help-block').text('').addClass('hide').hide();
			}
		}
	});

	jQuery('.spec-form .form-group:has(.help-block) input[type=text]:enabled').bind('blur', function(){
		var b =(parseFloat(document.getElementById("Price").value)+parseFloat(document.getElementById("wlPrice").value))<=parseFloat(document.getElementsByTagName('input')[8].value);

		if($.trim(jQuery(this).val()) == '')
		{
			//为空
			jQuery(this).parents('.form-group').addClass('has-error').find('.help-block').text('不能为空，请您正确输入相应商品信息!').removeClass('hide').show();
			check = false;
		}
		else
		{
			//不为空
			if((jQuery(this).attr('name') == 'goodsStock' || jQuery(this).attr('name') == 'goodsNowStock')
				&& !numReg.test(jQuery(this).val()))
			{
				//库存必须是正整数
				jQuery(this).parents('.form-group').addClass('has-error').find('.help-block').text('请正确输入库存信息，应该是大于等于0的整数数字。').removeClass('hide').show();
				check = false;
			}
			else if((jQuery(this).attr('name') == 'scPrice' || jQuery(this).attr('name') == 'Price' ||
				jQuery(this).attr('name') == 'wlPrice' || jQuery(this).attr('name') == 'fxPrice')
				&& !numReg.test(jQuery(this).val()) && !floatReg.test(jQuery(this).val()))
			{
				//价格可以是整数和浮点数，精确小数点后两位
				jQuery(this).parents('.form-group').addClass('has-error').find('.help-block').text('请正确输入价格信息，价格应该为大于等于0，可以精确到小数点后面两位。').removeClass('hide').show();
				check = false;
			}
			else if((jQuery(this).attr('name') == 'Price' || jQuery(this).attr('name') == 'wlPrice' || jQuery(this).attr('name') == 'jsPrice')
				&& b)
			{
				jQuery(this).parents('.form-group').addClass('has-error').find('.help-block').text('现价与物流价的和必须大于平台计算金。').removeClass('hide').show();
				check = false;
			}
			else
			{
				jQuery(this).parents('.form-group').removeClass('has-error').find('.help-block').text('').addClass('hide').hide();
			}
		}
	});

	//图片验证
	jQuery('.goodsaveform').submit(function(){

		jQuery('.btn-form-submit').addClass('disabled').attr({'disabled': 'disabled'});
		checkbase = checkBase();
        checkstock= checkStock();
		if(!checkbase)
		{
			jQuery('.btn-form-submit').removeClass('disabled').removeAttr('disabled');
			return false;
		}
        if(!checkstock)
        {
            jQuery('.btn-form-submit').removeClass('disabled').removeAttr('disabled');
            return false;
        }
		if(!checkImage())
		{
			jQuery('.btn-form-submit').removeClass('disabled').removeAttr('disabled');
			return false;
		}

		if(!checkprice()){
			jQuery('.btn-form-submit').removeClass('disabled').removeAttr('disabled');
			return false;
		}

		jQuery(window).unbind('beforeunload');
		return true;
	});

	//规格参数验证
	jQuery('.spec-form').submit(function(e){
		var b =(parseFloat(document.getElementById("Price").value)+parseFloat(document.getElementById("wlPrice").value))<=parseFloat(document.getElementsByTagName('input')[8].value);
		e.preventDefault();
		var check = true;

		jQuery('.btn-spec-submit').addClass('disabled').attr({'disabled': 'disabled'}).text('提交中…');

		jQuery('.spec-form .form-group:has(.help-block) input[type=text]').each(function(index, dom){
			if($.trim(jQuery(this).val()) == '')
			{
				//为空
				jQuery(this).parents('.form-group').addClass('has-error').find('.help-block').text('不能为空，请您正确输入相应商品信息!').removeClass('hide').show();
				check = false;
			}
			else
			{
				//不为空
				if((jQuery(this).attr('name') == 'goodsStock' || jQuery(this).attr('name') == 'goodsNowStock')
					&& !numReg.test(jQuery(this).val()))
				{
					//库存必须是正整数
					jQuery(this).parents('.form-group').addClass('has-error').find('.help-block').text('请正确输入库存信息，应该是大于等于0的整数数字。').removeClass('hide').show();
					check = false;
				}
				else if((jQuery(this).attr('name') == 'scPrice' || jQuery(this).attr('name') == 'Price' ||
					jQuery(this).attr('name') == 'wlPrice' || jQuery(this).attr('name') == 'fxPrice')
					&& !numReg.test(jQuery(this).val()) && !floatReg.test(jQuery(this).val()))
				{
					//价格可以是整数和浮点数，精确小数点后两位
					jQuery(this).parents('.form-group').addClass('has-error').find('.help-block').text('请正确输入价格信息，价格应该为大于等于0，可以精确到小数点后面两位。').removeClass('hide').show();
					check = false;
				}
				else if((jQuery(this).attr('name') == 'Price' || jQuery(this).attr('name') == 'wlPrice' || jQuery(this).attr('name') == 'jsPrice')
					&& b)
				{
					jQuery(this).parents('.form-group').addClass('has-error').find('.help-block').text('现价与物流价的和必须大于平台计算金。').removeClass('hide').show();
					check = false;
				}
				else
				{
					jQuery(this).parents('.form-group').removeClass('has-error').find('.help-block').text('').addClass('hide').hide();
				}
			}
		});

		/*if(jQuery('.spec-form .form-group').eq(0).find('.imglist').find('input[type=hidden]').length == 0)
		 {
		 jQuery('.spec-form .form-group').eq(0).addClass('has-error').find('.help-block').text('请至少为该规格属性上传一张图片！').removeClass('hide').show();
		 check = false;
		 }*/

		if(!check)
		{
			jQuery('.btn-spec-submit').removeClass('disabled').removeAttr('disabled').text('提交');
			return false;
		}
		jQuery.ajax({
			type: 'POST',
			url: '/goods/ajaxsavegoodspec',
			dataType: 'json',
			async: false,
			data: jQuery('.spec-form').serialize(),
			error: function(){},
			success:function(data){
				if(data.code == 1 || data.code == '1')
				{
					insertToSpecLists(data.spec_id);
					jQuery('.spec-form').find('button[type=submit]').text('保存成功！');

					jQuery('.spec-form').find('button[type=submit]').removeClass('disabled').text('保存规格属性');
					jQuery('#specModal').modal('hide');
					initGoodSpec();

					jQuery('.btn-spec-submit').removeClass('disabled').removeAttr('disabled').text('提交');
				}
				else
				{
					alert('操作失败');
				}
				jQuery('.spec-form').find('button[type=submit]').text('保存成功！');

				jQuery('.spec-form').find('button[type=submit]').removeClass('disabled').text('保存规格属性');
				jQuery('#specModal').modal('hide');
				initGoodSpec();

				jQuery('.btn-spec-submit').removeClass('disabled').removeAttr('disabled').text('提交');
			}
		});
	});

	//删除确认
	jQuery('.goods-list-form .btn-delete').bind('click', function(){
		if(confirm("您确认要删除当前商品吗？删除后将不能恢复……") == true)
		{
			return true;
		}
		else
		{
			return false;
		}
	});

	//操作提醒
	jQuery('.goods-list-form').submit(function(){
		if(jQuery('.goods-list-form input[type=checkbox]:checked').length > 0 &&
			jQuery('.goods-list-form select[name=operate]').val() !== '' &&
			confirm("您确认要进行申请/取消申请上架当前所选商品吗？确认后继续……") == true
		)
		{
			return true;
		}
		else
		{
			return false;
		}
	});
});

//检查基本信息
function checkBase()
{
	var check = true;
	jQuery('.goodsaveform #base .form-group:has(.help-block) input[name]:enabled,.goodsaveform #base .form-group:has(.help-block) select[name]:enabled').each(function(index, dom){
		var a =(parseFloat(document.getElementsByTagName('input')[5].value)+parseFloat(document.getElementsByTagName('input')[4].value))<=parseFloat(document.getElementsByTagName('input')[8].value);

		if($.trim(jQuery(this).val()) == '')
		{
			//为空
			jQuery(this).parents('.form-group').addClass('has-error').find('.help-block').text('不能为空，请您正确输入或选择相应商品信息!').removeClass('hide').show();
			check = false;
		}
		else
		{
			//不为空
			if((jQuery(this).attr('name') =='goods_name' || jQuery(this).attr('name') =='goods_title')&&  !float.test(jQuery(this).val())){
				//控制字数
				jQuery(this).parents('.form-group').addClass('has-error').find('.help-block').text('请您输入正确的商品信息，不能有特殊符号！！！').removeClass('hide').show();
			}else
			if(jQuery(this).attr('name') =='goods_name'&& jQuery(this).val().length > 12 ){
				//控制字数
				jQuery(this).parents('.form-group').addClass('has-error').find('.help-block').text('请您正确输入或选择相应商品信息!字数必须控制在12字以内！！！').removeClass('hide').show();
				check = false;
			}else if((jQuery(this).attr('name') == 'goodsStock' || jQuery(this).attr('name') == 'goodsNowStock')
				&& !numReg.test(jQuery(this).val()))
			{
				//库存必须是正整数
				jQuery(this).parents('.form-group').addClass('has-error').find('.help-block').text('请正确输入库存信息，应该是大于等于0的整数数字。').removeClass('hide').show();
				check = false;
			}
			else if((jQuery(this).attr('name') == 'scPrice' || jQuery(this).attr('name') == 'Price' ||
				jQuery(this).attr('name') == 'wlPrice' || jQuery(this).attr('name') == 'fxPrice')
				&& !numReg.test(jQuery(this).val()) && !floatReg.test(jQuery(this).val()))
			{
				//价格可以是整数和浮点数，精确小数点后两位
				jQuery(this).parents('.form-group').addClass('has-error').find('.help-block').text('请正确输入价格信息，价格应该为大于等于0，可以精确到小数点后面两位。').removeClass('hide').show();
				check = false;
			}
			else if((jQuery(this).attr('name') == 'Price' || jQuery(this).attr('name') == 'wlPrice' || jQuery(this).attr('name') == 'jsPrice')
				&& a)
			{
				jQuery(this).parents('.form-group').addClass('has-error').find('.help-block').text('平台计算金必须小于现价与物流价的和。').removeClass('hide').show();
				check = false;
			}
			else if(jQuery(this).attr('name') == 'intervaltime' && !numReg.test(jQuery(this).val()))
			{
				//购买时间是正整数
				jQuery(this).parents('.form-group').addClass('has-error').find('.help-block').text('请正确输入购买间隔秒数，应该是大于等于0的整数数字。').removeClass('hide').show();
				check = false;
			}
			else
			{
				jQuery(this).parents('.form-group').removeClass('has-error').find('.help-block').text('').addClass('hide').hide();
			}
		}
	});
	if(!check)
	{
		jQuery('.good-tabs li').eq(0).find('a').tab('show')
		return false;
	}
	else
	{
		return true;
	}
}
//检查库存是否规范
function checkStock() {
	return true;
    var goodsStock = jQuery("input[name=goodsStock]").val();
    var goodsNowStock = jQuery("input[name=goodsNowStock]").val();
    var Price = jQuery("input[name=Price]").val();
    var V= jQuery("input[name=real_sale]").val();//商品实际下单数
    var U = null;//总库存 – 当前库存
    var D = null;
    var n = 3;
    if (goodsStock != '' && goodsNowStock != '') {
        U = goodsStock - goodsNowStock;
    }
    if (Price != '') {
        if (Price >= 0 && Price <= 49.9) {
            D = 200;
        } else if (Price >= 50 && Price <= 99.9) {
            D = 130;
        } else if (Price >= 100 && Price <= 199.9) {
            D = 70;
        } else if (Price >= 200 && Price <= 499.9) {
            D = 40;
        } else if (Price >= 500 && Price <= 999.9) {
            D = 20;
        } else if (Price >= 1000) {
            D = 10;
        }
    }

    if(!(U<(D+n*V)&&U>=0)){
        alert("您的库存数量填写不合理，请同步增加总库存及当前库存。");
        jQuery("input[name=goodsStock]").parents('.form-group').addClass('has-error').find('.help-block').text('请您正确输入或选择相应商品信息!').removeClass('hide').show();
        jQuery("input[name=goodsNowStock]").parents('.form-group').addClass('has-error').find('.help-block').text('请您正确输入或选择相应商品信息!').removeClass('hide').show();
        return false;
    }else{
        return true;
    }

}

/**
 * 检查图片
 * @returns {Boolean}
 */
function checkImage()
{
	if(jQuery('.goodsaveform #image .imgfile .thumbnail input[type=hidden]').length == 0)
	{
		jQuery('.good-tabs li').eq(1).find('a').tab('show')

		jQuery('.goodsaveform #image .image-alert').removeClass('hide').text('请您为商品至少上传一张图片！');
		return false;
	}
	else
	{
		jQuery('.goodsaveform #image .image-alert').addClass('hide').text('');
		return true;
	}
}
function checkprice(){
	var a =$('input[name="price1"]').map(function(){return this.value}).get();
	var b =$('input[name="wlprice1"]').map(function(){return this.value}).get();
	var c =parseFloat(document.getElementsByTagName('input')[8].value);
	var errCode = 1;
	if(a.length == 0)
	{
		return true;
	}
	for(var i=0;i<a.length;i++){
		if(parseFloat(a[i])+parseFloat(b[i])<=c){
			var d= i+1;
			alert('您当前商品的第'+d+'个规格属性的现价加物流价的值小于或等于平台结算金，请重新编辑');
			errCode = 0;
		}
	}

	if(errCode == 0)
	{
		return false;
	}else{
		return true;
	}
}
/**
 * 删除图片
 * @param image_id
 * @param obj
 */
function deleteImg(image_id, obj)
{
	jQuery.ajax({
		type: 'POST',
		url: '/goods/ajaxdelgoodimg',
		dataType: 'json',
		async: false,
		data: {'image_id': image_id},
		error: function(){},
		success: function(regData){
			if(regData.action == true)
			{
				jQuery(obj).parents('.imgfile').remove();
			}
			else
			{
				alert('删除失败');
			}
		}
	});
}

/**
 * 删除图片
 * @param image_id
 * @param obj
 */
function deleteImg(image_id, obj)
{
	jQuery.ajax({
		type: 'POST',
		url: '/goods/ajaxdelgoodimg',
		dataType: 'json',
		async: false,
		data: {'image_id': image_id},
		error:function(){},
		success:function(data){
			if(data.code == 1 || data.code == '1')
			{
				jQuery(obj).parents('.imgfile').remove();
			}
			else
			{
				alert('删除失败');
			}
		}
	});
}

/**
 * 删除软件的规格参数
 * @param spec_id
 * @param obj
 */
function delGoodSpec(spec_id, obj)
{
	jQuery.ajax({
		type: 'POST',
		url: '/goods/ajaxdelgoodspec',
		dataType: 'json',
		async: false,
		data: {'spec_id': spec_id},
		error:function(){},
		success:function(data){
			if(data.code == 1 || data.code == '1')
			{
				jQuery(obj).parents('tr').remove();
			}
			else
			{
				alert('删除失败');
			}
		}
	});
}

function goodImageUrl(url)
{
	return url;
}

/**
 * 初始化商品规格参数
 */
function initGoodSpec()
{
	jQuery('.spec-form').find('.imglist').empty();
	jQuery('.spec-form').find('input[type=text]').val('');
	jQuery('.spec-form').find('input[name=spec_id]').val('');
	jQuery('.spec-form').find('input[name=bindGoodsID]').val('');
	jQuery('.spec-form .form-scPrice').find('input.form-control').attr({'name':'scPrice'}).val('').removeAttr('disabled');
	jQuery('.spec-form .form-Price').find('input.form-control').attr({'name':'Price'}).val('').removeAttr('disabled');
	jQuery('.spec-form .form-wlPrice').find('input.form-control').attr({'name':'wlPrice'}).val('').removeAttr('disabled');

	jQuery('.spec-form .form-scPrice').find('input[type=hidden]').val('').removeAttr('name').attr({'disabled':'disabled'});
	jQuery('.spec-form .form-Price').find('input[type=hidden]').val('').removeAttr('name').attr({'disabled':'disabled'});
	jQuery('.spec-form .form-wlPrice').find('input[type=hidden]').val('').removeAttr('name').attr({'disabled':'disabled'});
	jQuery('.btn-spec-submit').removeClass('disabled').removeAttr('disabled').text('提交');
}

/**
 * 关闭商品规格参数
 */
function closeSpecModal()
{
	initGoodSpec();
	jQuery('#specModal').modal('hide');
}

/**
 * 编辑商品的规格参数
 * @param spec_id
 * @param obj
 */
function editGoodSpec(spec_id, obj)
{
	initGoodSpec();
	var is_onsale = jQuery('.good-form').attr('data-isonsale');
	jQuery.ajax({
		type: 'POST',
		url: '/goods/Ajaxgetgoodspec',
		dataType: 'json',
		async: false,
		data: {'spec_id': spec_id},
		error:function(){},
		success:function(data){
			for(i=0; i<(data.images).length;i++)
			{
				var imgdata = data.images[i];

				$imgDom = jQuery('<div class="imgfile">'+
					'<div class="thumbnail">'+
					'<img src="'+imgdata.thumbnail_s+'" style="margin:5px auto;">'+
					'<div class="text-center">'+
					'<input type="hidden" name="image_id[]" value="'+imgdata.image_id+'">'+
					'<a href="javascript:void(0)" class="btn btn-default btn-xs btn-setdefault" onClick="setDefault('+imgdata.image_id+', this);">封面</a>'+
					'<a href="javascript:void(0)" class="btn btn-default btn-xs" onClick="deleteImg('+imgdata.image_id+',this);">移除</a>'+
					'</div>'+
					'</div>'+
					'</div>');
				if(is_onsale == 1 || is_onsale == '1')
				{
					$imgDom.find('.btn-default').attr({'disabled':'disabled'});
				}
				jQuery('.spec-form').find('.imglist').append($imgDom);
			}

			jQuery('.spec-form').find('input[name=spec_1Attr]').val(data.spec_1Attr);
			jQuery('.spec-form').find('input[name=spec_2Attr]').val(data.spec_2Attr);
			if(is_onsale == 1 || is_onsale == '1')
			{
				jQuery('.spec-form').find('input[name=spec_1Attr]').attr({'disabled': 'disabled'});
				jQuery('.spec-form').find('input[name=spec_2Attr]').attr({'disabled': 'disabled'});
				jQuery('.spec-form .fileuploadform').find('.btn-upload').attr({'disabled': 'disabled'}).empty().html('<i class="fa fa-file-image-o"></i> 已上架，不能添加图片');
			}
			else
			{
				jQuery('.spec-form').find('input[name=spec_1Attr]').removeAttr('disabled');
				jQuery('.spec-form').find('input[name=spec_2Attr]').removeAttr('disabled');
				jQuery('.spec-form .fileuploadform').find('.btn-upload').removeAttr('disabled').empty().html('<i class="fa fa-file-image-o"></i> 添加图片');
			}

			if(data.scPrice !== '' && (is_onsale == 1 || is_onsale == '1'))
			{
				jQuery('.spec-form .form-scPrice').find('input.form-control').removeAttr('name').val(data.scPrice).attr({'disabled': 'disabled'});
				jQuery('.spec-form .form-scPrice').find('input[type=hidden]').val(data.scPrice).attr({'name': 'scPrice'});
			}
			else
			{
				jQuery('.spec-form .form-scPrice').find('input.form-control').attr({'name':'scPrice'}).val(data.scPrice).removeAttr('disabled');
				jQuery('.spec-form .form-scPrice').find('input[type=hidden]').val('').removeAttr('name').attr({'disabled':'disabled'});
			}

			if(data.Price !== '' && (is_onsale == 1 || is_onsale == '1'))
			{
				jQuery('.spec-form .form-Price').find('input.form-control').removeAttr('name').val(data.Price).attr({'disabled': 'disabled'});
				jQuery('.spec-form .form-Price').find('input[type=hidden]').val(data.Price).attr({'name': 'Price'});
			}
			else
			{
				jQuery('.spec-form .form-Price').find('input.form-control').attr({'name':'Price'}).val(data.Price).removeAttr('disabled');
				jQuery('.spec-form .form-Price').find('input[type=hidden]').val('').removeAttr('name').attr({'disabled':'disabled'});
			}
			if(data.wlPrice !== '' && (is_onsale == 1 || is_onsale == '1'))
			{
				jQuery('.spec-form .form-wlPrice').find('input.form-control').removeAttr('name').val(data.wlPrice).attr({'disabled': 'disabled'});
				jQuery('.spec-form .form-wlPrice').find('input[type=hidden]').val(data.wlPrice).attr({'name': 'wlPrice'});
			}
			else
			{
				jQuery('.spec-form .form-wlPrice').find('input.form-control').attr({'name':'wlPrice'}).val(data.wlPrice).removeAttr('disabled');
				jQuery('.spec-form .form-wlPrice').find('input[type=hidden]').val('').removeAttr('name').attr({'disabled':'disabled'});
			}

			if(is_onsale == 1 || is_onsale == '1')
			{
				jQuery('.spec-form .spec-alert').text('商品已经上架，您只能补货，如需要修改请先下架！').removeClass('hide').show();
			}
			else
			{
				jQuery('.spec-form .spec-alert').text('').addClass('hide').hide();
			}

			jQuery('.spec-form').find('input[name=goodsStock]').val(data.goodsStock);
			jQuery('.spec-form').find('input[name=goodsNowStock]').val(data.goodsNowStock);
			jQuery('.spec-form').find('input[name=spec_id]').val(data.spec_id);
			jQuery('.spec-form').find('input[name=bindGoodsID]').val(data.bindGoodsID);
			jQuery('#specModal').modal('show');
		}
	});
}

/**
 * 将规格参数插入到列表
 * @param $spec_id
 */
function insertToSpecLists(spec_id)
{
	var is_onsale = jQuery('.good-form').attr('data-isonsale');
	jQuery.ajax({
		type: 'POST',
		url: '/goods/Ajaxgetgoodspec',
		dataType: 'json',
		async: false,
		data: {'spec_id': spec_id},
		error:function(){},
		success:function(data){
			var spec_2Attr='';
			if(data.spec_2Attr) {
				spec_2Attr = '规格属性二：<strong class="color-333">'+data.spec_2Attr+'</strong>';
			}

			var specTr = '<tr id="specId_'+data.spec_id+'">'+
				'<td width="100">'+
				'<input type="hidden" name="spec_id[]" value="'+data.spec_id+'">'+
				'<a href="javascript:void(0);" class="good-cover">'+
				'<img src="'+goodImageUrl(data.thumbnail_s)+'" />'+
				'</a>'+
				'</td>'+
				'<td>'+
				'<p class="color-999">规格属性一：<strong class="color-333">'+data.spec_1Attr+'</strong><br />'+spec_2Attr+
				'</p>'+
				'</td>'+
				'<td><p class="color-999">'+data.scPrice+'</p></td>'+
				'<td><p class="color-999">'+data.Price+'</p></td>'+
				'<td><p class="color-999">'+data.wlPrice+'</p></td>'+
				'<td><p class="color-999">'+data.goodsStock+'</p></td>'+
				'<td><p class="color-999">'+data.goodsNowStock+'</p></td>'+
				'<td>'+
				'<div class="btn-group btn-group-sm">'+
				'<button type="button" class="btn btn-default" onClick="editGoodSpec('+data.spec_id+', this);">编辑</button>'+
				'<button type="button" class="btn btn-default" '+((is_onsale == 1 || is_onsale == '1')?' disabled="disabled"':'')+' onClick="delGoodSpec('+data.spec_id+', this);">删除</button>'+
				'</div>'+
				'</td>'+
				'</tr>'
			if(jQuery('.speclist-table tbody tr#specId_'+data.spec_id).length == 1)
			{
				jQuery('.speclist-table tbody tr#specId_'+data.spec_id).replaceWith(specTr);
			}
			else
			{
				jQuery('.speclist-table tbody').append(specTr);
			}
		}
	});

}

/**
 * 设为默认图片
 * @param image_id
 * @param obj
 */
function setDefault(image_id, obj)
{
	jQuery(obj).parents('.fileuploadform').find('input[name=defalut_image_id]').val(image_id);

	jQuery(obj).parents('.imglist').find('.imgfile').not(
		jQuery(obj).parents('.imgfile')
	).find('.btn-setdefault').removeClass('btn-primary disabled').addClass('btn-default');
	jQuery(obj).removeClass('btn-default').addClass('btn-primary disabled');
}