<html><head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<title>个人中心</title>
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
	<script src="//hm.baidu.com/hm.js?2c44e9ad16424e5bf514d1712c1c605b"></script><script type="text/javascript" src="http://7xt1hu.com1.z0.glb.clouddn.com/1461160588jquery-1.11.3.min.js"></script>
	<link rel="stylesheet" href="http://7xt1hu.com1.z0.glb.clouddn.com/1461123449bootstrap.min.css" type="text/css" media="screen">
	<script type="text/javascript" src="http://7xt1hu.com1.z0.glb.clouddn.com/1461123616bootstrap.min.js"></script>
	<link rel="stylesheet" href="/static/css/layout.css?time=1461739466" type="text/css" media="screen">
	<link rel="stylesheet" href="http://7xt1hu.com1.z0.glb.clouddn.com/1461128081font-awesome.min.css" type="text/css" media="screen">
	<script type="text/javascript" src="http://7xt1hu.com1.z0.glb.clouddn.com/TouchSlide.js"></script>
	<script src="http://7xt1hu.com1.z0.glb.clouddn.com/1461128850jquery.lazyload.min.js"></script>
		<script src="/static/js/layout.js?time=1461741850"></script>
				<link rel="stylesheet" href="/static/css/user-index.css?time=1458871466" type="text/css">
							<link rel="stylesheet" href="http://7xt1hu.com1.z0.glb.clouddn.com/1461212544uploadUserAvatar.css" type="text/css">
	<script src="http://7xt1hu.com1.z0.glb.clouddn.com/1461296532cropbox.js" type="text/javascript"></script>
	<script src="http://7xt1hu.com1.z0.glb.clouddn.com/1461296726uploadUserAvatar.js" type="text/javascript"></script>
	    <!--[if lt IE 9]>
        <script src="http://7xt1hu.com1.z0.glb.clouddn.com/1461217678html5shiv.min.js"></script>
        <script src="http://7xt1hu.com1.z0.glb.clouddn.com/1461217703respond.min.js"></script>
    <![endif]-->
</head>
<body class="body-user-index">
<a id="top" name="top"></a>
<header class="container globalheader fixedheader">
	<div class="text-center globalheader-wrapper clearfix">
		<a href="javascript:history.back(-1);" class="pull-left"><span class="glyphicon glyphicon-chevron-left"></span></a>
		<a href="/?token=eyJ0Z19pZCI6MjY5MTc1MTB9" class="pull-right"><span class="glyphicon glyphicon-home"></span></a>
	</div>
