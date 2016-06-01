<?php
use yii\widgets\ActiveForm;
?>
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
      <link rel="stylesheet" href="/static/css/login-index.css" type="text/css">
    <script type="text/javascript">
	var goodImgPath = '/assets/';
	window.onerror=function(){return true;} 
  </script>
      <script src="/static/js/login-index.js"></script>
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
	        <li><a href="/register/serviceAgreement?ji=1">注册</a></li>
	        	      </ul>
	    </div>
	  </div>
	</nav>
</header><div class="container-fluid">
		<div class="container">
    <div class="row">
	  <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 text-center">
	       <div class="left-gg" >
			   <div class="left-gg-top clearfix">
				   <div class="pull-left"><img src="/static/images/lgzs_logo.png" class="img-responsive"></div>
				   <div class="pull-left gg-info">
					   <ul>
					   		<li class="clearfix"><h1 class="title pull-left" style="margin-top:0px;">天天零元购</h1><img  class="pull-left lgzs_png" src="/static/images/lgzs.png"></li>
					   		<li><h2 style="margin-bottom:-10px;">自动同步订单  |  自动导出订单</h2></li>
					   		<li><h2>显示留言、备注 | 批量打印 批量发货</h2></li>
					   </ul>
				   </div>
			   </div>

		   </div>
	  </div>
	   <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
		
		<div class="login-wrapper">
		<h2 class="text-left">登陆</h2>
		<?php $form = ActiveForm::begin() ?>
		  <div class="form-group">
		    <div class="alert hide"><p></p></div>
		  </div>
		  	<?= $form->field($model, 'username') ?>
			<?= $form->field($model, 'password')->passwordInput() ?>
		  <div class="form-group">
		      <button type="submit" class="btn btn-block btn-warning">提交</button>

		  </div>
		  <div class="form-group">
		     <span class="help-block">还没有帐号？ <a href="/register/serviceAgreement?ji=1">立即注册</a>！&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/login/goodstype" target="_blank">商品分类说明</a></span>
		  </div>
	       </div>
		<?php ActiveForm::end() ?>
		</div>
	</div>
</div>

</div>
<footer>
	<nav class="navbar navbar-default navbar-fixed-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse">
          <p class="navbar-text text-center">&copy; 2016 零购官网版权所有，并保留所有权利。 </p>
        </div>
      </div>
    </nav>
</footer>
</body>
</html>