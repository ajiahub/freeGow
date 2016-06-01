<div class="container-fluid main-container">
	<?= $this->render('/layouts/menu'); ?>
	<div class="container-fluid profile-wrapper">
    <div class="location">
    	您的位置：<a href="/" class="active">控制台</a>
    </div>
    
    <div class="page-header clearfix">
        <h1 class="pull-left"><i class="fa fa-key fa-fw"></i> 修改密码</h1>
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
			<span class="help-block hide">密码不能少于6位</span>
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="col-lg-4 col-md-4 col-sm-3 col-xs-12 control-label">重复密码</label>
	    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
	      <input type="password" class="form-control" id="repassword" name="repassword">
	    </div>
	    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
			<span class="help-block hide">两次密码必须保持一致</span>
	    </div>
	  </div>
	  <div class="form-group">
	  	<label class="col-lg-4 col-md-4 col-sm-3 col-xs-12 control-label"></label>
	    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
	      <button type="submit" class="btn btn-lg btn-block btn-info">提交</button>
	    </div>
	  </div>
	</form>
</div></div>