</header><div class="container">
	<div class="well user-header">
		<div class="media">
			<div class="media-left">
				<a href="javascript:void(0);" onclick="uploadUserAvatar();" class="user-avatar">
		      		      <img src="<?= Yii::$app->user->identity->avatar ?>">
				</a>
			</div>
			<div class="media-body">
				<p>
					会员ID：<strong>wx<?= Yii::$app->user->identity->fans_id ?></strong> <span class="subscribe-label">已关注</span></p>
				<p>
					微信昵称：<strong><?= Yii::$app->user->identity->wx_name ?></strong>
				</p>
				<p>
					推荐人：<strong><?= Yii::$app->user->identity->wx_name ?></strong>
				</p>
				<p>
					等级：<strong>少尉 level</strong>
				</p>
				<p>
					<small>关注时间：<?= date('Y-m-d H:i:s',Yii::$app->user->identity->focus_at) ?></small>
				</p>
			</div>
		</div>
		<div class="user-topmenu">
			<ul>
				<li><a href="/user/order"><span class="badge">0</span><img src="http://7xt1hu.com1.z0.glb.clouddn.com/1461241911ico_user_01.png">订单</a></li>
    			    			<li><a href="/distribute"><span class="badge">0.00</span><img src="http://7xt1hu.com1.z0.glb.clouddn.com/1461241931ico_user_03.png">余额</a></li>
				<li><a href="/user/mycoupon"><span class="badge">0</span><img src="http://7xt1hu.com1.z0.glb.clouddn.com/1461241949icon_user_mycoupon.png">夺宝券</a></li>
				<li><a href="/usermessage/letter"><span class="badge">0</span><img src="http://7xt1hu.com1.z0.glb.clouddn.com/1461241969ico_user_letter.gif">信箱</a></li>
			</ul>
		</div>
	</div>
	<div class="list-group user-list-group">
		<a href="/?tg_id=26917510" class="list-group-item">
			<i class="fa fa-angle-right fa-lg color-aaa pull-right"></i> <i class="fa fa-fw fa-flag fa-lg color-999"></i> 我的商城
		</a> <a href="/distribute/index" class="list-group-item"> <i class="fa fa-angle-right fa-lg color-aaa pull-right"></i> <i class="fa fa-fw fa-star-o fa-lg color-999"></i> 分销中心
		</a>
		<a href="/cart/" class="list-group-item"> <i class="fa fa-angle-right fa-lg color-aaa pull-right"></i> <i class="fa fa-fw fa-shopping-cart fa-lg color-999"></i> 我的购物车
		</a>
		<a href="/user/lottery" class="list-group-item"> <i class="fa fa-angle-right fa-lg color-aaa pull-right"></i> <i class="fa fa-fw fa-tags fa-lg color-999"></i> 我的签到抽奖
		</a>
		 <a href="/user/mycoupon" class="list-group-item"> <i class="fa fa-angle-right fa-lg color-aaa pull-right"></i> <i class="fa fa-fw fa-bookmark fa-lg color-999"></i> 我的夺宝券
		</a> <a href="/distribute/myaffiliate" class="list-group-item"> <i class="fa fa-angle-right fa-lg color-aaa pull-right"></i> <i class="fa fa-fw fa-users fa-lg color-999"></i> 我的推荐人
		</a> <a href="/user/moneylog" class="list-group-item"> <i class="fa fa-angle-right fa-lg color-aaa pull-right"></i> <i class="fa fa-fw fa-list-alt fa-lg color-999"></i> 我的流水
		</a> <a href="/user/qrcode" class="list-group-item"> <i class="fa fa-angle-right fa-lg color-aaa pull-right"></i> <i class="fa fa-fw fa-qrcode fa-lg color-999"></i> 个性化编辑推广二维码
		</a>
	</div>
	<div class="list-group user-list-group">
		<a href="/user/order" class="list-group-item"> <i class="fa fa-angle-right fa-lg color-aaa pull-right"></i> <i class="fa fa-fw fa-list fa-lg color-999"></i> 我的订单
		</a> <a href="/user/mobile" class="list-group-item"> <i class="fa fa-angle-right fa-lg color-aaa pull-right"></i> <i class="fa fa-fw fa-phone-square fa-lg color-999"></i> 我的手机号
		</a> <a href="/user/comments" class="list-group-item"> <i class="fa fa-angle-right fa-lg color-aaa pull-right"></i> <i class="fa fa-fw fa-comment fa-lg color-999"></i> 我的评论
		</a> <a href="/user/shipping" class="list-group-item"> <i class="fa fa-angle-right fa-lg color-aaa pull-right"></i> <i class="fa fa-fw fa-map-signs fa-lg color-999"></i> 收货地址
		</a> <a href="tel:13923741548" class="list-group-item"> <i class="fa fa-angle-right fa-lg color-aaa pull-right"></i> <i class="fa fa-fw fa-phone fa-lg color-999"></i> 呼叫客服
		</a> <a href="/user/info" class="list-group-item">
			<i class="fa fa-angle-right fa-lg color-aaa pull-right"></i> <i class="fa fa-fw fa-info-circle fa-lg color-999"></i> 帐号资料
		</a> <a href="/user/password" class="list-group-item"> <i class="fa fa-angle-right fa-lg color-aaa pull-right"></i> <i class="fa fa-fw fa-unlock fa-lg color-999"></i> 修改密码
		</a> <a href="/user/myreport" class="list-group-item">
	  	<i class="fa fa-angle-right fa-lg color-aaa pull-right"></i>	  	<i class="fa fa-fw fa-bullhorn fa-lg color-999"></i> 我的举报
		</a> <a href="/usermessage/letter" class="list-group-item"> <i class="fa fa-angle-right fa-lg color-aaa pull-right"></i> <i class="fa fa-fw fa-envelope-o fa-lg color-999"></i> 我的信箱
		</a> <a href="/usermessage/index" class="list-group-item"> <i class="fa fa-angle-right fa-lg color-aaa pull-right"></i> <i class="fa fa-fw fa-comments-o fa-lg color-999"></i> 我的话题
		</a> <a href="/usermessage/notice" class="list-group-item">
	  	<i class="fa fa-angle-right fa-lg color-aaa pull-right"></i>	  	<i class="fa fa-fw fa-file-text-o fa-lg color-999"></i> 系统消息
		</a><a href="/login/exit" class="list-group-item"> <i class="fa fa-angle-right fa-lg color-aaa pull-right"></i> <i class="fa fa-fw fa-sign-out fa-lg color-999"></i> 退出登陆
		</a>
	</div>
	
	<div class="modal fade" id="avatarModal" tabindex="-1" role="dialog" aria-labelledby="avatarModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
				<h4 class="modal-title" id="avatarModalLabel">上传新头像</h4>
			</div>
			<form class="avatar-form">
				<div class="modal-body text-center">
					<div class="alert hide"></div>
					<div class="imageBox">
						<div class="thumbBox"></div>
						<div class="spinner" style="">请上传新头像</div>
					</div>
					<div class="action text-center">
						<input type="file" class="hide" id="file" accept="image/*">
						<div class="text-center">
							<button type="button" id="btnNew" class="btn btn-default btn-lg"><i class="fa fa-file-image-o"></i> 上传新头像</button>
						</div>
						<div class="btn-group">
							<button type="button" id="btnZoomIn" class="btn btn-default">放大</button>
							<button type="button" id="btnZoomOut" class="btn btn-default">缩小</button>
							<button type="button" id="btnCrop" class="btn btn-success">裁切</button>
						</div>
					</div>
					<div class="cropped hide"></div>
					<input type="hidden" name="avatar_base64" value="">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
					<button type="submit" class="btn btn-primary">保存</button>
				</div>
			</form>
		</div>
	</div>
