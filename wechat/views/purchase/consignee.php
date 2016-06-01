<?php
use yii\widgets\ActiveForm;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<title>收货人信息</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta content="yes" name="apple-mobile-web-app-capable">
	<meta content="black" name="apple-mobile-web-app-status-bar-style">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-touch-fullscreen" content="YES">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="format-detection" content="telephone=no">
	<script type="text/javascript" src="http://7xt1hu.com1.z0.glb.clouddn.com/1461160588jquery-1.11.3.min.js"></script>
	<link rel="stylesheet" href="http://7xt1hu.com1.z0.glb.clouddn.com/1461123449bootstrap.min.css" type="text/css" media="screen">
	<script type="text/javascript" src="http://7xt1hu.com1.z0.glb.clouddn.com/1461123616bootstrap.min.js"></script>
	<link rel="stylesheet" href="/static/css/layout.css?time=1461739466" type="text/css" media="screen">
	<link rel="stylesheet" href="http://7xt1hu.com1.z0.glb.clouddn.com/1461128081font-awesome.min.css" type="text/css" media="screen">
	<script type="text/javascript" src="http://7xt1hu.com1.z0.glb.clouddn.com/TouchSlide.js"></script>
	<script src="http://7xt1hu.com1.z0.glb.clouddn.com/1461128850jquery.lazyload.min.js"></script>
		<script src="/static/js/layout.js?time=1461741850"></script>
				<link rel="stylesheet" href="/static/css/purchase-consignee.css?time=1458870790" type="text/css">
			<script src="/static/js/purchase-consignee.js?time=1458870790"></script>
					    <!--[if lt IE 9]>
        <script src="http://7xt1hu.com1.z0.glb.clouddn.com/1461217678html5shiv.min.js"></script>
        <script src="http://7xt1hu.com1.z0.glb.clouddn.com/1461217703respond.min.js"></script>
    <![endif]-->
</head>
<body class="body-purchase-consignee">
<a id="top" name="top"></a>
<header class="container globalheader fixedheader">
	<div class="text-center globalheader-wrapper clearfix">
		<a href="javascript:history.back(-1);" class="pull-left"><span class="glyphicon glyphicon-chevron-left"></span></a>
		<a href="/" class="pull-right"><span class="glyphicon glyphicon-home"></span></a>
	</div>
</header><script type="text/javascript" src="/static/js/jsAddress.js"></script>
<div class="container">
    <form action="/shipping/save" class="consignee-form" method="post">    
      <div class="form-group">
	    <label>收货人 <span class="color-red">*</span></label>
	    <input class="form-control inputBg" name="name" type="text" id="name" placeholder="收货人姓名(必填)">
	    <p class="help-block hide"></p>
	  </div>
	  <div class="form-group">
	    <label>手机号码 <span class="color-red">*</span></label>
	    <input class="form-control inputBg" name="tel" type="number" id="tel_0" placeholder="收货人手机号(必填)">
	    <p class="help-block hide"></p>
	  </div>
	  <div class="form-group">
	    <label>配送地址 <span class="color-red">*</span></label>
	    <div class="row condensed-row">
  			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 condensed-col">
  				<select name="province" id="cmbProvince" class="form-control"><option value="省份">省份</option></select>
  			</div>
  			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 condensed-col">
  				<select name="city" id="cmbCity" class="form-control"><option value="城市">城市</option></select>
  			</div>
  			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 condensed-col">
  				<select name="area" id="cmbArea" class="form-control"><option value="区/县">区/县</option></select>
  			</div>
  		</div>
  		<p class="help-block hide"></p>
	  </div>
	  	  <div class="form-group">
	    <textarea class="form-control inputBg" rows="3" name="address" id="address_0" placeholder="建议填写详细收货地址：如街道/乡镇，小区/村庄的名称，门牌号(必填)"></textarea>
	    <p class="help-block hide"></p>
	  </div>
	   <div class="form-group">
        <label>邮政编码</label>
        <input name="zip" type="number" class="form-control" placeholder="邮政编码(选填)">
      </div>
	  <button type="submit" class="btn btn-danger btn-block" name="Submit">配送至这个地址</button>
	  <input type="hidden" name="url" value="/Purchase?data=eyJnb29kc19pZCI6NjkzNywiZ19pZCI6Njk0MiwicXVhbnRpdHkiOjEsImJpZCI6MCwic3BlY19pZCI6NTUwMH0="> 
	</form>
</div>
<script type="text/javascript">
         $(document).ready(function () {
			addressInit('cmbProvince', 'cmbCity', 'cmbArea');
        });
</script><!--
<div class="to-top">
	返回顶部
</div>
-->
<footer class="container">
	<div class="footer-search">
		<a href="/" class="home color-fff"><span class="glyphicon glyphicon-home"></span></a>
		<form action="/search/index">
			<div class="input-group input-group-sm">
		      <input type="text" class="form-control" name="key" placeholder="搜索...">
		      <span class="input-group-btn">
		        <button class="btn btn-default color-999" type="submit"><span class="glyphicon glyphicon-search"></span></button>
		      </span>
		    </div>
	    </form>
	    <a href="/" class="totop color-fff"><span class="glyphicon glyphicon-arrow-up"></span></a>
	</div>
	<div class="clearfix">

		<p class="text-center color-999"><small>© 2006 - 2016 零购官网 版权所有，并保留所有权利。 </small></p>
	</div>
