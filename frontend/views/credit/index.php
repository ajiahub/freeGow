<div class="container-fluid main-container">
	<?= $this->render('/layouts/menu'); ?>
	<div class="container-fluid">
    <div class="location">
    	您的位置：<a href="/">控制台</a><a href="/积分">商户积分</a><a href="javascript:void(0);" class="active">商户积分明细</a>
    </div>
    
    <div class="page-header clearfix">
        <h1 class="pull-left"><i class="fa fa-clone fa-fw"></i> 商户积分明细</h1>
    </div>
    <div class="alert alert-info page-alert">尊敬的商户，您当前商户积分为0.5分。</div>
	<div class="table-responsive">	
      <table class="table table-bordered datalist-table">
       <thead>
        <tr class="active">
       			<th width="60">序号</th>
       			<th width="100">积分</th>
       			<th>原因</th>
       			<th width="100">操作</th>
                <th width="160">时间</th>
            </tr>
          </thead>
        <tbody>
                      <tr>
            <td valign="middle" width="60" class="color-777">1</td>
            <td valign="middle" class="color-777">0.5</td>
 			<td valign="middle" class="color-777">秒杀</td>
 			<td valign="middle" class="color-777">张霞霞</td>
            <td valign="middle" class="color-888">2016-04-07 16:41:03</td>
            </tr>
                              
        </tbody>
      </table>
    </div>
	<div class="text-center">
	   <ul class="pagination pagination-sm"><li class="disabled"><a href="/jifen/index?p=1">First</a></li><li class="disabled"><a href="/jifen/index?p=0">Prev</a></li><li class="active"><a href="/jifen/index?p=1">1</a></li><li class="disabled"><a href="/jifen/index?p=2">Next</a></li><li class="disabled"><a href="/jifen/index?p=1">Last</a></li></ul>	</div>
</div></div>