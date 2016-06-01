<div class="container-fluid main-container">
    <?= $this->render('/layouts/menu'); ?>
	<div class="container-fluid profile-wrapper">
    <div class="location">
    	您的位置：<a href="/" class="active">控制台</a>
    </div>
    
    <div class="page-header clearfix">
        <h3 class="pull-left"><i class="fa fa-key fa-fw"></i> 修改提现密码</h3>
    </div>
    <form class="form-horizontal profile-form">
	  <div class="form-group">
	    <label class="col-lg-4 col-md-4 col-sm-3 col-xs-12 control-label"></label>
	    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
	    <div class="alert hide"><p></p></div>
	    </div>
	  </div>
	 <div class="form-group">
	    <label class="col-lg-4 col-md-4 col-sm-3 col-xs-12 control-label">新密码</label>
	    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
	      <input type="password" class="form-control" id="password" name="newpassword">
	    </div>
	    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
			<span class="help-block hide" id="first">密码不能少于6位</span>
	    </div>
	    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
			<p class="help-block miss" style="color:#A94442;"></p>
		</div>
	  </div>
	  <div class="form-group">
	    <label class="col-lg-4 col-md-4 col-sm-3 col-xs-12 control-label">重复密码</label>
	    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
	      <input type="password" class="form-control" id="repassword" name="repassword">
	    </div>
	    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
			<span class="help-block hide" id="two">两次密码必须保持一致</span>
	    </div>
	  </div>
	  <div class="form-group">
			<label class="col-lg-4 col-md-4 col-sm-3 col-xs-12 control-label">短信验证码</label>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<div class="input-group">
                  <input type="text" class="form-control verify" name="verify" placeholder="您的短信验证码">
                  <span class="input-group-btn">
					  <button class="btn btn-default btn-verify" type="button">点击获取验证码</button>
                  </span>
                </div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
				<p class="help-block atation" style="color:#A94442;"></p>
			</div>
		</div>
	  <div class="form-group">
	  	<label class="col-lg-4 col-md-4 col-sm-3 col-xs-12 control-label"></label>
	    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
	      <button type="submit" class="btn btn-lg btn-block btn-info" id="subing">提交</button>
	    </div>
	  </div>
	</form>
</div></div>