</footer>
</body><iframe id="__WeixinJSBridgeIframe_SetResult" style="display: none; " src="weixin://private/setresult/SCENE_FETCHQUEUE&amp;eyJfX2pzb25fbWVzc2FnZSI6WyJ7XCJmdW5jXCI6XCJsb2dcIixcInBhcmFtc1wiOntcIm1zZ1wiOlwiX3J1bk9uM3JkQXBpTGlzdCA6IG9uVm9pY2VSZWNvcmRFbmQsb25Wb2ljZVBsYXlCZWdpbixvblZvaWNlUGxheUVuZCxvbkxvY2FsSW1hZ2VVcGxvYWRQcm9ncmVzcyxvbkltYWdlRG93bmxvYWRQcm9ncmVzcyxvblZvaWNlVXBsb2FkUHJvZ3Jlc3Msb25Wb2ljZURvd25sb2FkUHJvZ3Jlc3Msb25WaWRlb1VwbG9hZFByb2dyZXNzLG1lbnU6c2V0Zm9udCxtZW51OnNoYXJlOndlaWJvLG1lbnU6c2hhcmU6ZW1haWwsd3hkb3dubG9hZDpzdGF0ZV9jaGFuZ2Usd3hkb3dubG9hZDpwcm9ncmVzc19jaGFuZ2UsaGRPbkRldmljZVN0YXRlQ2hhbmdlZCxhY3Rpdml0eTpzdGF0ZV9jaGFuZ2Usb25XWERldmljZUJsdWV0b290aFN0YXRlQ2hhbmdlLG9uV1hEZXZpY2VMYW5TdGF0ZUNoYW5nZSxvbldYRGV2aWNlQmluZFN0YXRlQ2hhbmdlLG9uUmVjZWl2ZURhdGFGcm9tV1hEZXZpY2Usb25TY2FuV1hEZXZpY2VSZXN1bHQsb25XWERldmljZVN0YXRlQ2hhbmdlLG9uTmZjVG91Y2gsb25CZWFjb25Nb25pdG9yaW5nLG9uQmVhY29uc0luUmFuZ2UsbWVudTpjdXN0b20sb25TZWFyY2hEYXRhUmVhZHksb25TZWFyY2hJbWFnZUxpc3RSZWFkeSxvblRlYWNoU2VhcmNoRGF0YVJlYWR5LG9uU2VhcmNoSW5wdXRDaGFuZ2Usb25TZWFyY2hJbnB1dENvbmZpcm0sb25TZWFyY2hTdWdnZXN0aW9uRGF0YVJlYWR5LG9uTXVzaWNTdGF0dXNDaGFuZ2VkLG9uUHVsbERvd25SZWZyZXNoLG9uUGFnZVN0YXRlQ2hhbmdlLG9uR2V0QThLZXlVcmwsZGVsZXRlQWNjb3VudFN1Y2Nlc3MsV05KU0hhbmRsZXJJbnNlcnQsV05KU0hhbmRsZXJNdWx0aUluc2VydCxXTkpTSGFuZGxlckV4cG9ydERhdGEsV05KU0hhbmRsZXJIZWFkZXJBbmRGb290ZXJDaGFuZ2UsV05KU0hhbmRsZXJFZGl0YWJsZUNoYW5nZSxXTkpTSGFuZGxlckVkaXRpbmdDaGFuZ2UsV05KU0hhbmRsZXJTYXZlU2VsZWN0aW9uUmFuZ2UsV05KU0hhbmRsZXJMb2FkU2VsZWN0aW9uUmFuZ2Usc2hvd0xvYWRpbmcsZ2V0U2VhcmNoRW1vdGlvbkRhdGFDYWxsQmFja1wifSxcIl9fbXNnX3R5cGVcIjpcImNhbGxcIixcIl9fY2FsbGJhY2tfaWRcIjpcIjEwMDBcIn0iLCJ7XCJmdW5jXCI6XCJsb2dcIixcInBhcmFtc1wiOntcIm1zZ1wiOlwic2V0IGZvbnQgc2l6ZSB3aXRoIHdlYmtpdFRleHRTaXplQWRqdXN0OiAyXCJ9LFwiX19tc2dfdHlwZVwiOlwiY2FsbFwiLFwiX19jYWxsYmFja19pZFwiOlwiMTAwMVwifSIsIntcImZ1bmNcIjpcInNldEZvbnRTaXplQ2FsbGJhY2tcIixcInBhcmFtc1wiOntcImZvbnRTaXplXCI6XCIyXCJ9LFwiX19tc2dfdHlwZVwiOlwiY2FsbFwiLFwiX19jYWxsYmFja19pZFwiOlwiMTAwMlwifSJdLCJfX3NoYV9rZXkiOiI4ZDVmMjFhZGIxMTAzZDE3NTUwOGUwMTM5ODEyMjg0OGZjYmNhNGEzIn0="></iframe><iframe id="__WeixinJSBridgeIframe" style="display: none; " src="weixin://dispatch_message/"></iframe></html>