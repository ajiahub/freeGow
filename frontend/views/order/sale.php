<div class="container-fluid main-container">
	<?= $this->render('/layouts/menu'); ?>
	<script type="text/javascript" src="/static/highcharts/js/highcharts.js"></script>
<div class="container-fluid">
    <div class="location">
    	您的位置：<a href="/">控制台</a><a href="/order">订单中心</a><a href="javascript:void(0);" class="active">销量统计</a>
    </div>
    
    <div class="page-header clearfix">
        <h1 class="pull-left"><i class="fa fa-bar-chart fa-fw"></i> 销量统计</h1>
    </div>
    <div class="text-right">
		 <form class="form-inline" action="/order/sale" method="get">
    		
    		<div class="form-group">
    		<input type="text" id="starttime" name="starttime" value="2016-04-03" class="form-control input-sm" onFocus="WdatePicker({dateFmt:'yyyy-MM-dd'})" />
            <label> 至 </label>
            <input type="text" id="endtime" name="endtime" value="2016-04-10" class="form-control input-sm" onFocus="WdatePicker({dateFmt:'yyyy-MM-dd'})" />
            </div>    
    		<div class="form-group">
    		    <label for="exampleInputName2">查询方式</label>
    			<select id="type" name="type" class="form-control">
    				<option value="day" selected>按日查询</option>
    				<option value="week" >按周查询</option>
    				<option value="month" >按月查询</option>
    				<option value="year" >按年查询</option>
    			</select>
    		</div>
            <button type="submit" class="btn btn-default btn-sm">提交</button>
    	</form>
	</div>
	<div class="panel panel-default">
    	<div class="panel-body">
      		<div class="highcharts"></div>
    	  	<script type="text/javascript">
    			$(function () {
    				$('.highcharts').highcharts({
    			        title: {
    			        	text: '2016-04-03到2016-04-10销量曲线图',
    			            x: -20 //center
    			        },
    			        subtitle: {
    			            text: '当前时段总计共生成726单，共计结算金额约为14438.00元',
    			            x: -20
    			        },
    			        xAxis: {
    			            categories: ['2016-04-03','2016-04-04','2016-04-05','2016-04-06','2016-04-07','2016-04-08','2016-04-09','2016-04-10']
    			        },
    			        yAxis: {
    			            title: {
    			                text: ''
    			            },
    			            plotLines: [{
    			                value: 0,
    			                width: 1,
    			                color: '#808080'
    			            }]
    			        },
    			        tooltip: {
    			            valueSuffix: ''
    			        },
    			        legend: {
    			            layout: 'vertical',
    			            align: 'right',
    			            verticalAlign: 'middle',
    			            borderWidth: 0
    			        },
    					credits: {
    						enabled: false
    					},
    			        series: [{
    			            name: '订单量',
    			            data: [117,161,103,101,53,130,51,10]
    			        },{
    			            name: '结算金额',
    			            data: [2460.00,2816.00,2152.00,2054.00,1144.00,2604.00,996.00,212.00]
    			        }]
    			    });
    	    	});
    		</script>
    	</div>
    </div>
    <div class="panel panel-default">
    	<div class="panel-heading panel-heading-nav clearfix">
    		<h4 class="pull-left">数据明细</h4> 
    	</div>
    
    	<div class="panel-body">
    		<table class="table table-hover">
    			<thead>
    				<tr>
    					<th>时间</th>
    					<th width="150">订单量</th>
    					<th width="150">应结算金额</th>
    				</tr>
    			</thead>
    			<tbody>
    				    				<tr>
    					<td>2016-04-03</td>
    					<td>117</td>
    					<td>2460.00</td>
    				</tr>
    				    				<tr>
    					<td>2016-04-04</td>
    					<td>161</td>
    					<td>2816.00</td>
    				</tr>
    				    				<tr>
    					<td>2016-04-05</td>
    					<td>103</td>
    					<td>2152.00</td>
    				</tr>
    				    				<tr>
    					<td>2016-04-06</td>
    					<td>101</td>
    					<td>2054.00</td>
    				</tr>
    				    				<tr>
    					<td>2016-04-07</td>
    					<td>53</td>
    					<td>1144.00</td>
    				</tr>
    				    				<tr>
    					<td>2016-04-08</td>
    					<td>130</td>
    					<td>2604.00</td>
    				</tr>
    				    				<tr>
    					<td>2016-04-09</td>
    					<td>51</td>
    					<td>996.00</td>
    				</tr>
    				    				<tr>
    					<td>2016-04-10</td>
    					<td>10</td>
    					<td>212.00</td>
    				</tr>
    				    				    			</tbody>
    		</table>
    	</div>
    </div>
</div>

</div>
