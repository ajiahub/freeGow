<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\helpers\Url;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
$this->route = Yii::$app->controller->getRoute();
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=1.5, user-scalable=yes">
  <meta charset="<?= Yii::$app->charset ?>">
  <?= Html::csrfMetaTags() ?>
  <title>天天零元购商务后台管理系统</title>	
  <?php $this->head() ?>  
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
        <script src="/static/glide/dist/jquery.glide.min.js"></script>
    <script type="text/javascript" src="/static/js/perfect-scrollbar.jquery.min.js"></script>
  <link rel="stylesheet" href="/static/css/perfect-scrollbar.min.css" type="text/css">
      <link rel="stylesheet" href="/static/css/site-index.css" type="text/css">
    <script type="text/javascript">
	var goodImgPath = '/assets/';
  </script>
      <script src="/static/js/site-index.js"></script>
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
			<li <?php if(strpos('/'.$this->route,'seller') || (in_array($this->route,['site/index','credit/index']))): ?>class="active"<?php endif ?>><a href="/site/index/">控制台</a></li>
	        <li <?php if(strpos('/'.$this->route,'goods')): ?>class="active"<?php endif ?>><a href="/goods">商品管理</a></li>
	        <li <?php if(strpos('/'.$this->route,'order')): ?>class="active"<?php endif ?>><a href="/order">订单中心</a></li>
	        <li <?php if(strpos('/'.$this->route,'cash')): ?>class="active"<?php endif ?>><a href="/cash">结算中心</a></li>
	        	      </ul>
	      <ul class="nav navbar-nav navbar-right ">
	      		      	<li><a href="javascript:void(0);"><small class="color-888">商户号：<?= Yii::$app->user->identity->id ?></small></a></li>
	      	<li class="active"><a href="javascript:void(0);"><?= Yii::$app->user->identity->username ?></a></li>
	      	<li><a href="/seller/info">商户资料</a></li>
	      	<li><a href="/seller/profile">用户密码</a></li>
            <li><a href="/seller/paycode">提现密码</a></li>
	        <li><a href="/site/logout"><i class="fa fa-sign-out"></i> 登出</a></li>
	      		      </ul>
	    </div>
	  </div>
	</nav>
</header>

<?php $this->beginBody() ?>

<?= $content ?>

<footer>
	<nav class="navbar navbar-default navbar-fixed-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse">
          <p class="navbar-text text-center">&copy; 2016 天天零元购官网版权所有，并保留所有权利。 </p>
        </div>
      </div>
    </nav>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
