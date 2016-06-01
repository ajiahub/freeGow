<div class="container-fluid main-container">
<?= $this->render('/layouts/menu'); ?>
	<div class="container-fluid">
    <div class="location">
    	您的位置：<a href="/">控制台</a><a href="/cash">结算中心</a><a href="javascript:void(0);" class="active">结算流水</a>
    </div>
    
    <div class="page-header clearfix">
        <h1 class="pull-left"><i class="fa fa-list fa-fw"></i> 结算流水</h1>
    </div>
    
    <div class="alert alert-info page-alert">总结算[265]单,当前时间段内已结算金额[5356.00]元 | 总结算金额[87440.00]</div>
    <div class="text-right">
		 <form class="form-inline" action="/cash" method="get">
    		<div class="form-group">
    		  <input type="text" id="starttime" name="starttime" value="2016-04-07 00:00:00" class="form-control input-sm" onFocus="WdatePicker({dateFmt:'yyyy-MM-dd H:m:s'})" />
              <label> 至 </label>
              <input type="text" id="endtime" name="endtime" value="2016-04-10 23:59:59" class="form-control input-sm" onFocus="WdatePicker({dateFmt:'yyyy-MM-dd H:m:s'})" />
            </div>    
    		
            <button type="submit" class="btn btn-default btn-sm">提交</button>
             <div class="form-group">
                 <div class="btn-group btn-group-sm">
                     <button class="btn btn-info" type="button">
                         <i class="fa fa-file-excel-o"></i> 导出为:
                     </button>
                     <button type="submit" name="operate" value="export"
                             class="btn btn-default">标准模版</button>
                 </div>
             </div>
    	</form>
	</div>
	<div class="table-responsive">
	
      <table class="table table-bordered datalist-table">
       <thead>
        <tr class="active">
       			<th width="120">时间</th>
       			<th width="100">支付方式</th>
       			<th width="100">状态</th>
                <th width="200">付款商品</th>
                <th width="140">金额</th>
                
                <th>订单号</th>
                <th>简介</th>
            </tr>
          </thead>
        <tbody>
                      <tr>
            <td valign="middle" class="color-777">2016-04-10 15:21:55</td>
            <td valign="middle" class="color-888">卖家账户</td>
            <td valign="middle" class="color-888"><font color="green">已发送</font></td>
            <td valign="middle" class="color-888">极速金属时尚随身U盘16G </td>
            <td valign="middle" class="color-red">+ 20.00￥</td>
            <td valign="middle" class="color-888">20160406707f651dd5d8</td>
            <td valign="middle" class="color-888"></td>
            </tr>
                      <tr>
            <td valign="middle" class="color-777">2016-04-10 13:19:09</td>
            <td valign="middle" class="color-888">卖家账户</td>
            <td valign="middle" class="color-888"><font color="green">已发送</font></td>
            <td valign="middle" class="color-888">极速金属时尚随身U盘16G </td>
            <td valign="middle" class="color-red">-0￥</td>
            <td valign="middle" class="color-888">2016040480fff053c33c</td>
            <td valign="middle" class="color-888"></td>
            </tr>
                      <tr>
            <td valign="middle" class="color-777">2016-04-10 12:00:19</td>
            <td valign="middle" class="color-888">卖家账户</td>
            <td valign="middle" class="color-888"><font color="green">已发送</font></td>
            <td valign="middle" class="color-888">极速金属时尚随身U盘16G </td>
            <td valign="middle" class="color-red">+ 20.00￥</td>
            <td valign="middle" class="color-888">201604021e32ef8efab1</td>
            <td valign="middle" class="color-888"></td>
            </tr>
                      <tr>
            <td valign="middle" class="color-777">2016-04-10 12:00:19</td>
            <td valign="middle" class="color-888">卖家账户</td>
            <td valign="middle" class="color-888"><font color="green">已发送</font></td>
            <td valign="middle" class="color-888">极速金属时尚随身U盘16G </td>
            <td valign="middle" class="color-red">+ 20.00￥</td>
            <td valign="middle" class="color-888">201604024947a468c07d</td>
            <td valign="middle" class="color-888"></td>
            </tr>
                      <tr>
            <td valign="middle" class="color-777">2016-04-10 12:00:19</td>
            <td valign="middle" class="color-888">卖家账户</td>
            <td valign="middle" class="color-888"><font color="green">已发送</font></td>
            <td valign="middle" class="color-888">极速金属时尚随身U盘16G </td>
            <td valign="middle" class="color-red">+ 20.00￥</td>
            <td valign="middle" class="color-888">201604025e05e72641f6</td>
            <td valign="middle" class="color-888"></td>
            </tr>
                      <tr>
            <td valign="middle" class="color-777">2016-04-10 12:00:19</td>
            <td valign="middle" class="color-888">卖家账户</td>
            <td valign="middle" class="color-888"><font color="green">已发送</font></td>
            <td valign="middle" class="color-888">极速金属时尚随身U盘16G </td>
            <td valign="middle" class="color-red">+ 20.00￥</td>
            <td valign="middle" class="color-888">201604028a3e29b4b6c9</td>
            <td valign="middle" class="color-888"></td>
            </tr>
                      <tr>
            <td valign="middle" class="color-777">2016-04-10 12:00:19</td>
            <td valign="middle" class="color-888">卖家账户</td>
            <td valign="middle" class="color-888"><font color="green">已发送</font></td>
            <td valign="middle" class="color-888">极速金属时尚随身U盘16G </td>
            <td valign="middle" class="color-red">+ 20.00￥</td>
            <td valign="middle" class="color-888">201604029978a8e6eb3b</td>
            <td valign="middle" class="color-888"></td>
            </tr>
                      <tr>
            <td valign="middle" class="color-777">2016-04-10 12:00:19</td>
            <td valign="middle" class="color-888">卖家账户</td>
            <td valign="middle" class="color-888"><font color="green">已发送</font></td>
            <td valign="middle" class="color-888">极速金属时尚随身U盘16G </td>
            <td valign="middle" class="color-red">+ 20.00￥</td>
            <td valign="middle" class="color-888">201604029d37e8248ff3</td>
            <td valign="middle" class="color-888"></td>
            </tr>
                      <tr>
            <td valign="middle" class="color-777">2016-04-10 12:00:19</td>
            <td valign="middle" class="color-888">卖家账户</td>
            <td valign="middle" class="color-888"><font color="green">已发送</font></td>
            <td valign="middle" class="color-888">极速金属时尚随身U盘16G </td>
            <td valign="middle" class="color-red">+ 20.00￥</td>
            <td valign="middle" class="color-888">20160402a2e59483259e</td>
            <td valign="middle" class="color-888"></td>
            </tr>
                      <tr>
            <td valign="middle" class="color-777">2016-04-10 12:00:19</td>
            <td valign="middle" class="color-888">卖家账户</td>
            <td valign="middle" class="color-888"><font color="green">已发送</font></td>
            <td valign="middle" class="color-888">极速金属时尚随身U盘16G </td>
            <td valign="middle" class="color-red">+ 20.00￥</td>
            <td valign="middle" class="color-888">20160402a4bec61cfc1c</td>
            <td valign="middle" class="color-888"></td>
            </tr>
                      <tr>
            <td valign="middle" class="color-777">2016-04-10 12:00:19</td>
            <td valign="middle" class="color-888">卖家账户</td>
            <td valign="middle" class="color-888"><font color="green">已发送</font></td>
            <td valign="middle" class="color-888">极速金属时尚随身U盘16G </td>
            <td valign="middle" class="color-red">+ 20.00￥</td>
            <td valign="middle" class="color-888">20160402a75bb42a0616</td>
            <td valign="middle" class="color-888"></td>
            </tr>
                      <tr>
            <td valign="middle" class="color-777">2016-04-10 12:00:19</td>
            <td valign="middle" class="color-888">卖家账户</td>
            <td valign="middle" class="color-888"><font color="green">已发送</font></td>
            <td valign="middle" class="color-888">极速金属时尚随身U盘16G </td>
            <td valign="middle" class="color-red">+ 20.00￥</td>
            <td valign="middle" class="color-888">20160402a87202283aef</td>
            <td valign="middle" class="color-888"></td>
            </tr>
                      <tr>
            <td valign="middle" class="color-777">2016-04-10 12:00:19</td>
            <td valign="middle" class="color-888">卖家账户</td>
            <td valign="middle" class="color-888"><font color="green">已发送</font></td>
            <td valign="middle" class="color-888">极速金属时尚随身U盘16G </td>
            <td valign="middle" class="color-red">+ 20.00￥</td>
            <td valign="middle" class="color-888">20160402ca50ab6d1ad2</td>
            <td valign="middle" class="color-888"></td>
            </tr>
                      <tr>
            <td valign="middle" class="color-777">2016-04-10 12:00:19</td>
            <td valign="middle" class="color-888">卖家账户</td>
            <td valign="middle" class="color-888"><font color="green">已发送</font></td>
            <td valign="middle" class="color-888">极速金属时尚随身U盘16G </td>
            <td valign="middle" class="color-red">+ 20.00￥</td>
            <td valign="middle" class="color-888">20160402e9c73ef9db81</td>
            <td valign="middle" class="color-888"></td>
            </tr>
                      <tr>
            <td valign="middle" class="color-777">2016-04-10 12:00:19</td>
            <td valign="middle" class="color-888">卖家账户</td>
            <td valign="middle" class="color-888"><font color="green">已发送</font></td>
            <td valign="middle" class="color-888">极速金属时尚随身U盘16G </td>
            <td valign="middle" class="color-red">+ 20.00￥</td>
            <td valign="middle" class="color-888">20160403000eecef9c9f</td>
            <td valign="middle" class="color-888"></td>
            </tr>
                      <tr>
            <td valign="middle" class="color-777">2016-04-10 12:00:19</td>
            <td valign="middle" class="color-888">卖家账户</td>
            <td valign="middle" class="color-888"><font color="green">已发送</font></td>
            <td valign="middle" class="color-888">极速金属时尚随身U盘16G </td>
            <td valign="middle" class="color-red">+ 20.00￥</td>
            <td valign="middle" class="color-888">201604030103f64d9d14</td>
            <td valign="middle" class="color-888"></td>
            </tr>
                      <tr>
            <td valign="middle" class="color-777">2016-04-10 12:00:19</td>
            <td valign="middle" class="color-888">卖家账户</td>
            <td valign="middle" class="color-888"><font color="green">已发送</font></td>
            <td valign="middle" class="color-888">极速金属时尚随身U盘16G </td>
            <td valign="middle" class="color-red">+ 20.00￥</td>
            <td valign="middle" class="color-888">2016040306e5fe69c89c</td>
            <td valign="middle" class="color-888"></td>
            </tr>
                      <tr>
            <td valign="middle" class="color-777">2016-04-10 12:00:19</td>
            <td valign="middle" class="color-888">卖家账户</td>
            <td valign="middle" class="color-888"><font color="green">已发送</font></td>
            <td valign="middle" class="color-888">极速金属时尚随身U盘16G </td>
            <td valign="middle" class="color-red">+ 20.00￥</td>
            <td valign="middle" class="color-888">201604030be0faaebe32</td>
            <td valign="middle" class="color-888"></td>
            </tr>
                      <tr>
            <td valign="middle" class="color-777">2016-04-10 12:00:19</td>
            <td valign="middle" class="color-888">卖家账户</td>
            <td valign="middle" class="color-888"><font color="green">已发送</font></td>
            <td valign="middle" class="color-888">极速金属时尚随身U盘16G </td>
            <td valign="middle" class="color-red">+ 20.00￥</td>
            <td valign="middle" class="color-888">2016040310dd3747a77b</td>
            <td valign="middle" class="color-888"></td>
            </tr>
                      <tr>
            <td valign="middle" class="color-777">2016-04-10 12:00:19</td>
            <td valign="middle" class="color-888">卖家账户</td>
            <td valign="middle" class="color-888"><font color="green">已发送</font></td>
            <td valign="middle" class="color-888">极速金属时尚随身U盘16G </td>
            <td valign="middle" class="color-red">+ 20.00￥</td>
            <td valign="middle" class="color-888">201604031e75b9782f85</td>
            <td valign="middle" class="color-888"></td>
            </tr>
                              
        </tbody>
      </table>
    </div>
	<div class="text-center">
	   <ul class="pagination pagination-sm"><li class="disabled"><a href="/cash/index?starttime=2016-04-07+00%3A00%3A00&endtime=2016-04-10+23%3A59%3A59&p=1">First</a></li><li class="disabled"><a href="/cash/index?starttime=2016-04-07+00%3A00%3A00&endtime=2016-04-10+23%3A59%3A59&p=0">Prev</a></li><li class="active"><a href="/cash/index?starttime=2016-04-07+00%3A00%3A00&endtime=2016-04-10+23%3A59%3A59&p=1">1</a></li><li><a href="/cash/index?starttime=2016-04-07+00%3A00%3A00&endtime=2016-04-10+23%3A59%3A59&p=2">2</a></li><li><a href="/cash/index?starttime=2016-04-07+00%3A00%3A00&endtime=2016-04-10+23%3A59%3A59&p=3">3</a></li><li><a href="/cash/index?starttime=2016-04-07+00%3A00%3A00&endtime=2016-04-10+23%3A59%3A59&p=4">4</a></li><li><a href="/cash/index?starttime=2016-04-07+00%3A00%3A00&endtime=2016-04-10+23%3A59%3A59&p=5">5</a></li><li><a href="/cash/index?starttime=2016-04-07+00%3A00%3A00&endtime=2016-04-10+23%3A59%3A59&p=6">6</a></li><li><a href="/cash/index?starttime=2016-04-07+00%3A00%3A00&endtime=2016-04-10+23%3A59%3A59&p=7">7</a></li><li><a href="/cash/index?starttime=2016-04-07+00%3A00%3A00&endtime=2016-04-10+23%3A59%3A59&p=8">8</a></li><li><a href="/cash/index?starttime=2016-04-07+00%3A00%3A00&endtime=2016-04-10+23%3A59%3A59&p=9">9</a></li><li><a href="/cash/index?starttime=2016-04-07+00%3A00%3A00&endtime=2016-04-10+23%3A59%3A59&p=10">10</a></li><li><a href="/cash/index?starttime=2016-04-07+00%3A00%3A00&endtime=2016-04-10+23%3A59%3A59&p=11">11</a></li><li><a href="/cash/index?starttime=2016-04-07+00%3A00%3A00&endtime=2016-04-10+23%3A59%3A59&p=2">Next</a></li><li><a href="/cash/index?starttime=2016-04-07+00%3A00%3A00&endtime=2016-04-10+23%3A59%3A59&p=14">Last</a></li></ul>	</div>
</div></div>
