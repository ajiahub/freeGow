<div class="container-fluid main-container">
	<?= $this->render('/layouts/menu'); ?>
	<script type="text/javascript" src="/static/highcharts/js/highcharts.js"></script>
<div class="container-fluid">
    <div class="location">
    	您的位置：<a href="/">控制台</a><a href="/report">客户举报投诉管理</a><a href="javascript:void(0);" class="active">客户举报投诉统计</a>
    </div>
    
    <div class="page-header clearfix">
        <h1 class="pull-left"><i class="fa fa-area-chart fa-fw"></i> 客户举报投诉统计</h1>
    </div>
    <div class="text-right">
		 <form class="form-inline" action="/report/static" method="get">
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
	<br />
	
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
    			            text: '当前时段总计共生成9条举报投诉（其中有0在申诉，3已经解决）',
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
    			        	name: '价格太高',
    			            data: [0,0,0,0,0,0,0,0]
    			        },{
    			        	name: '质量问题',
    			            data: [0,0,0,0,0,2,0,0]
    			        },{
    			        	name: '物流问题',
    			            data: [0,0,0,0,0,1,0,0]
    			        },{
    			        	name: '服务态度',
    			            data: [0,0,0,0,0,0,0,0]
    			        },{
    			        	name: '其他问题',
    			            data: [0,0,1,0,0,0,0,0]
    			        },{
    			            name: '新举报量',
    			            data: [0,0,1,0,0,3,0,0]
    			        },{
    			        	name: '申诉量',
    			            data: [0,0,0,0,0,0,0,0]
    			        },{
    			        	name: '驳回申诉量',
    			            data: [0,0,1,0,0,0,0,0]
    			        },{
    			        	name: '二次申诉量',
    			            data: [0,0,0,0,0,0,0,0]
    			        },{
    			        	name: '已解决量',
    			            data: [0,0,0,0,0,3,0,0]
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
    					
    					<th>价格太高</th>
    					<th>质量问题</th>
    					<th>物流问题</th>
    					<th>服务态度</th>
    					<th>其他问题</th>
    					<th>新举报量</th>
    					<th>申诉量</th>
    					<th>驳回申诉量</th>
    					<th>二次申诉量</th>
    					<th>已解决量</th>
    				</tr>
    			</thead>
    			<tbody>
    				    				<tr>
    					<td>2016-04-03</td>
    					
    					<td>0</td>
    					<td>0</td>
    					<td>0</td>
    					<td>0</td>
    					<td>0</td>
    					<td>0</td>
    					
    					<td>0</td>
    					<td>0</td>
    					<td>0</td>
    					<td>0</td>
    				</tr>
    				    				<tr>
    					<td>2016-04-04</td>
    					
    					<td>0</td>
    					<td>0</td>
    					<td>0</td>
    					<td>0</td>
    					<td>0</td>
    					<td>0</td>
    					
    					<td>0</td>
    					<td>0</td>
    					<td>0</td>
    					<td>0</td>
    				</tr>
    				    				<tr>
    					<td>2016-04-05</td>
    					
    					<td>0</td>
    					<td>0</td>
    					<td>0</td>
    					<td>0</td>
    					<td>1</td>
    					<td>1</td>
    					
    					<td>0</td>
    					<td>1</td>
    					<td>0</td>
    					<td>0</td>
    				</tr>
    				    				<tr>
    					<td>2016-04-06</td>
    					
    					<td>0</td>
    					<td>0</td>
    					<td>0</td>
    					<td>0</td>
    					<td>0</td>
    					<td>0</td>
    					
    					<td>0</td>
    					<td>0</td>
    					<td>0</td>
    					<td>0</td>
    				</tr>
    				    				<tr>
    					<td>2016-04-07</td>
    					
    					<td>0</td>
    					<td>0</td>
    					<td>0</td>
    					<td>0</td>
    					<td>0</td>
    					<td>0</td>
    					
    					<td>0</td>
    					<td>0</td>
    					<td>0</td>
    					<td>0</td>
    				</tr>
    				    				<tr>
    					<td>2016-04-08</td>
    					
    					<td>0</td>
    					<td>2</td>
    					<td>1</td>
    					<td>0</td>
    					<td>0</td>
    					<td>3</td>
    					
    					<td>0</td>
    					<td>0</td>
    					<td>0</td>
    					<td>3</td>
    				</tr>
    				    				<tr>
    					<td>2016-04-09</td>
    					
    					<td>0</td>
    					<td>0</td>
    					<td>0</td>
    					<td>0</td>
    					<td>0</td>
    					<td>0</td>
    					
    					<td>0</td>
    					<td>0</td>
    					<td>0</td>
    					<td>0</td>
    				</tr>
    				    				<tr>
    					<td>2016-04-10</td>
    					
    					<td>0</td>
    					<td>0</td>
    					<td>0</td>
    					<td>0</td>
    					<td>0</td>
    					<td>0</td>
    					
    					<td>0</td>
    					<td>0</td>
    					<td>0</td>
    					<td>0</td>
    				</tr>
    				    				    			</tbody>
    		</table>
    	</div>
    </div>
</div>

</div>