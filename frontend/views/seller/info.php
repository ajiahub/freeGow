<div class="container-fluid main-container">
	<?= $this->render('/layouts/menu'); ?>
<div class="container-fluid">
  <div class="location"> 您的位置：<a href="/">控制台</a><a href="javascript:void(0);" class="active">商务资料</a></div>
  <div class="page-header clearfix">
    <h1 class="pull-left"><i class="fa fa-cube fa-fw"></i>
                商务资料</h1><a href="/" class="btn btn-default">返回</a>
  </div>
    <div class="panel panel-default">
        <div class="panel-heading">
          <ul class="nav nav-pills seller-tabs">
                     <li class="active"><a href="#role-1" data-target="#role-1" data-toggle="tab">个人商户</a></li>
           <li class="disabled"><a href="#role-2" data-target="#role-2" data-toggle="tab">企业商户</a></li>
                    </ul>
        </div>
        
        <div class="panel-body tab-content">
        	        	<div class="tab-pane active" id="role-1">
        		<form class="form-horizontal role-form" method="post"
	action="/seller/saveinfo" enctype="multipart/form-data">
	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div
				class="alert  alert-info">
				<p>
                    
				
				
				<div>
					<strong>您需要在这里完善商务的资料, 才能继续进行商务操作。</strong>
				</div>
				<small>请确保资料真实有效，如发现资料不实或联系方式无效将严肃处理！</small>
                  </p>
			</div>
		</div>
	</div>
	<div
		class="form-group">
		<label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">零购网账号
			<font class="color-red">*</font>
		</label>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        	<input type="text" class="form-control"
				value="wx1393172"
				disabled="disabled">
          <span class="color-777">请填写你的零购网会员ID（在用户中心可以找到），用户下单和付款结算等将会用到</span>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<p class="help-block hide"></p>
		</div>
	</div>

	<div class="form-group fzname">
		<label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">商户姓名 <font
			class="color-red">*</font></label>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<input type="text" class="form-control" id="name" name="name"
				value="宋雷">
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<p class="help-block hide"></p>
		</div>
	</div>
    <div class="form-group">
		<label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">商户简介
			<font class="color-red">*</font>
		</label>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<textarea class="form-control" id="about" name="about" rows="6">我是深圳市手机配件工厂，钢化膜   手机支架 ，保护套</textarea>
			<span class="color-777">经营范围，主营商品等商户介绍. </span>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<p class="help-block hide"></p>
		</div>
	</div>
    <div class="form-group">
		<label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">联系手机
			<font class="color-red">*</font>
		</label>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<input type="text" class="form-control" id="mobile" name="mobile"
				value="13556869386">
			<span class="color-777">此号码作为唯一提现短信验证手机号，请确保号码真实有效！</span>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<p class="help-block hide"></p>
		</div>
	</div>
	<div class="form-group">
		<label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">售后电话 <font class="color-red">*</font></label>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<input type="text" class="form-control" id="telphone" name="telphone"
				value="075522318908">
				<span class="color-777">买家可以通过此号码联系卖家,请确保号码真实有效！</span>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
		  <p class="help-block hide"></p>
		</div>
		<!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" >添加售后电话</button>-->
	</div>
	<!--<div class="form-group">
		<label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label"></font></label>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					</div>
	</div>-->
	<div class="form-group frdb">
		<label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">身份证号码 <font
			class="color-red">*</font></label>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<input type="text" class="form-control" id="idcard_number"
				name="idcard_number"
				value="230105196505071013">
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<p class="help-block hide"></p>
		</div>
	</div>
	<div class="form-group frzj">
		<label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">身份证拍照 <font
			class="color-red">*</font></label>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <a href="http://p3.0gow.com/pic0gow_56fe8a7bab4cd?imageMogr2/thumbnail/2048x/strip/quality/75/format/jpg"
				target="_blank"><img src="http://p3.0gow.com/pic0gow_56fe8a7bab4cd?imageMogr2/thumbnail/2048x/strip/quality/75/format/jpg"
				height="150" class="seller-pic" /></a><br /> <br />
            <div class="input-group">
				<input type="text" class="form-control" id="frzj"> <span
					class="input-group-btn"> <a class="btn btn-default">上传</a>
				</span>
			</div>
			<input type="file" class="form-control hide" id="idcard_front"
				name="idcard_front"> <span class="color-777">点击上传身份证正面照</span>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<p class="help-block hide"></p>
		</div>
	</div>
	<div class="form-group frzj2">
		<label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label"></label>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <a href="http://p3.0gow.com/pic0gow_56fe8a7bba89d?imageMogr2/thumbnail/2048x/strip/quality/75/format/jpg" target="_blank"><img
				src="http://p3.0gow.com/pic0gow_56fe8a7bba89d?imageMogr2/thumbnail/2048x/strip/quality/75/format/jpg" height="150"
				class="seller-pic" /></a><br /> <br />
            <div class="input-group">
				<input type="text" class="form-control" id="frzj2"> <span
					class="input-group-btn"> <a class="btn btn-default">上传</a>
				</span>
			</div>
			<input type="file" id="idcard_back" class="form-control hide"
				name="idcard_back"> <span class="color-777">点击上传身份证背面照</span>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<p class="help-block hide"></p>
		</div>
	</div>
	<div class="form-group">
		<label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">日常生活照 <font
			class="color-red">*</font></label>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <a href="http://p3.0gow.com/pic0gow_56fe8a7b9abe6?imageMogr2/thumbnail/2048x/strip/quality/75/format/jpg" target="_blank"><img
				src="http://p3.0gow.com/pic0gow_56fe8a7b9abe6?imageMogr2/thumbnail/2048x/strip/quality/75/format/jpg" height="150"
				class="seller-pic" /></a><br /> <br />
            <div class="input-group">
				<input type="text" class="form-control" id="rcsh"> <span
					class="input-group-btn"> <a class="btn btn-default">上传</a>
				</span>
			</div>
			<input type="file" class="form-control hide" id="photo" name="photo">
			<span class="color-777">点击上传日常生活照</span>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<p class="help-block hide"></p>
		</div>
	</div>

	<div class="form-group">
		<label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">常用邮箱
			<font class="color-red">*</font>
		</label>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<input type="text" class="form-control" id="email" name="email"
				value="411397878@QQ.com">
			<span class="color-777">请如实填写，我们将会通过此邮箱与您联系。</span>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<p class="help-block hide"></p>
		</div>
	</div>
    <div class="form-group">
		<label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">常用QQ <font
			class="color-red">*</font></label>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<input type="text" class="form-control" id="qq" name="qq"
				value="411397878">
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<p class="help-block hide"></p>
		</div>
	</div>
	<div class="form-group">
		<label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">售前QQ
			<font class="color-red">*</font>
		</label>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<input type="text" class="form-control" id="presale_qq"
				name="presale_qq"
				value="411397878">
			<p class="color-999">
				<small>必须真实有效QQ号码， 务必参照<a
					href="http://www.54kefu.net/linshi/201202/391.html" target="_blank">http://www.54kefu.net/linshi/201202/391.html</a>进行相应设置。
				</small>
			</p>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<p class="help-block hide"></p>
		</div>
		<!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#preqq" >添加</button>-->
	</div>
	  <!--<div class="form-group">
		  <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">
		  </label>
		  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			  		  </div>
	  </div>-->
	<div class="form-group">
		<label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">售后QQ
			<font class="color-red">*</font>
		</label>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<input type="text" class="form-control" id="aftersale_qq"
				name="aftersale_qq"
				value="411397878">
			<p class="color-999">
				<small>必须真实有效QQ号码， 务必参照<a
					href="http://www.54kefu.net/linshi/201202/391.html" target="_blank">http://www.54kefu.net/linshi/201202/391.html</a>进行相应设置。
				</small>
			</p>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<p class="help-block hide"></p>
		</div>
		<!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#serqq" >添加</button>-->
	</div>
	  <!--<div class="form-group">
		  <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">
		  </label>
		  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			  		  </div>
	  </div>-->
    <div class="form-group">
		<label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">联系地址
			<font class="color-red">*</font>
		</label>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<input type="text" class="form-control" id="address" name="address"
				value="深圳市罗湖区双城世纪a1912">
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<p class="help-block hide"></p>
		</div>
	</div>
	<div class="form-group">
		<label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">紧急联系人姓名
			<font class="color-red">*</font>
		</label>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<input type="text" class="form-control" id="emergency_name"
				name="emergency_name"
				value="静君">
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<p class="help-block hide"></p>
		</div>
	</div>
	<div class="form-group">
		<label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">紧急联系人手机
			<font class="color-red">*</font>
		</label>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<input type="text" class="form-control" id="emergency_mobile"
				name="emergency_mobile"
				value="13923741548">
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<p class="help-block hide"></p>
		</div>
	</div>
	<div class="form-group">
		<label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">紧急联系人电话</label>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<input type="text" class="form-control" id="emergency_tel"
				name="emergency_tel"
				value="075522318908">
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
	</div>
    <hr />
	<div class="form-group">
		<label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">用户购买通知</label>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<label class="radio-inline"> <input type="radio" name="notice"
				value="1"
				 checked="checked">
				开启通知
			</label> <label class="radio-inline"> <input type="radio"
				name="notice" value="0"
				>
				关闭通知
			</label>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<p class="help-block hide"></p>
		</div>
	</div>
	<div class="form-group">
		<label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">备注</label>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<textarea class="form-control" id="remark" name="remark" rows="3">质量保证
