<div class="container-fluid main-container">
	<?= $this->render('/layouts/menu'); ?>
	<script type="text/javascript" src="/static/highcharts/js/highcharts.js"></script>
<div class="container-fluid">
	<div class="location">
		您的位置：<a href="/">控制台</a><a href="/report">客户举报投诉管理</a><a
			href="javascript:void(0);" class="active">客户举报投诉结构图</a>
	</div>

	<div class="page-header clearfix">
		<h1 class="pull-left">
			<i class="fa fa-pie-chart fa-fw"></i> 客户举报投诉结构图
		</h1>
	</div>
	<div class="text-right">
		<form class="form-inline" action="/report/chart" method="get">
			<div class="form-group">
				<input type="text" id="starttime" name="starttime"
					value="2016-04-03"
					class="form-control input-sm"
					onFocus="WdatePicker({dateFmt:'yyyy-MM-dd'})" /> <label> 至 </label>
				<input type="text" id="endtime" name="endtime"
					value="2016-04-10"
					class="form-control input-sm"
					onFocus="WdatePicker({dateFmt:'yyyy-MM-dd'})" />
			</div>
			<button type="submit" class="btn btn-default btn-sm">提交</button>
		</form>
	</div>
	<div class="site-alert alert hide"></div>
<script type="text/javascript">
var note = '请及时关注您的客户举报投诉结构，仔细分析并找出原因。然后切实做出改善或提升…';
jQuery(function (){
				showAlertMsg('请及时关注您的客户举报投诉结构，仔细分析并找出原因。然后切实做出改善或提升…', 'info', null);
	});

/**
 * 显示操作成功信息
 */
function showAlertMsg(msg, type, note)
{
	if(!msg || !type || msg == '' || type == '')	return false;

	if(type != 'success' && type != 'info' && type != 'danger')		type = 'info';
	jQuery("html,body").animate({scrollTop: jQuery("#top").offset().top}, 1000);
	
	jQuery('.site-alert').removeClass('alert-success alert-info alert-danger').addClass('alert-'+type).html('<i class="fa fa-exclamation-circle fa-lg"></i> '+msg).removeClass('hide').show();

	if(type !== 'info')
	{
		setTimeout
		(
			function(){				
				if(note !== '' && note !== null)
				{
					jQuery('.site-alert').removeClass('alert-'+type).addClass('alert-info').html(note).removeClass('hide').show();
					
				}
				else
				{
					jQuery('.site-alert').removeClass('alert-'+type).html('').addClass('hide').fadeOut(1000);
				}
			}, 6000
		);
	}
}
</script>	<div class="panel panel-default">
		<div class="panel-body">
			<div class="highcharts"></div>
			<script type="text/javascript">
    	  	$(function () {
				$('.highcharts').highcharts({
			        chart: {
			            plotBackgroundColor: null,
			            plotBorderWidth: null,
			            plotShadow: false
			        },
			        title: {
			            text: '2016-04-03到2016-04-10客户举报投诉结构图'
			        },
			        subtitle: {
			            text: '当前时段总计被投诉9次',
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
			            name: '占比',
			            data:  [
					        ["价格太高",0],
					        ["质量问题",5],
					        ["物流问题",2],
					        ["服务态度",0],
					        ["其他问题",2],

					        ]
			        }]
			    });
	    });
    		</script>
		</div>
	</div>

</div>
</div>