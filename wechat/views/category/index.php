<?php
use kop\y2sp\ScrollPager;
use yii\widgets\ListView;
?>
		<link rel="stylesheet" href="/static/css/category-zero.css?time=1460361972" type="text/css">
			<script src="/static/js/category-zero.js?time=1460696436"></script>
			<link rel="stylesheet" href="http://7xt1hu.com1.z0.glb.clouddn.com/1461232924nav_style_all.css" type="text/css">
	<script src="http://7xt1hu.com1.z0.glb.clouddn.com/1461232765jquery.smint.js"></script>
<body class="body-category-zero has-tguser">
<div class="fakeloader" style="position: fixed; width: 100%; height: 100%; top: 0px; left: 0px; background-color: rgb(102, 102, 102); z-index: 999; display: none; "><div class="fl spinner1" style="position: absolute; left: 160px; top: 239.5px; "><div class="double-bounce1"></div><div class="double-bounce2"></div></div></div>
<a id="top" name="top"></a>
<!--个人中心、中间页、活动、普通页面样式-->
<nav class="global-nav smint" style="top: 0px; ">
	<a href="javascript:window.history.go(-1);" class="back hide-font">Back</a>
        <h1>0元区 | 服装鞋饰</h1>
        
            <!--<img src="/static/images/header-goods.png" class="logo">-->
        <div class="popup"></div>
	<div id="subMenu" class="sub-menu" onsclick="this.className='sub-menu onfocus';">
		<a href="javascript:void(0);" class="menu hide-font">menu</a>
		<ul>
			<li><a href="#">首页</a></li>
			<li><a href="#">个人中心</a></li>
			<li><a href="#">全部０元</a></li>
			<li><a href="#">精品区</a></li>
			<li><a href="#">零元砍价</a></li>
		</ul>
	</div>
</nav>
<div class="category-menus">
	<div class="container">
		<div class="category-menuwrapper">
			<!-- 一级菜单 -->
			<div class="menu menu-container">
				<ul class="list-unstyled">
					<li><a href="#"><img src="static/images/static/jx.png"> 精选 </a></li>
										<li class="active"><a href="#"><img src="static/images/static/cat-fushi.jpg">服装鞋饰</a></li>
										<li><a href="#"><img src="static/images/static/cat-jiaju.jpg">家居日用</a></li>
										<li><a href="#"><img src="static/images/static/cat-3c.jpg">办公数码</a></li>
										<li><a href="#"><img src="static/images/static/cat-muying.jpg">母婴食品</a></li>
									</ul>
			</div>
						<!-- 二级菜单 -->
			<div class="submenu menu-container">
				<ul class="list-unstyled">
					<li class="active"><a href="#">全部 </a></li>
										<li><a href="#"> 女装 </a></li>
										<li><a href="#"> 男装 </a></li>
										<li><a href="#"> 鞋靴 </a></li>
										<li><a href="#"> 内衣家居 </a></li>
										<li><a href="#"> 运动户外 </a></li>
										<li><a href="#"> 箱包 </a></li>
										<li><a href="#"> 珠宝配饰 </a></li>
										<li><a href="#"> 手表眼镜 </a></li>
									</ul>
			</div>
					</div>
	</div>
</div>
<div class="container">
	<div class="rows good-lists masonry-container clearfix" data-pid="0" data-id="430" data-area="1" data-order="sort">
		<!-- 产品列表 -->
			<?= ListView::widget([
					'dataProvider' => $dataProvider,
					'itemOptions' => ['class' => 'item'],
					'itemView' => '/goods/_goods_list',
					'layout' => '{items}{pager}',
					'emptyText' => '暂时没有产品',
					'pager' => [
							'class' => ScrollPager::className(),
							'triggerOffset' => 9999,
							'spinnerTemplate' => $this->render('//layouts/loading'),
					]
			])?>
	</div>
</div>
<div class="tg-userinfo">
	<div class="container">
		<div class="media">
			<div class="media-left">
				<a href="javascript:void(0);"><img class="media-object" src="http://p5.0gow.com/icon0gow_5708bf88115d2?imageMogr2/thumbnail/64x/strip/quality/80/format/jpg" alt="hello world"></a>
			</div>
			<div class="media-body">
				<p class="text-overflow">来自hello world的分享</p>
			</div>
		</div>
		<a href="javascript:void(0);" class="close-userinfo">关闭/隐藏</a>
	</div>
</div><!--
<div class="to-top">
	返回顶部
</div>
-->

</body><iframe id="__WeixinJSBridgeIframe_SetResult" style="display: none; " src="weixin://private/setresult/SCENE_FETCHQUEUE&amp;eyJfX2pzb25fbWVzc2FnZSI6W10sIl9fc2hhX2tleSI6IjFhM2QwZmFjYWVkMWFkYzUyOTZlMmY4YzlhNGQyMTA5NDkwODQ3YmQifQ=="></iframe><iframe id="__WeixinJSBridgeIframe" style="display: none; " src="weixin://dispatch_message/"></iframe>