追求永久的商誉


</textarea>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
	</div>
	<div class="form-group">
		<label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label"></label>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<input type="hidden" name="state"
				value="1">
			<input type="hidden" name="role" value="1"> <input
				type="hidden" name="seller_id"
				value="3369">
			<button type="submit" class="btn btn-lg btn-info">提交</button>
		</div>
	</div>
</form>
<!--<div class="modal fade" id="exampleModal">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="/seller/save" method="post">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="exampleModalLabel">添加售后电话</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="recipient-name" class="control-label">售后电话:</label>
						<input type="text" class="form-control" id="phone" name="phone">
					</div>
					<input type="hidden" name="seller_id" value="3369"/>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">返回</button>
					<button type="submit" class="btn btn-primary">确定</button>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="modal fade" id="preqq">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="/seller/save" method="post">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="exampleModalLabel">添加售前QQ或售后QQ</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="recipient-name" class="control-label">售前QQ:</label>
						<input type="text" class="form-control" id="preqq" name="preqq">
					</div>
					<input type="hidden" name="seller_id" value="3369"/>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">返回</button>
					<button type="submit" class="btn btn-primary">确定</button>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="modal fade" id="serqq">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="/seller/save" method="post">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="exampleModalLabel">添加售后QQ</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="recipient-name" class="control-label">售后QQ:</label>
						<input type="text" class="form-control" id="serqq" name="serqq">
					</div>
					<input type="hidden" name="seller_id" value="3369"/>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">返回</button>
					<button type="submit" class="btn btn-primary">确定</button>
				</div>
			</form>
		</div>
	</div>
