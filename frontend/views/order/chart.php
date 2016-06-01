<div class="container-fluid main-container">
	<?= $this->render('/layouts/menu'); ?>
	<script type="text/javascript" src="/static/highcharts/js/highcharts.js"></script>
<div class="container-fluid">
    <div class="location">
    	您的位置：<a href="/">控制台</a><a href="/order">订单中心</a><a href="javascript:void(0);" class="active">报表查询</a>
    </div>
    
    <div class="page-header clearfix">
        <h1 class="pull-left"><i class="fa fa-pie-chart fa-fw"></i> 报表查询</h1>
    </div>
    <div class="text-right">
		 <form class="form-inline" action="/order/chart" method="get">
    		<div class="form-group">
		    <label for="exampleInputName2">查询方式</label>
			<select id="type" name="type" class="form-control">
				<optgroup label="付费/非付费">
					<option value="pay" selected>按付费/非付费查询</option>
				</optgroup>
			</select>
			</div>
    		<div class="form-group">
    		<input type="text" id="starttime" name="starttime" value="2016-04-03 00:00:00" class="form-control input-sm" onFocus="WdatePicker({dateFmt:'yyyy-MM-dd H:m:s'})" />
                           &nbsp;至&nbsp;
                           <input type="text" id="endtime" name="endtime" value="2016-04-10 23:59:59" class="form-control input-sm" onFocus="WdatePicker({dateFmt:'yyyy-MM-dd H:m:s'})" />
            </div>    
    		
            <button type="submit" class="btn btn-default btn-sm">提交</button>
    	</form>
	</div>
	<br />
	
	
	
	<div class="panel panel-default">
  <div class="panel-heading panel-heading-nav clearfix">
  	下载饼图
  </div>
  
  <div class="panel-body">
	<div class="highcharts" style="min-width: 310px; height: 400px; width:720px; max-width: 720px; float:left;">
	
	</div>
    <div style="float:left;">
	<table class="table table-hover">
  					<thead>
  						<tr>
  							<th>名称</th>
  							<th>下单量</th>
  							<th>下单比例</th>
  						</tr>
  					</thead>
  					<tbody>
  					  						<tr>
  							<td>付费</td>
  							<td>726</td>
  							<td>49.29%</td>
  						</tr>
  						  						<tr>
  							<td>不付费</td>
  							<td>747</td>
  							<td>50.71%</td>
  						</tr>
  						  						<tr>
  							<td>合计:</td>
  							<td>1473</td>
  							<td></td>
  						</tr>	
  					</tbody>
				</table>
		
        </div>
	</div>
</div>
	
	
	
	
</div>

<script type="text/javascript">
			$(function () {
				$('.highcharts').highcharts({
			        chart: {
			            plotBackgroundColor: null,
			            plotBorderWidth: null,
			            plotShadow: false
			        },
			        title: {
			            text: '04-03到04-10下单数饼图'
			        },
			        subtitle: {
			            text: '当前时段总计共下单1473次',
			            x: -20
			        },
			        tooltip: {
			            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
			        },
			        plotOptions: {
			            pie: {
			                allowPointSelect: true,
			                cursor: 'pointer',
			                dataLabels: {
			                    enabled: true,
			                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
			                    style: {
			                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
			                    }
			                },
			            }
			        },
					credits: {
						enabled: false
					},   
			        series: [{
			            type: 'pie',
			            name: '比例',
			            data:  [
					        ["付费",726],["不付费",747]    
					       
			       				]
			        }]
			    });
	    });
		</script></div>