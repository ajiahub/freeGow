<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=1.5, user-scalable=yes">
  <title>天天零元购商务后台管理系统</title>
  <meta name="description" content="">
  <meta name="keywords" content="" />
  <link rel="shortcut icon" href="" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="renderer" content="webkit">
  <meta name="format-detection" content="telephone=no" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-touch-fullscreen" content="YES" />
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <script type="text/javascript" src="/static/js/jquery-2.1.1.min.js"></script>
  <!--[if lt IE 9]>
  <script type="text/javascript" src="/static/js/jquery-1.9.0.js"></script>
  <script type="text/javascript" src="/static/js/jquery-migrate-1.0.0.js"></script>
  <![endif]-->
  <link rel="stylesheet" href="/static/bootstrap/css/bootstrap.min.css" type="text/css">
  <script type="text/javascript" src="/static/bootstrap/js/bootstrap.js"></script>
  <script language="javascript" type="text/javascript" src="/static/js/97date/WdatePicker.js"></script>
  <link rel="stylesheet" href="/static/font-awesome/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="/static/aun/aun.css" type="text/css">
  <link rel="stylesheet" href="/static/css/style.css" type="text/css">
  <script type="text/javascript" src="/static/js/jquery.zeroclipboard.min.js"></script>
  <script src="/static/js/layouts.js"></script>
        <script type="text/javascript" src="/static/js/perfect-scrollbar.jquery.min.js"></script>
  <link rel="stylesheet" href="/static/css/perfect-scrollbar.min.css" type="text/css">
      <link rel="stylesheet" href="/static/css/register-index.css" type="text/css">
    <script type="text/javascript">
	var goodImgPath = '/assets/';
  </script>
      <script src="/static/js/register-index.js"></script>
    <!--[if lt IE 9]>
  <script src="/static/js/html5shiv.min.js"></script>
  <script src="/static/js/respond.min.js"></script>
  <![endif]-->
</head>
<body>
<a name="top" id="top"></a>
<header>
	<nav class="navbar navbar-inverse navbar-fixed-top">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="/"><strong>天天零元购</strong> 商务后台</a>
	    </div>

	    <div class="collapse navbar-collapse" id="navbar-collapse">
	      <ul class="nav navbar-nav">
				      </ul>
	      <ul class="nav navbar-nav navbar-right ">
	      		        <li><a href="/login">登陆</a></li>
	        <li><a href="/register">注册</a></li>
	        	      </ul>
	    </div>
	  </div>
	</nav>
</header><div class="container-fluid">
		<script src="/static/js/jsAddress.js" type="text/javascript"></script>
