<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
$this->title = "天天零元购官网";
?>
<?php $this->beginPage() ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title><?= Html::encode($this->title) ?></title>
	<?php $this->head() ?>
    <meta content="yes" name="apple-mobile-web-app-capable"/>
    <meta content="black" name="apple-mobile-web-app-status-bar-style"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-touch-fullscreen" content="YES"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
	<?= Html::csrfMetaTags() ?>
    <!--<script type="text/javascript" src="http://7xt1hu.com1.z0.glb.clouddn.com/1461160588jquery-1.11.3.min.js"></script>-->
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
    <link rel="stylesheet" href="http://7xt1hu.com1.z0.glb.clouddn.com/1461123449bootstrap.min.css" type="text/css"
          media="screen">
    <script type="text/javascript" src="http://7xt1hu.com1.z0.glb.clouddn.com/1461123616bootstrap.min.js"></script>
    <link rel="stylesheet" href="/static/css/layout.css?time=1461739466" type="text/css" media="screen">
    <link rel="stylesheet" href="http://7xt1hu.com1.z0.glb.clouddn.com/1461128081font-awesome.min.css" type="text/css"
          media="screen">
    <script type="text/javascript" src="http://7xt1hu.com1.z0.glb.clouddn.com/TouchSlide.js"></script>
    <script src="/static/js/layout.js?time=1461741850"></script>
    <script src="http://7xt1hu.com1.z0.glb.clouddn.com/1461128850jquery.lazyload.min.js"></script>

    <!--[if lt IE 9]>
    <script src="http://7xt1hu.com1.z0.glb.clouddn.com/1461217678html5shiv.min.js"></script>
    <script src="http://7xt1hu.com1.z0.glb.clouddn.com/1461217703respond.min.js"></script>
    <![endif]-->
    <script src="http://7xt1hu.com1.z0.glb.clouddn.com/1461232319fakeLoader.min.js"></script>
    <link rel="stylesheet" href="http://7xt1hu.com1.z0.glb.clouddn.com/1461232347fakeLoader.css">
	<link rel="stylesheet" href="https://res.wx.qq.com/open/libs/weui/0.4.2/weui.css">
    <script type="text/javascript">
        $(document).ready(function () {
            $(".fakeloader").fakeLoader({
                timeToHide: 600,
                bgColor: "#444",
                spinner: "spinner2",
            });
        });
    </script>
</head>
<?php $this->beginBody() ?>
<?= $content ?>
<?php $this->endBody() ?>
<?php $this->endPage() ?>
</html>