</div></div><!--
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
</body><iframe id="__WeixinJSBridgeIframe_SetResult" style="display: none; " src="weixin://private/setresult/SCENE_FETCHQUEUE&amp;eyJfX2pzb25fbWVzc2FnZSI6WyJ7XCJmdW5jXCI6XCJsb2dcIixcInBhcmFtc1wiOntcIm1zZ1wiOlwiX3J1bk9uM3JkQXBpTGlzdCA6IG9uVm9pY2VSZWNvcmRFbmQsb25Wb2ljZVBsYXlCZWdpbixvblZvaWNlUGxheUVuZCxvbkxvY2FsSW1hZ2VVcGxvYWRQcm9ncmVzcyxvbkltYWdlRG93bmxvYWRQcm9ncmVzcyxvblZvaWNlVXBsb2FkUHJvZ3Jlc3Msb25Wb2ljZURvd25sb2FkUHJvZ3Jlc3Msb25WaWRlb1VwbG9hZFByb2dyZXNzLG1lbnU6c2V0Zm9udCxtZW51OnNoYXJlOndlaWJvLG1lbnU6c2hhcmU6ZW1haWwsd3hkb3dubG9hZDpzdGF0ZV9jaGFuZ2Usd3hkb3dubG9hZDpwcm9ncmVzc19jaGFuZ2UsaGRPbkRldmljZVN0YXRlQ2hhbmdlZCxhY3Rpdml0eTpzdGF0ZV9jaGFuZ2Usb25XWERldmljZUJsdWV0b290aFN0YXRlQ2hhbmdlLG9uV1hEZXZpY2VMYW5TdGF0ZUNoYW5nZSxvbldYRGV2aWNlQmluZFN0YXRlQ2hhbmdlLG9uUmVjZWl2ZURhdGFGcm9tV1hEZXZpY2Usb25TY2FuV1hEZXZpY2VSZXN1bHQsb25XWERldmljZVN0YXRlQ2hhbmdlLG9uTmZjVG91Y2gsb25CZWFjb25Nb25pdG9yaW5nLG9uQmVhY29uc0luUmFuZ2UsbWVudTpjdXN0b20sb25TZWFyY2hEYXRhUmVhZHksb25TZWFyY2hJbWFnZUxpc3RSZWFkeSxvblRlYWNoU2VhcmNoRGF0YVJlYWR5LG9uU2VhcmNoSW5wdXRDaGFuZ2Usb25TZWFyY2hJbnB1dENvbmZpcm0sb25TZWFyY2hTdWdnZXN0aW9uRGF0YVJlYWR5LG9uTXVzaWNTdGF0dXNDaGFuZ2VkLG9uUHVsbERvd25SZWZyZXNoLG9uUGFnZVN0YXRlQ2hhbmdlLG9uR2V0QThLZXlVcmwsZGVsZXRlQWNjb3VudFN1Y2Nlc3MsV05KU0hhbmRsZXJJbnNlcnQsV05KU0hhbmRsZXJNdWx0aUluc2VydCxXTkpTSGFuZGxlckV4cG9ydERhdGEsV05KU0hhbmRsZXJIZWFkZXJBbmRGb290ZXJDaGFuZ2UsV05KU0hhbmRsZXJFZGl0YWJsZUNoYW5nZSxXTkpTSGFuZGxlckVkaXRpbmdDaGFuZ2UsV05KU0hhbmRsZXJTYXZlU2VsZWN0aW9uUmFuZ2UsV05KU0hhbmRsZXJMb2FkU2VsZWN0aW9uUmFuZ2Usc2hvd0xvYWRpbmcsZ2V0U2VhcmNoRW1vdGlvbkRhdGFDYWxsQmFja1wifSxcIl9fbXNnX3R5cGVcIjpcImNhbGxcIixcIl9fY2FsbGJhY2tfaWRcIjpcIjEwMDBcIn0iLCJ7XCJmdW5jXCI6XCJsb2dcIixcInBhcmFtc1wiOntcIm1zZ1wiOlwic2V0IGZvbnQgc2l6ZSB3aXRoIHdlYmtpdFRleHRTaXplQWRqdXN0OiAyXCJ9LFwiX19tc2dfdHlwZVwiOlwiY2FsbFwiLFwiX19jYWxsYmFja19pZFwiOlwiMTAwMVwifSIsIntcImZ1bmNcIjpcInNldEZvbnRTaXplQ2FsbGJhY2tcIixcInBhcmFtc1wiOntcImZvbnRTaXplXCI6XCIyXCJ9LFwiX19tc2dfdHlwZVwiOlwiY2FsbFwiLFwiX19jYWxsYmFja19pZFwiOlwiMTAwMlwifSJdLCJfX3NoYV9rZXkiOiJkMWIzZDcyMzQ2MDhlOTZmNTU0NjdhZWYyZTY1NzdiOGE4ODVmNzZmIn0="></iframe><iframe id="__WeixinJSBridgeIframe" style="display: none; " src="weixin://dispatch_message/"></iframe></html>