</div>-->        	</div>
        	
        	<div class="tab-pane" id="role-2">
        		<form class="form-horizontal role-form" method="post"
	action="/seller/saveinfo" enctype="multipart/form-data">
	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div
				class="alert  alert-info">
				<p>
                    
				
				
				<div>
					<strong>您需要在这里完善商务的资料, 才能继续进行商务操作。</strong>
				</div>
				<small>请确保资料真实有效，如发现资料不实或联系方式无效将严肃处理！</small>
                  </p>
			</div>
		</div>
	</div>
	<div
		class="form-group">
		<label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">零购网账号
			<font class="color-red">*</font>
		</label>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        	<input type="text" class="form-control"
				value="wx1393172"
				disabled="disabled">
          <span class="color-777">请填写你的零购网会员ID（在用户中心可以找到），用户下单和付款结算等将会用到</span>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<p class="help-block hide"></p>
		</div>
	</div>

	<div class="form-group fzname">
		<label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">负责人姓名 <font
			class="color-red">*</font></label>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<input type="text" class="form-control" id="name" name="name"
				value="宋雷">
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<p class="help-block hide"></p>
		</div>
	</div>
    <div class="form-group">
		<label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">商户简介
			<font class="color-red">*</font>
		</label>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<textarea class="form-control" id="about" name="about" rows="6">我是深圳市手机配件工厂，钢化膜   手机支架 ，保护套</textarea>
			<span class="color-777">经营范围，主营商品等商户介绍. </span>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<p class="help-block hide"></p>
		</div>
	</div>
    <div class="form-group">
		<label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">联系手机
			<font class="color-red">*</font>
		</label>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<input type="text" class="form-control" id="mobile" name="mobile"
				value="13556869386">
			<span class="color-777">此号码作为唯一提现短信验证手机号，请确保号码真实有效！</span>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<p class="help-block hide"></p>
		</div>
	</div>
	<div class="form-group">
		<label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">售后电话 <font class="color-red">*</font></label>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<input type="text" class="form-control" id="telphone" name="telphone"
				value="075522318908">
				<span class="color-777">买家可以通过此号码联系卖家,请确保号码真实有效！</span>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
		  <p class="help-block hide"></p>
		</div>
		<!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" >添加售后电话</button>-->
	</div>
	<!--<div class="form-group">
		<label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label"></font></label>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					</div>
	</div>-->
	<div class="form-group frdb">
		<label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">法定代表人身份证号码 <font
			class="color-red">*</font></label>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<input type="text" class="form-control" id="idcard_number"
				name="idcard_number"
				value="230105196505071013">
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<p class="help-block hide"></p>
		</div>
	</div>
	<div class="form-group frzj">
		<label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">法定代表人身份证拍照 <font
			class="color-red">*</font></label>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <a href="http://p3.0gow.com/pic0gow_56fe8a7bab4cd?imageMogr2/thumbnail/2048x/strip/quality/75/format/jpg"
				target="_blank"><img src="http://p3.0gow.com/pic0gow_56fe8a7bab4cd?imageMogr2/thumbnail/2048x/strip/quality/75/format/jpg"
				height="150" class="seller-pic" /></a><br /> <br />
            <div class="input-group">
				<input type="text" class="form-control" id="frzj"> <span
					class="input-group-btn"> <a class="btn btn-default">上传</a>
				</span>
			</div>
			<input type="file" class="form-control hide" id="idcard_front"
				name="idcard_front"> <span class="color-777">点击上传身份证正面照</span>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<p class="help-block hide"></p>
		</div>
	</div>
	<div class="form-group frzj2">
		<label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label"></label>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <a href="http://p3.0gow.com/pic0gow_56fe8a7bba89d?imageMogr2/thumbnail/2048x/strip/quality/75/format/jpg" target="_blank"><img
				src="http://p3.0gow.com/pic0gow_56fe8a7bba89d?imageMogr2/thumbnail/2048x/strip/quality/75/format/jpg" height="150"
				class="seller-pic" /></a><br /> <br />
            <div class="input-group">
				<input type="text" class="form-control" id="frzj2"> <span
					class="input-group-btn"> <a class="btn btn-default">上传</a>
				</span>
			</div>
			<input type="file" id="idcard_back" class="form-control hide"
				name="idcard_back"> <span class="color-777">点击上传身份证背面照</span>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<p class="help-block hide"></p>
		</div>
	</div>
	<div class="form-group">
		<label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">法定代表人日常生活照 <font
			class="color-red">*</font></label>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <a href="http://p3.0gow.com/pic0gow_56fe8a7b9abe6?imageMogr2/thumbnail/2048x/strip/quality/75/format/jpg" target="_blank"><img
				src="http://p3.0gow.com/pic0gow_56fe8a7b9abe6?imageMogr2/thumbnail/2048x/strip/quality/75/format/jpg" height="150"
				class="seller-pic" /></a><br /> <br />
            <div class="input-group">
				<input type="text" class="form-control" id="rcsh"> <span
					class="input-group-btn"> <a class="btn btn-default">上传</a>
				</span>
			</div>
			<input type="file" class="form-control hide" id="photo" name="photo">
			<span class="color-777">点击上传日常生活照</span>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<p class="help-block hide"></p>
		</div>
	</div>

	<div class="form-group">
		<label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">常用邮箱
			<font class="color-red">*</font>
		</label>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<input type="text" class="form-control" id="email" name="email"
				value="411397878@QQ.com">
			<span class="color-777">请如实填写，我们将会通过此邮箱与您联系。</span>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<p class="help-block hide"></p>
		</div>
	</div>
    <div class="form-group">
		<label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">联系人QQ <font
			class="color-red">*</font></label>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<input type="text" class="form-control" id="qq" name="qq"
				value="411397878">
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<p class="help-block hide"></p>
		</div>
	</div>
	<div class="form-group">
		<label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">售前QQ
			<font class="color-red">*</font>
		</label>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<input type="text" class="form-control" id="presale_qq"
				name="presale_qq"
				value="411397878">
			<p class="color-999">
				<small>必须真实有效QQ号码， 务必参照<a
					href="http://www.54kefu.net/linshi/201202/391.html" target="_blank">http://www.54kefu.net/linshi/201202/391.html</a>进行相应设置。
				</small>
			</p>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<p class="help-block hide"></p>
		</div>
		<!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#preqq" >添加</button>-->
	</div>
	  <!--<div class="form-group">
		  <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">
		  </label>
		  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			  		  </div>
	  </div>-->
	<div class="form-group">
		<label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">售后QQ
			<font class="color-red">*</font>
		</label>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<input type="text" class="form-control" id="aftersale_qq"
				name="aftersale_qq"
				value="411397878">
			<p class="color-999">
				<small>必须真实有效QQ号码， 务必参照<a
					href="http://www.54kefu.net/linshi/201202/391.html" target="_blank">http://www.54kefu.net/linshi/201202/391.html</a>进行相应设置。
				</small>
			</p>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<p class="help-block hide"></p>
		</div>
		<!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#serqq" >添加</button>-->
	</div>
	  <!--<div class="form-group">
		  <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">
		  </label>
		  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			  		  </div>
	  </div>-->
    <div class="form-group">
		<label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">联系地址
			<font class="color-red">*</font>
		</label>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<input type="text" class="form-control" id="address" name="address"
				value="深圳市罗湖区双城世纪a1912">
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<p class="help-block hide"></p>
		</div>
	</div>
	<div class="form-group">
		<label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">紧急联系人姓名
			<font class="color-red">*</font>
		</label>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<input type="text" class="form-control" id="emergency_name"
				name="emergency_name"
				value="静君">
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<p class="help-block hide"></p>
		</div>
	</div>
	<div class="form-group">
		<label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">紧急联系人手机
			<font class="color-red">*</font>
		</label>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<input type="text" class="form-control" id="emergency_mobile"
				name="emergency_mobile"
				value="13923741548">
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<p class="help-block hide"></p>
		</div>
	</div>
	<div class="form-group">
		<label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">紧急联系人电话</label>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<input type="text" class="form-control" id="emergency_tel"
				name="emergency_tel"
				value="075522318908">
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
	</div>
    <hr />
	<div class="form-group qymc">
		<label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">企业名称
			<font class="color-red">*</font>
		</label>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<input type="text" class="form-control" id="company_name"
				name="company_name"
				value="">
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<p class="help-block hide"></p>
		</div>
	</div>
	<div class="form-group">
		<label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">负责人职位
			<font class="color-red">*</font>
		</label>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<input type="text" class="form-control" id="job" name="job"
				value="">
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<p class="help-block hide"></p>
		</div>
	</div>
	<div class="form-group">
		<label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">营业执照号码
			<font class="color-red">*</font>
		</label>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<input type="text" class="form-control" id="licence_number" name="licence_number"
				value="">
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<p class="help-block hide"></p>
		</div>
	</div>


	<div class="form-group">
		<label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">营业执照
			<font class="color-red">*</font>
		</label>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="input-group yxzz">
				<input type="text" class="form-control" id="yyzz"> <span
					class="input-group-btn"> <a class="btn btn-default">上传</a>
				</span>
			</div>
			<input type="file" class="form-control hide" id="licence"
				name="licence"> <span class="color-777 yxzz">点击上传营业执照</span>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<p class="help-block hide"></p>
		</div>
	</div>
	<div class="form-group">
		  <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">组织机构代码证号码

		  </label>
		  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			  <input type="text" class="form-control" id="organization_number" name="organization_number"
					 value="">
		  </div>
		  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">

		  </div>
	</div>
	<div class="form-group">
		<label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">组织机构代码照片

		</label>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="input-group zhdm">
				<input type="text" class="form-control" id="zzjg"> <span
					class="input-group-btn"> <a class="btn btn-default">上传</a>
				</span>
			</div>
			<input type="file" class="form-control hide" id="organization"
				name="organization"> <span class="color-777 zhdm">点击上传组织机构代码照片</span>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">

		</div>
	</div>
	  <div class="form-group">
		  <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">税务登记证号码

		  </label>
		  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			  <input type="text" class="form-control" id="tax_number" name="tax_number"
					 value="">
		  </div>
		  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">

		  </div>
	  </div>
	  <div class="form-group">
		  <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">税务登记证照片
		  </label>
		  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			  			  <div class="input-group zhdm">
				  <input type="text" class="form-control" id="swdj"> <span
					  class="input-group-btn"> <a class="btn btn-default">上传</a>
				</span>
			  </div>
			  <input type="file" class="form-control hide" id="tax"
					 name="tax"> <span class="color-777 zhdm">点击上传税务登记证照片</span>
		  </div>
		  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">

		  </div>
	  </div>
	  <div class="form-group">
		  <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">商标注册证或代理授权书号码
			  <font class="color-red">*</font>
		  </label>
		  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			  <input type="text" class="form-control" id="trademark_number" name="trademark_number"
					 value="">
		  </div>
		  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			  <p class="help-block hide"></p>
		  </div>
	  </div>
	<div class="form-group">
		<label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">商标注册证或代理授权书照片
			<font class="color-red">*</font>
		</label>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="input-group sbsl">
				<input type="text" class="form-control" id="sbzc"> <span
					class="input-group-btn"> <a class="btn btn-default">上传</a>
				</span>
			</div>
			<input type="file" class="form-control hide" id="trademark"
				name="trademark"> <span class="color-777 sbsl">点击上传商标注册证或申请受理通知书照片</span>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<p class="help-block hide"></p>
		</div>
	</div>
    <hr />
	<div class="form-group">
		<label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">用户购买通知</label>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<label class="radio-inline"> <input type="radio" name="notice"
				value="1"
				 checked="checked">
				开启通知
			</label> <label class="radio-inline"> <input type="radio"
				name="notice" value="0"
				>
				关闭通知
			</label>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<p class="help-block hide"></p>
		</div>
	</div>
	<div class="form-group">
		<label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">备注</label>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<textarea class="form-control" id="remark" name="remark" rows="3">质量保证
