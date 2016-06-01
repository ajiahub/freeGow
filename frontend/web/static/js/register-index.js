var nameReg = /^([a-zA-Z0-9]){6,20}$/;
var numReg = /^[0-9]*$/;
var passwordReg = /^[\w]{6,}$/;
var yingye= /\d{15}/;
var usernameReg = /^[a-zA-Z]/i;
var usernameReg1 = /[0-9]$/i;
var usernameReg2 = /^[0-9a-zA-Z]+$/;

var mobileReg = /^1\d{10}$/;
var idcardReg = /^(\d{15}$|^\d{18}$|^\d{17}(\d|X|x))$/;
var emailCheck = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/;
var qqCheck = /^[0-9]{5,10}$/;
var wxCheck = /^wx\d{1,10}$/;
var xingming = /^[\u4E00-\u9FA5]{2,15}$/;
var yinhang = /^[\u4E00-\u9FA5]+$/;


jQuery(document).ready(function(){	
	// show/hide help-block
	jQuery('.register-form .form-group .form-control').bind('focusin', function() {
		jQuery('.register-form .form-group').not(jQuery(this).parents('.form-group')).each(function(i){
			if(!jQuery(this).hasClass("has-error"))
			{
				jQuery(this).find('.help-block').addClass('hide').hide();
			}
		});
		
		jQuery(this).parents('.form-group').find('.help-block').removeClass('hide').show();
	});
	
	//input file
    jQuery('.register-form .form-group:has(input[type=file]) .input-group .input-group-btn .btn,' +
        '.register-form .form-group:has(input[type=file]) .input-group .form-control').bind('click', function () {
        jQuery(this).parents('.form-group').find('input[type=file]').click();
    });

    jQuery('.register-form .form-group input[type=file]').bind('change blur', function () {
        jQuery(this).parents('.form-group').find('.input-group').find('.form-control').val(jQuery(this).val());
    });
	
	
	jQuery('.register-form .form-group:has(.help-block) .form-control[name]:enabled').bind('blur', function() {
		if(jQuery(this).val() == '')
		{
			jQuery(this).parents('.form-group').addClass('has-error').find('.help-block').text("请正确输入，选择或上传相关内容！").removeClass('hide').show();
		}
		else if(jQuery(this).attr('name') == 'username' && (!usernameReg.test(jQuery(this).val())||!usernameReg1.test(jQuery(this).val())||!usernameReg2.test(jQuery(this).val())||jQuery(this).val().length<6||jQuery(this).val().length>20))
		{
			jQuery(this).parents('.form-group').addClass('has-error').find('.help-block').text("用户名必须是开头为字母结尾为数字的6-20位字母,数字组合").removeClass('hide').show();
		}
		else if((jQuery(this).attr('name') == 'name'||jQuery(this).attr('name') == 'emergency_name') && (!xingming.test(jQuery(this).val())||jQuery(this).val().length>15))
		{
			jQuery(this).parents('.form-group').addClass('has-error').find('.help-block').text("请输入2位或以上的纯汉字！").removeClass('hide').show();
		}
		else if(jQuery(this).attr('name') == 'bank_name' && !yinhang.test(jQuery(this).val()))
		{
			jQuery(this).parents('.form-group').addClass('has-error').find('.help-block').text("格式不正确！请正确输入开户行名称").removeClass('hide').show();
		}
		else if(jQuery(this).attr('name') == 'password' && !passwordReg.test(jQuery(this).val()))
		{
			jQuery(this).parents('.form-group').addClass('has-error').find('.help-block').text("密码不能少于6位且不能包含特殊字符！").removeClass('hide').show();
		}
		else if(jQuery(this).attr('name') == 'repassword' && !passwordReg.test(jQuery(this).val()))
		{
			jQuery(this).parents('.form-group').addClass('has-error').find('.help-block').text("重复密码不能少于6位且不能包含特殊字符！").removeClass('hide').show();
		}
		else if(jQuery(this).attr('name') == 'repassword' && jQuery(this).val() !== jQuery('.register-form .form-group .form-control[name=password]:enabled').val())
		{
			jQuery(this).parents('.form-group').addClass('has-error').find('.help-block').text("两次密码不一致，请重新输入").removeClass('hide').show();
		}
		else if(jQuery(this).attr('name') == 'uname' && !checkUname(jQuery(this).val()))
		{
			jQuery(this).parents('.form-group').addClass('has-error').find('.help-block').text("该零购账号不存在，请重新输入").removeClass('hide').show();
		}
		else if((jQuery(this).attr('name') == 'mobile' || jQuery(this).attr('name') == 'emergency_mobile' ) && !mobileReg.test(jQuery(this).val()))
		{
			jQuery(this).parents('.form-group').addClass('has-error').find('.help-block').text("手机号格式不正确，请重新输入").removeClass('hide').show();
		}
		else if((jQuery(this).attr('name') == 'qq' || jQuery(this).attr('name') == 'presale_qq' || jQuery(this).attr('name') == 'aftersale_qq') && !qqCheck.test(jQuery(this).val()))
		{
			jQuery(this).parents('.form-group').addClass('has-error').find('.help-block').text("qq号码格式不正确，请重新输入").removeClass('hide').show();
		}
		else if(jQuery(this).attr('name') == 'idcard_number' && !idcardReg.test(jQuery(this).val()))
		{
			jQuery(this).parents('.form-group').addClass('has-error').find('.help-block').text("身份证号码格式不正确，请重新输入").removeClass('hide').show();
		}
		else if(jQuery(this).attr('name') == 'email' && !emailCheck.test(jQuery(this).val()))
		{
			jQuery(this).parents('.form-group').addClass('has-error').find('.help-block').text("邮箱格式不正确，请重新输入").removeClass('hide').show();
		}
		else if(jQuery(this).attr('data-check') == 1 && !checkSellerExist(jQuery(this).attr('name'), jQuery(this).val()))
		{
			jQuery(this).parents('.form-group').addClass('has-error').find('.help-block').text("对不起，你输入的信息已经存在了，请重新输入").removeClass('hide').show();
		}
		else 
		{
			jQuery(this).parents('.form-group').removeClass('has-error').find('.help-block').text('').addClass('hide').hide();
		}
	});
	if(jQuery('.register-form input[name=service-agreement]').is(":checked"))
	{
		jQuery('.register-form button[type=submit]').removeClass('disabled');
	}else{
		jQuery('.register-form button[type=submit]').addClass('disabled');
	}
	//入住协议
	jQuery('.register-form input[name=service-agreement]').bind('blur', function() {
		if(jQuery('.register-form input[name=service-agreement]:checked').length == 0)
		{
			jQuery('.register-form button[type=submit]').addClass('disabled');
		}
		else
		{
			jQuery('.register-form button[type=submit]').removeClass('disabled');
		}
	});
	
	//商户类型
	jQuery('.register-form select[name=role]').bind('blur', function() {
		if(jQuery(this).val() == '')
		{
			jQuery('.register-form button[type=submit]').addClass('disabled');
			jQuery(this).parents('.form-group').addClass('has-error').find('.help-block').text("请选择商户类型！").removeClass('hide').show();
		}
		else
		{
			jQuery('.register-form button[type=submit]').removeClass('disabled');
			if(jQuery(this).val() == 1 || jQuery(this).val() == '1')
			{
				//个人商户
				jQuery('.register-form .form-group').find('.label-company').addClass('hide').hide();
				jQuery('.register-form').find('.data-company').addClass('hide').hide();
				jQuery('.register-form .data-company').find('.form-group:has(.help-block) .form-control[name]').attr({'disabled': 'disabled'});
			}
			else
			{
				//企业商户
				jQuery('.register-form .form-group').find('.label-company').removeClass('hide').show();
				jQuery('.register-form').find('.data-company').removeClass('hide').show();
				jQuery('.register-form .data-company').find('.form-group:has(.help-block) .form-control[name]').removeAttr('disabled');
			}
			jQuery(this).parents('.form-group').removeClass('has-error').find('.help-block').text('').addClass('hide').hide();
		}
	});
	
	//提交
	jQuery('.register-form').bind('submit', function() {
		var check = true;
		
		jQuery('.register-form .form-group:has(.help-block) .form-control[name]:enabled').each(function() {
			if(jQuery(this).val() == '')
			{
				jQuery(this).parents('.form-group').addClass('has-error').find('.help-block').text("请正确输入，选择或上传相关内容！").removeClass('hide').show();
				check = false;
			}
			else if(jQuery(this).attr('name') == 'username' && (!usernameReg.test(jQuery(this).val())||!usernameReg1.test(jQuery(this).val())||jQuery(this).val().length<6||jQuery(this).val().length>20))
			{
				jQuery(this).parents('.form-group').addClass('has-error').find('.help-block').text("用户名必须是开头为字母结尾为数字的6-20位字母,数字组合").removeClass('hide').show();
				check = false;
			}
			else if(jQuery(this).attr('name') == 'password' && !passwordReg.test(jQuery(this).val()))
			{
				jQuery(this).parents('.form-group').addClass('has-error').find('.help-block').text("密码不能少于6位且不能包含特殊字符！").removeClass('hide').show();
				check = false;
			}
			else if(jQuery(this).attr('name') == 'repassword' && !passwordReg.test(jQuery(this).val()))
			{
				jQuery(this).parents('.form-group').addClass('has-error').find('.help-block').text("重复密码不能少于6位且不能包含特殊字符！").removeClass('hide').show();
				check = false;
			}
			else if(jQuery(this).attr('name') == 'bank_name' && !yinhang.test(jQuery(this).val()))
			{
				jQuery(this).parents('.form-group').addClass('has-error').find('.help-block').text("格式不正确！请正确输入开户行名称").removeClass('hide').show();
				check = false;
			}
			else if((jQuery(this).attr('name') == 'name'||jQuery(this).attr('name') == 'emergency_name') && (!xingming.test(jQuery(this).val())||jQuery(this).val().length>15))
			{
				jQuery(this).parents('.form-group').addClass('has-error').find('.help-block').text("请输入2位或以上的纯汉字！" +
					"").removeClass('hide').show();
				check = false;
			}
			else if(jQuery(this).attr('name') == 'repassword' && jQuery(this).val() !== jQuery('.register-form .form-group .form-control[name=password]:enabled').val())
			{
				jQuery(this).parents('.form-group').addClass('has-error').find('.help-block').text("两次密码不一致，请重新输入").removeClass('hide').show();
				check = false;
			}
			else if(jQuery(this).attr('name') == 'uname' && !checkUname(jQuery(this).val()))
			{
				jQuery(this).parents('.form-group').addClass('has-error').find('.help-block').text("该零购账号不存在，请重新输入").removeClass('hide').show();
				check = false;
			}
			else if((jQuery(this).attr('name') == 'mobile' || jQuery(this).attr('name') == 'emergency_mobile' ) && !mobileReg.test(jQuery(this).val()))
			{
				jQuery(this).parents('.form-group').addClass('has-error').find('.help-block').text("手机号格式不正确，请重新输入").removeClass('hide').show();
				check = false;
			}
			else if((jQuery(this).attr('name') == 'qq' || jQuery(this).attr('name') == 'presale_qq' || jQuery(this).attr('name') == 'aftersale_qq') && !qqCheck.test(jQuery(this).val()))
			{
				jQuery(this).parents('.form-group').addClass('has-error').find('.help-block').text("qq号码格式不正确，请重新输入").removeClass('hide').show();
				check = false;
			}
			else if(jQuery(this).attr('name') == 'idcard_number' && !idcardReg.test(jQuery(this).val()))
			{
				jQuery(this).parents('.form-group').addClass('has-error').find('.help-block').text("身份证号码格式不正确，请重新输入").removeClass('hide').show();
				check = false;
			}
			else if(jQuery(this).attr('name') == 'email' && !emailCheck.test(jQuery(this).val()))
			{
				jQuery(this).parents('.form-group').addClass('has-error').find('.help-block').text("邮箱格式不正确，请重新输入").removeClass('hide').show();
				check = false;
			}
			else if(jQuery(this).attr('data-check') == 1 && !checkSellerExist(jQuery(this).attr('name'), jQuery(this).val()))
			{
				jQuery(this).parents('.form-group').addClass('has-error').find('.help-block').text("对不起，你输入的信息已经存在了，请重新输入").removeClass('hide').show();
				check = false;
			}
			else 
			{
				jQuery(this).parents('.form-group').removeClass('has-error').find('.help-block').text('').addClass('hide').hide();
			}
		});
		if(!check)
		{
			return false;
		}
		if(confirm("您确认商户注册信息都正确填写了，成为零购的商户了吗？确认请继续……") == true)
		{
			return true;
		}else{
			return false;
		}
	});
	
	/**
	 * 检查零购会员
	 * @param uname
	 * @returns
	 */
	function checkUname(uname)
	{
		var check = false;
		jQuery.ajax({
	        type: 'POST',
	        cache: false,
	        async: false,
	        url: '/register/CheckUname',
	        dataType: 'json',
	        data: {'uname': uname},
	        timeout: 10000,
	        success:function(retdata){
	        	if(retdata == true)
	        	{
	        		check = true;
	        	}
	        	else
	        	{
	        		check = false;
	        	}
	        }
	    });
		if(!check)
		{
			return false;
		}
		else
		{
			return true;
		}
	}
	/**
	 * 检查存在
	 * @param key
	 * @param value
	 * @returns
	 */
	function checkSellerExist(key, value)
	{
		var check = false;
		jQuery.ajax({
	        type: 'POST',
	        cache: false,
	        async: false,
	        url: '/register/CheckSellerExist',
	        dataType: 'json',
	        data: {'key': key, 'value': value},
	        timeout: 10000,
	        success:function(retdata){
	        	if(retdata == true)
	        	{
	        		check = true;
	        	}
	        	else
	        	{
	        		check = false;
	        	}
	        }
	    });
		if(!check)
		{
			return false;
		}
		else
		{
			return true;
		}
	}
});