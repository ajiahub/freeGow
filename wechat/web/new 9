//支付方式切换
function initPayment(index)
{
	if(typeof(index)=='undefined') index = 0;
	
	jQuery('.purchase-payment input[type=radio]').not( jQuery('.purchase-payment input[type=radio]').eq(index) ).prop('checked', false);
	jQuery('.purchase-payment input[type=radio]').eq(index).prop('checked', true);
	jQuery('.purchase-payment label').not( jQuery('.purchase-payment label').eq(index) ).removeClass('active');
	jQuery('.purchase-payment label').eq(index).addClass('active');
}

//选择收货地址
function selectAddress(obj)
{
	var name = jQuery(obj).parents('.list-group-item').find('strong').text();
	var shipping_id = jQuery(obj).parents('.list-group-item').find('input[name=shipping_id]').val();
	var uid = jQuery(obj).parents('.list-group-item').find('input[name=uid]').val();
	var tel = jQuery(obj).parents('.list-group-item').find('abbr').find('span').text();
	var address = jQuery(obj).parents('.list-group-item').find('address').html();
	
	jQuery('.purchase-address strong').text(name);
	jQuery('.purchase-address input[type=hidden]').val(shipping_id);
	jQuery('.purchase-address abbr span').text(tel);
	jQuery('.purchase-address address').html(address);
	
	jQuery('.purchase-address .btn-edit').attr({'href': '/shipping/edit/id/'+shipping_id+'?url='+encodeURI('/Purchase?data='+jQuery('#theForm').find('input[name=data]').val())});
	
	jQuery.ajax({
        type: 'POST',
        url: '/shipping/ajaxdefaultshipping',
        dataType: 'json',
        data: {'shipping_id': shipping_id, 'uid': uid},
        cache: false,
        async: false,
        error:function(){},
        success:function(data){
			window.location.href = "/Purchase?data=" + jQuery('#theForm').find('input[name=data]').val();
            console.log(data);
        }
    });
	jQuery('#addressModal').modal('hide');
}

jQuery(document).ready(function(){
	//初始化支付方式
	initPayment();

	//切换支付方式
	jQuery('.purchase-payment label').bind('click', function() { 
		  var index = jQuery('.purchase-payment label').index(jQuery(this));
		  initPayment(index);
	});
});