追求永久的商誉


</textarea>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
	</div>
	<div class="form-group">
		<label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label"></label>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<input type="hidden" name="state"
				value="1">
			<input type="hidden" name="role" value="2"> <input
				type="hidden" name="seller_id"
				value="3369">
			<button type="submit" class="btn btn-lg btn-info">提交</button>
		</div>
	</div>
</form>
<!--<div class="modal fade" id="exampleModal">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="/seller/save" method="post">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="exampleModalLabel">添加售后电话</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="recipient-name" class="control-label">售后电话:</label>
						<input type="text" class="form-control" id="phone" name="phone">
					</div>
					<input type="hidden" name="seller_id" value="3369"/>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">返回</button>
					<button type="submit" class="btn btn-primary">确定</button>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="modal fade" id="preqq">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="/seller/save" method="post">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="exampleModalLabel">添加售前QQ或售后QQ</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="recipient-name" class="control-label">售前QQ:</label>
						<input type="text" class="form-control" id="preqq" name="preqq">
					</div>
					<input type="hidden" name="seller_id" value="3369"/>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">返回</button>
					<button type="submit" class="btn btn-primary">确定</button>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="modal fade" id="serqq">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="/seller/save" method="post">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="exampleModalLabel">添加售后QQ</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="recipient-name" class="control-label">售后QQ:</label>
						<input type="text" class="form-control" id="serqq" name="serqq">
					</div>
					<input type="hidden" name="seller_id" value="3369"/>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">返回</button>
					<button type="submit" class="btn btn-primary">确定</button>
				</div>
			</form>
		</div>
	</div>