<div class="container">
	<div class="register-wrapper">
		<h1 class="text-center">天天零元购商务帐号注册</h1>
		<form class="form-horizontal register-form" action="/register/Addsubmit" method="post" enctype="multipart/form-data">
		  <div class="form-group">
		    <label class="col-lg-2 col-md-2 col-sm-1 col-xs-12 control-label"></label>
		    <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12">
		    <div class="alert alert-info"><p>尊敬的个人商户，你好，因平台规则调整，从即日起至2016年5月1日，个人商户注册暂停审核。已提交注册的商户，我们将于2016年5月1日之后进行审核。由此带来的不便我们深表歉意。</p></div>
		    </div>
		  </div>
		  <div class="form-group">
		      <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12 control-label"><h4>账号信息</h4></div>
		  </div>
		  
		  <div class="form-group">
		    <label class="col-lg-4 col-md-4 col-sm-3 col-xs-12 control-label color-777">用户名 <span class="color-red">*</span></label>
		    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
		      <input type="text" class="form-control" id="username" name="username" data-check="1" placeholder="您的用户名">
		    </div>
		    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
				<span class="help-block hide">用户名为6-20位字母和数字组合，不能全是数字</span>
		    </div>
		  </div>
		 <div class="form-group">
		    <label class="col-lg-4 col-md-4 col-sm-3 col-xs-12 control-label color-777">密码 <span class="color-red">*</span></label>
		    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
		      <input type="password" class="form-control" id="password" name="password" placeholder="您的密码">
		    </div>
		    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
				<span class="help-block hide">密码不能少于6位</span>
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-lg-4 col-md-4 col-sm-3 col-xs-12 control-label color-777">重复密码 <span class="color-red">*</span></label>
		    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
		      <input type="password" class="form-control" id="repassword" name="repassword" placeholder="您的重复密码">
		    </div>
		    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
				<span class="help-block hide">两次密码必须保持一致</span>
		    </div>
		  </div>
		  <!-- aHR0cDovL3BvcC4wZ293LmNvbS9yZWdpc3Rlci9idXllcj9kYXRhPWV5SnliMnhsSWpvekxDSnphWFJsSWpvaU1HZHZkeUo5 -->		  <hr />
		  <div class="form-group">
		      <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12 control-label"><h4>商户个人信息</h4></div>
		  </div>
		  <div class="form-group">
		    <label class="col-lg-4 col-md-4 col-sm-3 col-xs-12 control-label color-777">天天零元购账号 <span class="color-red">*</span></label>
		    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
		      <input type="text" class="form-control" id="uname" name="uname" data-check="1" placeholder="您的天天零元购账号">
		    </div>
		    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
				<span class="help-block">您的天天零元购会员ID（在个人中心可以找到）…</span>
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-lg-4 col-md-4 col-sm-3 col-xs-12 control-label color-777">商户类型 <span class="color-red">*</span></label>
		    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
		      <select class="form-control" id="role" name="role">
		          <option value="">请选择商户类型</option>
		          <option value="1">个人商户</option>
		          <option value="2">企业商户</option>
		      </select>
		    </div>
		    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
				<span class="help-block hide"></span>
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-lg-4 col-md-4 col-sm-3 col-xs-12 control-label color-777"><span class="label-company hide">负责人</span>姓名 <span class="color-red">*</span></label>
		    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
		      <input type="text" class="form-control" id="name" name="name" placeholder="您的姓名">
		    </div>
		    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
				<span class="help-block hide"></span>
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-lg-4 col-md-4 col-sm-3 col-xs-12 control-label color-777">商户简介<span class="color-red">*</span></label>
		    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
		      <textarea class="form-control" id="about" name="about" rows="6" placeholder="您的介绍"></textarea>
		    </div>
		    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
				<span class="help-block">经营范围，主营商品等商户介绍等</span>
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-lg-4 col-md-4 col-sm-3 col-xs-12 control-label color-777">联系手机 <span class="color-red">*</span></label>
		    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
		      <input type="text" class="form-control" id="mobile" name="mobile" data-check="1" placeholder="您的手机号码">
		    </div>
		    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
				<span class="help-block">此号码作为唯一提现短信验证手机号，请确保号码真实有效！</span>
		    </div>
		  </div>
		  
		  <div class="form-group">
		    <label class="col-lg-4 col-md-4 col-sm-3 col-xs-12 control-label color-777">售后电话  <span class="color-red">*</span></label>
		    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
		      <input type="text" class="form-control" id="telphone" name="telphone" data-check="1" placeholder="您的电话号码">
		    </div>
		    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
				<span class="help-block">买家可以通过此号码联系卖家,请确保号码真实有效！</span>
		    </div>
		  </div>
		  
		  
		  <div class="form-group">
		    <label class="col-lg-4 col-md-4 col-sm-3 col-xs-12 control-label color-777"><span class="label-company hide">法人代表</span>身份证号码 <span class="color-red">*</span></label>
		    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
		      <input type="text" class="form-control" id="idcard_number" name="idcard_number" data-check="1" placeholder="您的身份证号码">
		    </div>
		    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
				<span class="help-block hide"></span>
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-lg-4 col-md-4 col-sm-3 col-xs-12 control-label color-777"><span class="label-company hide">法人代表</span>身份证照片<span class="color-red">*</span></label>
		    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
		      <div class="input-group">
				<input type="text" class="form-control" id="frzj" placeholder="请上传身份证正面照"> <span
					class="input-group-btn"> <a class="btn btn-default">上传</a>
				</span>
			</div>
			<input type="file" class="form-control hide" id="idcard_front" name="idcard_front">

		    </div>
		    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
				<span class="help-block hide"></span>
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-lg-4 col-md-4 col-sm-3 col-xs-12 control-label color-777"></label>
		    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
		      <div class="input-group">
				<input type="text" class="form-control" id="frzj2" placeholder="请上传身份证背面照"> <span
					class="input-group-btn"> <a class="btn btn-default">上传</a>
				</span>
			</div>
			<input type="file" class="form-control hide" id="idcard_back"
				name="idcard_back">
		      </div>
		    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
				<span class="help-block hide"></span>
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-lg-4 col-md-4 col-sm-3 col-xs-12 control-label color-777"><span class="label-company hide">法人代表</span>日常生活照<span class="color-red">*</span></label>
		    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
		      <div class="input-group">
				<input type="text" class="form-control" id="rcsh" placeholder="请上传日常生活照"> <span class="input-group-btn"> <a class="btn btn-default">上传</a>
				</span>
			</div>
			<input type="file" class="form-control hide" id="photo"
				name="photo">

		    </div>
		    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
				<span class="help-block hide"></span>
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-lg-4 col-md-4 col-sm-3 col-xs-12 control-label color-777">常用邮箱 <span class="color-red">*</span></label>
		    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
		      <input type="text" class="form-control" id="email" name="email" data-check="1" placeholder="您的常用邮箱">
		    </div>
		    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
				<span class="help-block hide"></span>
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-lg-4 col-md-4 col-sm-3 col-xs-12 control-label color-777">联系人QQ <span class="color-red">*</span></label>
		    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
		      <input type="text" class="form-control" id="qq" name="qq" data-check="1" placeholder="您的QQ号码">
		    </div>
		    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
				<span class="help-block hide"></span>
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-lg-4 col-md-4 col-sm-3 col-xs-12 control-label color-777">售前QQ <span class="color-red">*</span></label>
		    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
		      <input type="text" class="form-control" id="presale_qq" name="presale_qq" data-check="1" placeholder="您的售前QQ">
		    </div>
		    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
				<span class="help-block">真实有效QQ号码，<a href="http://www.54kefu.net/linshi/201202/391.html" target="_blank">务必参照进行相应设置</a></span>
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-lg-4 col-md-4 col-sm-3 col-xs-12 control-label color-777">售后QQ <span class="color-red">*</span></label>
		    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
		      <input type="text" class="form-control" id="aftersale_qq" name="aftersale_qq" data-check="1" placeholder="您的售后QQ">
		    </div>
		    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
				<span class="help-block">真实有效QQ号码，<a href="http://www.54kefu.net/linshi/201202/391.html" target="_blank">务必参照进行相应设置</a></span>
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-lg-4 col-md-4 col-sm-3 col-xs-12 control-label color-777">联系地址 <span class="color-red">*</span></label>
		    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
		      <input type="text" class="form-control" id="address" name="address" data-check="1" placeholder="您的联系地址">
		    </div>
		    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
				<span class="help-block hide"></span>
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-lg-4 col-md-4 col-sm-3 col-xs-12 control-label color-777">紧急联系人姓名 <span class="color-red">*</span></label>
		    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
		      <input type="text" class="form-control" id="emergency_name" name="emergency_name" placeholder="您的紧急联系人姓名">
		    </div>
		    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
				<span class="help-block hide"></span>
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-lg-4 col-md-4 col-sm-3 col-xs-12 control-label color-777">紧急联系人手机 <span class="color-red">*</span></label>
		    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
		      <input type="text" class="form-control" id="emergency_mobile" name="emergency_mobile" data-check="1" placeholder="您的紧急联系人手机号">
		    </div>
		    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
				<span class="help-block hide"></span>
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-lg-4 col-md-4 col-sm-3 col-xs-12 control-label color-777">紧急联系人电话 &nbsp;&nbsp;</label>
		    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
		      <input type="text" class="form-control" id="emergency_tel" name="emergency_tel" data-check="1" placeholder="您的紧急联系人电话号码">
		    </div>
		  </div>
		  <hr />
		  <div class="data-company hide">
		      <div class="form-group">
		      <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12 control-label"><h4>商户企业信息</h4></div>
		  </div>
		  <div class="form-group">
		    <label class="col-lg-4 col-md-4 col-sm-3 col-xs-12 control-label color-777">企业名称 <span class="color-red">*</span></label>
		    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
		      <input type="text" class="form-control" id="company_name" name="company_name" data-check="1" placeholder="您的企业名称">
		    </div>
		    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
				<span class="help-block hide"></span>
		    </div>
		  </div>
		  
		  <div class="form-group">
		    <label class="col-lg-4 col-md-4 col-sm-3 col-xs-12 control-label color-777">负责人职位 <span class="color-red">*</span></label>
		    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
		      <input type="text" class="form-control" id="job" name="job" placeholder="负责人职位">
		    </div>
		    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
				<span class="help-block hide"></span>
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-lg-4 col-md-4 col-sm-3 col-xs-12 control-label color-777">营业执照号码 <span class="color-red">*</span></label>
		    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
		      <input type="text" class="form-control" id="licence_number" name="licence_number" data-check="1" placeholder="营业执照号码 ">
		    </div>
		    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
				<span class="help-block hide"></span>
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-lg-4 col-md-4 col-sm-3 col-xs-12 control-label color-777">营业执照照片 <span class="color-red">*</span></label>
		    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
		      <div class="input-group">
				<input type="text" class="form-control" id="yyzz" placeholder="请上传营业执照照片"> <span class="input-group-btn"> <a class="btn btn-default">上传</a>
				</span>
			</div>
			<input type="file" class="form-control hide" id="licence"
				name="licence">

		    </div>
			  <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
				  <span class="help-block hide"></span>
			  </div>
		    </div>
		    <div class="form-group">
		    <label class="col-lg-4 col-md-4 col-sm-3 col-xs-12 control-label color-777">组织机构代码证号码</label>
		    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
		      <input type="text" class="form-control" id="organization_number" name="organization_number" data-check="1" placeholder="组织机构代码证号码 ">
		    </div>
		    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-lg-4 col-md-4 col-sm-3 col-xs-12 control-label color-777">组织机构代码证照片</label>
		    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
		      <div class="input-group">
				<input type="text" class="form-control" placeholder="请上传组织机构代码证照片"> <span class="input-group-btn"> <a class="btn btn-default">上传</a>
				</span>
			</div>
			<input type="file" class="form-control hide" id="organization" name="organization">

		    </div>
		    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-lg-4 col-md-4 col-sm-3 col-xs-12 control-label color-777">税务登记证号码</label>
		    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
		      <input type="text" class="form-control" id="tax_number" name="tax_number" data-check="1" placeholder="您的税务等级证号码">
		    </div>
		    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-lg-4 col-md-4 col-sm-3 col-xs-12 control-label color-777">税务登记证照片</label>
		    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
		      <div class="input-group">
				<input type="text" class="form-control" placeholder="请上传税务登记证照片"> <span class="input-group-btn"> <a class="btn btn-default">上传</a>
				</span>
			</div>
			<input type="file" class="form-control hide" id="tax" name="tax">

		    </div>
		    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-lg-4 col-md-4 col-sm-3 col-xs-12 control-label color-777">商标注册证或代理授权书号码 <span class="color-red">*</span></label>
		    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
		      <input type="text" class="form-control" id="trademark_number" name="trademark_number" data-check="1" placeholder="您的商标注册证或代理授权书号码">
		    </div>
		    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
				<span class="help-block hide"></span>
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-lg-4 col-md-4 col-sm-3 col-xs-12 control-label color-777">商标注册证或代理授权书照片<span class="color-red">*</span></label>
		    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
		      <div class="input-group">
				<input type="text" class="form-control" placeholder="请上传商标注册证或代理授权书照片"> <span class="input-group-btn"> <a class="btn btn-default">上传</a>
				</span>
			</div>
			<input type="file" class="form-control hide" id="trademark" name="trademark">
		    </div>
		    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
				<span class="help-block hide"></span>
		    </div>
		  </div>
		      <hr />
		  </div>
	<div class="form-group">
		<label class="col-lg-4 col-md-4 col-sm-3 col-xs-12 control-label">用户购买通知</label>
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
			<label class="radio-inline"> <input type="radio" name="notice" value="1" checked="checked">
				开启通知
			</label> 
			<label class="radio-inline"> <input type="radio" name="notice" value="0">
				关闭通知
			</label>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
		</div>
	</div>
	<div class="form-group">
		<label class="col-lg-4 col-md-4 col-sm-3 col-xs-12 control-label">备注</label>
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
			<textarea class="form-control" id="remark" name="remark" rows="3"></textarea>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-3 col-xs-12"></div>
	</div>
		  <div class="form-group">
		    <label class="col-lg-4 col-md-4 col-sm-3 col-xs-12 control-label"></label>
		    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
		      <div class="checkbox">
                <label>
                  <input type="checkbox" name="service-agreement" id="service-agreement" value="1" >
                                                                我同意<a href="/register/service-agreement" target="_blank">《天天零元购商务注册协议》</a>
                </label>
              </div>
            </div>
          </div>
			<div class="form-group">
				<label class="col-lg-4 col-md-4 col-sm-3 col-xs-12 control-label"></label>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<p class="help-block text-center">只有同意《天天零元购商务注册协议》才能注册为零购商户哟！</p>
				</div>
			</div>
		  <div class="form-group">
		  	<label class="col-lg-4 col-md-4 col-sm-3 col-xs-12 control-label"></label>
		    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
		      <button type="submit" class="btn btn-lg btn-block btn-primary">提交</button>
		    </div>
		  </div>
		  <div class="form-group">
		  	<label class="col-lg-4 col-md-4 col-sm-3 col-xs-12 control-label"></label>
		    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
		     	<p class="help-block text-center">已经拥有了帐号？<a href="/login">点此登陆</a></p>
		    </div>
		  </div>
		</form>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		document.getElementById('role').value='';
		var error = 0;
		if(error == 1)
		{
			alert("注册失败，请重新填写!");
		}else if(error == 2){
			alert("注册成功，点击确定将跳转到登录页面");
			window.location.href="/login/index";
		}
	});
</script> </div>
<footer>
	<nav class="navbar navbar-default navbar-fixed-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse">
          <p class="navbar-text text-center">&copy; 2016 天天零元购版权所有，并保留所有权利。 </p>
        </div>
      </div>
    </nav>
</footer>
</body>
</html>