<div class="container-fluid main-container">
    <?= $this->render('/layouts/menu'); ?>
	<div class="container-fluid profile-wrapper">
    <div class="location">
    	您的位置：<a href="/" class="active">控制台</a><a href="/seller/bankcard">绑定银行卡</a><a href="javascript:void(0);">添加银行卡</a>
    </div>
    
    <div class="page-header clearfix">
        <h1 class="pull-left"><i class="fa fa-key fa-fw"></i> 添加银行卡</h1>
    </div>
	<div class="alert  alert-info">
		<p>                                请正确填写您的银行卡及相关信息！
          </p>
	</div>
    <form class="form-horizontal bankcard-form" action="/seller/banksave" method="post">
	  <div class="form-group">
	    <label class="col-lg-4 col-md-4 col-sm-3 col-xs-12 control-label">开户城市</label>
	    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
	      <input type="text" class="form-control" id="province_city" name="province_city">
	    </div>
	    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
	       <p class="help-block hide"></p>
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="col-lg-4 col-md-4 col-sm-3 col-xs-12 control-label">银行名称</label>
	    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
	    	<select class="form-control input-sm" name="bank_name">
                    <option value="">请选择</option>
                                        <option value="中国工商银行" >中国工商银行</option>
                                        <option value="招商银行" >招商银行</option>
                                        <option value="中国建设银行" >中国建设银行</option>
                                        <option value="中国农业银行" >中国农业银行</option>
                                        <option value="中国银行" >中国银行</option>
                                        <option value="上海浦东发展银行" >上海浦东发展银行</option>
                                        <option value="交通银行" >交通银行</option>
                                        <option value="中国民生银行" >中国民生银行</option>
                                        <option value="深圳发展银行" >深圳发展银行</option>
                                        <option value="广东发展银行" >广东发展银行</option>
                                        <option value="中信银行" >中信银行</option>
                                        <option value="华夏银行" >华夏银行</option>
                                        <option value="兴业银行" >兴业银行</option>
                                        <option value="广州市农村信用合作社" >广州市农村信用合作社</option>
                                        <option value="广州市商业银行" >广州市商业银行</option>
                                        <option value="上海农村商业银行" >上海农村商业银行</option>
                                        <option value="中国邮政储蓄" >中国邮政储蓄</option>
                                        <option value="中国光大银行" >中国光大银行</option>
                                        <option value="上海银行" >上海银行</option>
                                        <option value="北京银行" >北京银行</option>
                                        <option value="渤海银行" >渤海银行</option>
                                        <option value="北京农村商业银行" >北京农村商业银行</option>
                                      </select>
	    </div>
	    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
	       <p class="help-block hide"></p>
	    </div>
	  </div>
	   <div class="form-group">
	    <label class="col-lg-4 col-md-4 col-sm-3 col-xs-12 control-label">开户行</label>
	    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
	      <input type="text" class="form-control" id="kaihuhang" name="kaihuhang">
	    </div>
	    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
	       <p class="help-block hide"></p>
	    </div>
	  </div>
	 <div class="form-group">
	    <label class="col-lg-4 col-md-4 col-sm-3 col-xs-12 control-label">开户名</label>
	    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
	      <input type="text" class="form-control" id="bank_account_name" name="bank_account_name">
	    </div>
	    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
	       <p class="help-block hide"></p>
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="col-lg-4 col-md-4 col-sm-3 col-xs-12 control-label">卡号</label>
	    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
	      <input type="text" class="form-control" id="bank_account_no" name="bank_account_no">
	    </div>
	    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
	       <p class="help-block hide"></p>
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