</div>-->        	</div>
        	        </div>
        </div>
</div>
<script>
  var role = 1;
  var state=  1;
  if(state ==1 && role == 1 )
  {
        $('#telphone').attr('disabled','disabled');
            $('#name').attr('disabled','disabled');
            $('#about').attr('disabled','disabled');
            $('#mobile').attr('disabled','disabled');
            $('#idcard_number').attr('disabled','disabled');
            $('#idcard_front').attr('disabled','disabled');
    $('#frzj').attr('disabled','disabled');
            $('#idcard_back').attr('disabled','disabled');
    $('#frzj2').attr('disabled','disabled');
    
        $('#photo').attr('disabled','disabled');
    $('#rcsh').attr('disabled','disabled');
            $('#email').attr('disabled','disabled');
            $('#qq').attr('disabled','disabled');
            $('#presale_qq').attr('disabled','disabled');
            $('#aftersale_qq').attr('disabled','disabled');
            $('#address').attr('disabled','disabled');
            $('#emergency_name').attr('disabled','disabled');
            $('#emergency_mobile').attr('disabled','disabled');
                          }else if(state ==1 && role == 2)
  {
        $('#role-2 #name').attr('disabled','disabled');
            $('#role-2 #about').attr('disabled','disabled');
            $('#role-2 #idcard_number').attr('disabled','disabled');
            $('#role-2 #idcard_front').attr('disabled','disabled');
    $('#role-2 #frzj').attr('disabled','disabled');
            $('#role-2 #frzj2').attr('disabled','disabled');
    $('#role-2 #idcard_back').attr('disabled','disabled');
            $('#role-2 #rcsh').attr('disabled','disabled');
    $('#role-2 #photo').attr('disabled','disabled');
            $('#role-2 #email').attr('disabled','disabled');
            $('#role-2 #qq').attr('disabled','disabled');
            $('#role-2 #presale_qq').attr('disabled','disabled');
            $('#role-2 #aftersale_qq').attr('disabled','disabled');
            $('#role-2 #address').attr('disabled','disabled');
            $('#role-2 #emergency_name').attr('disabled','disabled');
            $('#role-2 #mobile').attr('disabled','disabled');
            $('#role-2 #telphone').attr('disabled','disabled');
            $('#role-2 #emergency_mobile').attr('disabled','disabled');
                                    
                  }
</script></div>