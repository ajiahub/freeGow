var nameReg = /^([\u4E00-\uFA29]|[\uE7C7-\uE7F3]|[a-zA-Z0-9]){6,20}$/;
var numReg = /^[0-9]*$/;
var mobileReg = /^1\d{10}$/;

jQuery(function(){	
	jQuery('.consignee-form .form-group:has(.help-block) input[type=text],'+
			'.consignee-form .form-group:has(.help-block) input[type=number],'+
			'.consignee-form .form-group:has(.help-block) select[name],'+
			'.consignee-form .form-group:has(.help-block) textarea').bind('blur', function(){
		var domVal = jQuery(this).val().replace(/(^\s+)|(\s+$)/g, '');
		if(domVal == '')	// 为空
		{
			jQuery(this).parents('.form-group').addClass('has-error').find('.help-block').text('不能为空，请您输入信息!').removeClass('hide').show();
		}
		else if(
			((domVal == '请选择' || domVal == '省份') && jQuery(this).attr('name') == 'province') ||
			((domVal == '请选择' || domVal == '城市') && jQuery(this).attr('name') == 'city') ||
			((domVal == '请选择' || domVal == '区/县') && jQuery(this).attr('name') == 'area')
		)
		{
			jQuery(this).parents('.form-group').addClass('has-error').find('.help-block').text('请选择配送区域!').removeClass('hide').show();
		}
		else
		{
			// 不为空，合法
			if(jQuery(this).attr('name') == 'tel' && !mobileReg.test(domVal))
			{
				jQuery(this).parents('.form-group').addClass('has-error').find('.help-block').text('格式不正确，请您正确输入!').removeClass('hide').show();
			}
			else
			{
				jQuery(this).parents('.form-group').removeClass('has-error').find('.help-block').text('').addClass('hide').hide();
			}
		}
	});
	
	// 表单提交
	jQuery('.consignee-form').submit(function(){
		var check = true;
		jQuery('.consignee-form button[type=submit]').attr({'disabled': 'disabled'});
		jQuery('.consignee-form .form-group:has(.help-block) input[type=text],'+
				'.consignee-form .form-group:has(.help-block) input[type=number],'+
				'.consignee-form .form-group:has(.help-block) select[name],'+
				'.consignee-form .form-group:has(.help-block) textarea').each(function(index, dom){
			var domVal = jQuery(dom).val().replace(/(^\s+)|(\s+$)/g, '');
			if(domVal == '') // 为空
			{
				jQuery(dom).parents('.form-group').addClass('has-error').find('.help-block').text('不能为空，请您输入信息!').removeClass('hide').show();
				check = false;
			}
			else if(
					((domVal == '请选择' || domVal == '省份') && jQuery(dom).attr('name') == 'province') ||
					((domVal == '请选择' || domVal == '城市') && jQuery(dom).attr('name') == 'city') ||
					((domVal == '请选择' || domVal == '区/县') && jQuery(dom).attr('name') == 'area')
				)
			{
				jQuery(dom).parents('.form-group').addClass('has-error').find('.help-block').text('请选择配送区域!').removeClass('hide').show();
				check = false;
			}
			else
			{
				if(jQuery(dom).attr('name') == 'tel' && !mobileReg.test(domVal))
				{
					jQuery(dom).parents('.form-group').addClass('has-error').find('.help-block').text('格式不正确，请您正确输入!').removeClass('hide').show();
					check = false;
				}
				else
				{
					// 不为空，合法
					jQuery(dom).parents('.form-group').removeClass('has-error').find('.help-block').text('').addClass('hide').hide();
				}
			}
		});
		if(!check) {
			jQuery('.consignee-form button[type=submit]').removeAttr('disabled');
			return false;
		}
	});
});