<div class="container-fluid main-container">
	<?= $this->render('/layouts/menu'); ?>
	<div class="container-fluid">
    <div class="location">
    	您的位置：<a href="/">控制台</a><a href="/order">订单中心</a><a href="javascript:void(0);" class="active">批量发货</a>
    </div>
	<div class="panel panel-default">
  <div class="panel-heading ">
  	<h3 class="panel-title"><i class="fa fa-truck fa-fw"></i>批量发货</h3>
  </div>
  <div class="panel-body">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <form class="deliverForm" enctype="multipart/form-data" method="post" target="deliverFrame">
                <div class="form-group">
    				<input name="file" id="file" type="file" />
    				<p class="help-block">请选择一个批量发货的excel的文件，然后再提交⋯⋯。</p>
				</div>
				<hr />
				<p class="color-red"><strong>批量发货规则：</strong>
				必须正确填写了“快递单号”才会导入并更改订单状态为已发货，没有填写快递单号会自动过滤掉!</p>
				<input type="submit" name="submit" class="btn btn-lg btn-default" value="提交" />
			</form>
			<div class="deliver-wrapper hide">
    			<iframe name="deliverFrame" id="deliverFrame">
    			 
    			</iframe>
    			<button type="button" class="btn btn-lg btn-default">返回</button>
			</div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h4 style="margin-top: 0;">常见问题</h4>
            <h5 class="color-444"><strong>1. 导入需要一个批量发货的excel文件，怎么获取这个文件？</strong></h5>
            <p><small class="color-888">答：在商户后台左侧菜单的 “订单中心” 》“<strong><a href="/order">订单列表</a></strong>”里面可以将订单导出为Excel格式的文件，您可以在这里自由导出订单。</small></p>
            
            <h5 class="color-444"><strong>2. 导出excel文件后，批量发货需要输入什么信息？</strong></h5>
            <p><small class="color-888">答：在我们的导出的excel文件中，打开里面有“<strong class="color-red">快递单号</strong>”。
                                        您可以在<span class="color-444">将正确的快递发货单号填入对应的列里面，和对应的订单号一一对应</span>。然后保存，就可以用于批量发货了……</small></p>
        </div>
    </div>
  
  </div>
</div>
</div>
</div>
