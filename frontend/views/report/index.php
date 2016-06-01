<div class="container-fluid main-container">
	<?= $this->render('/layouts/menu'); ?>	
	<div class="container-fluid">
  <div class="location"> 您的位置：<a href="/">控制台</a><a href="/repeat">客户举报投诉管理</a><a
			href="javascript:void(0);" class="active">客户举报投诉列表</a> </div>
  <div class="page-header clearfix">
    <h1 class="pull-left"> <i class="fa fa-comments-o fa-fw"></i> 客户投诉列表 </h1>
  </div>
  <div class="text-left">
    <form class="form-inline filter-form" action="/report/index" method="get">
      <div class="form-group">
        <select class="form-control input-sm" name="state" id="state">
          <option value="">全部举报投诉状态</option>
          <option value="0"
						>未处理</option>
          <option value="1" >已申诉</option>
          <option value="2" >已解决</option>
          <option value="3" >驳回申诉</option>
          <option value="4" >二次申诉</option>
        </select>
      </div>
      <div class="form-group">
        <select class="form-control input-sm" name="type" id="type">
          <option value="">全部投诉种类</option>
          <option value="1" >售价太高</option>
          <option value="2" >质量问题</option>
          <option value="3" >物流问题</option>
          <option value="4" >服务态度问题</option>
          <option value="5" >其他问题</option>
        </select>
      </div>
      <div class="form-group">
        <input type="text" class="form-control input-sm" name="uid"
					style="width: 90px;" placeholder="用户id"
					value="">
      </div>
      <div class="form-group">
        <input type="text" class="form-control input-sm" name="name"
					style="width: 90px;" placeholder="用户名/昵称"
					value="">
      </div>
      <div class="form-group">
        <input type="text" class="form-control input-sm" name="g_id"
					style="width: 90px;" placeholder="商品id"
					value="">
      </div>
      <div class="form-group">
        <input type="text" class="form-control input-sm" name="goods_name"
					style="width: 90px;" placeholder="商品名"
					value="">
      </div>
      <div class="form-group">
        <input type="text" class="form-control input-sm" name="order_sn"
					style="width: 90px;" placeholder="订单号"
					value="">
      </div>
      <div class="form-group">
        <input type="text" class="form-control input-sm" name="tel"
					style="width: 90px;" placeholder="订单手机号"
					value="">
      </div>
      <div class="form-group">
        <input type="text" id="starttime" name="starttime"
					value="2016-04-03"
					class="form-control input-sm" style="width: 90px;"
					onFocus="WdatePicker({dateFmt:'yyyy-MM-dd'})" />
        至
        <input
					type="text" id="endtime" name="endtime"
					value="2016-04-10"
					class="form-control input-sm" style="width: 90px;"
					onFocus="WdatePicker({dateFmt:'yyyy-MM-dd'})" />
      </div>
      <div class="form-group">
        <input type="text" class="form-control input-sm" name="content"
					placeholder="搜索…"
					value="">
      </div>
      <button type="submit" class="btn btn-default btn-sm"> <i class="fa fa-arrow-circle-o-right"></i> 提交 </button>
    </form>
  </div>
  <div class="site-alert alert hide"></div>
<script type="text/javascript">
var note = '您需要及时处理您的举报和投诉，提升服务质量！';
jQuery(function (){
				showAlertMsg('您需要及时处理您的举报和投诉，提升服务质量！', 'info', null);
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
</script>  <div class="table-responsive">
    <form class="form-inline orderlist-form" action="/order" method="post">
      <table class="table datalist-table">
        <thead>
          <tr class="active">
            <th width="50">序号</th>
            <th>内容</th>
            <th width="200">订单信息</th>
            <th width="100">用户信息</th>
            <th width="120">商品信息</th>
            <th width="70">状态</th>
            <th width="210">时间</th>
            <th width="75"></th>
          </tr>
        </thead>
        <tbody>
                    <tr>
            <td width="50"><small>78836</small></td>
            <td><small><a
						href="/report/info?id=78836&backurl=%2Freport%2Findex"> <strong>【
                            物流问题
                            】</strong> 快递费太贵，运费不是这么贵</a></small>
                                <div class="clearfix">
                                    <a href="http://7xp28h.com1.z0.glb.clouddn.com/comment0gow_5707a7f23b8cc?imageMogr2/thumbnail/800x/strip/quality/70/format/jpg" target="_blank"><img
										src="http://7xp28h.com1.z0.glb.clouddn.com/comment0gow_5707a7f23b8cc?imageMogr2/thumbnail/160x/strip/quality/70/format/jpg" height="60" /></a>
                                  </div>
                                              <div class="clearfix report-replys replys-well">
                                    <p class="color-666">
                                        商家
                                        回复：亲  谢谢你放映问题  我们会绝决的</p>
                                  </div>
                                          	<div class="color-666"><small>备注：此投诉为无效投诉，客户没有提供关于订单的详细信息！商家以及平台看不到相关的订单，没有办法联系顾客进行处理。麻烦客户在零元购--我的订单（点全部）--点击要投诉的订单详情，下拉至最底部有个“点我举报”。在此举报后就会有相关的订单信息！有任何疑问也可以在我们微信公众号留言哦，谢谢！</small></div>
                          </td>
            <td class="color-777 report-order"></td>
            <td class="color-777"><small>12501672<br />[大城张少]</small></td>
            <td class="color-777"><small>极速金属随身U盘16G</small></td>
            <td class="color-777">                <span
							class="label label-success">已解决</span>
                </td>
            <td class="color-777"><p><small>投诉时间：2016-04-08 20:46:42</small></p>
                        <p><small>解决时间：2016-04-09 14:54:18</small></p>
			</td>
            <td><a
							href="/report/info?id=78836&backurl=%2Freport%2Findex"><i
								class="fa fa-info-circle"></i> 详情</a></td>
          </tr>
                    <tr>
            <td width="50"><small>78703</small></td>
            <td><small><a
						href="/report/info?id=78703&backurl=%2Freport%2Findex"> <strong>【
                            商品质量问题
                            】</strong> U盘没用 又不能退贸</a></small>
                                <div class="clearfix">
                                    <a href="http://7xp28h.com1.z0.glb.clouddn.com/comment0gow_57077d1e80726?imageMogr2/thumbnail/800x/strip/quality/70/format/jpg" target="_blank"><img
										src="http://7xp28h.com1.z0.glb.clouddn.com/comment0gow_57077d1e80726?imageMogr2/thumbnail/160x/strip/quality/70/format/jpg" height="60" /></a>
                                  </div>
                                              <div class="clearfix report-replys replys-well">
                                    <p class="color-666">
                                        商家
                                        回复：亲 可以退</p>
                                  </div>
                                          	<div class="color-666"><small>备注：此投诉为无效投诉，客户没有提供关于订单的详细信息！商家以及平台看不到相关的订单，没有办法联系顾客进行处理。麻烦客户在零元购--我的订单（点全部）--点击要投诉的订单详情，下拉至最底部有个“点我举报”。在此举报后就会有相关的订单信息！有任何疑问也可以在我们微信公众号留言哦，谢谢！</small></div>
                          </td>
            <td class="color-777 report-order"></td>
            <td class="color-777"><small>19533416<br />[良兄]</small></td>
            <td class="color-777"><small>极速金属随身U盘16G</small></td>
            <td class="color-777">                <span
							class="label label-success">已解决</span>
                </td>
            <td class="color-777"><p><small>投诉时间：2016-04-08 17:43:03</small></p>
                        <p><small>解决时间：2016-04-09 15:19:15</small></p>
			</td>
            <td><a
							href="/report/info?id=78703&backurl=%2Freport%2Findex"><i
								class="fa fa-info-circle"></i> 详情</a></td>
          </tr>
                    <tr>
            <td width="50"><small>78175</small></td>
            <td><small><a
						href="/report/info?id=78175&backurl=%2Freport%2Findex"> <strong>【
                            商品质量问题
                            】</strong> 灯的底座脱落，调光的旋钮不好用</a></small>
                                <div class="clearfix">
                                    <a href="http://7xp28h.com1.z0.glb.clouddn.com/comment0gow_5706e3400d410?imageMogr2/thumbnail/800x/strip/quality/70/format/jpg" target="_blank"><img
										src="http://7xp28h.com1.z0.glb.clouddn.com/comment0gow_5706e3400d410?imageMogr2/thumbnail/160x/strip/quality/70/format/jpg" height="60" /></a>
                                    <a href="http://7xp28h.com1.z0.glb.clouddn.com/comment0gow_5706e34d58fcd?imageMogr2/thumbnail/800x/strip/quality/70/format/jpg" target="_blank"><img
										src="http://7xp28h.com1.z0.glb.clouddn.com/comment0gow_5706e34d58fcd?imageMogr2/thumbnail/160x/strip/quality/70/format/jpg" height="60" /></a>
                                    <a href="http://7xp28h.com1.z0.glb.clouddn.com/comment0gow_5706e35b5c086?imageMogr2/thumbnail/800x/strip/quality/70/format/jpg" target="_blank"><img
										src="http://7xp28h.com1.z0.glb.clouddn.com/comment0gow_5706e35b5c086?imageMogr2/thumbnail/160x/strip/quality/70/format/jpg" height="60" /></a>
                                  </div>
                                              <div class="clearfix report-replys replys-well">
                                    <p class="color-666">
                                        商家
                                        回复：亲 请联系我们客服qq：411397878</p>
                                    <p class="color-666">
                                        用户
                                        回复：小李标记为已解决，备注为："卖家态度很好，很满意解决方法"。</p>
                                  </div>
                                          	<div class="color-666"><small>备注：卖家态度很好，很满意解决方法</small></div>
                          </td>
            <td class="color-777 report-order">                <div class="clearfix">
                <small><a href="/order/view?order_sn=20160401ab5632ebe1ae" target="_blank">20160401ab5632ebe1ae</a></small></div>
                                	<div class="clearfix">
                	[<a href="javascript:window.open('/order/wl?deliver_no=881475693242246175', 'wl-881475693242246175', 'height=500, width=400, top=0, left=0, toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, status=no');" target="_blank">查看物流</a>]</div>                                <div class="clearfix">
                	<span class="label label-success">已付款</span>
                    
                     <span class="label label-info">已发货</span>

                    <span class="label label-success"> 已结算</span>
                    
                    <span class="label label-primary">已处理</span>
                </div>
                                </td>
            <td class="color-777"><small>11461957<br />[小李]</small></td>
            <td class="color-777"><small>复古个性煤油灯LED灯床头灯</small></td>
            <td class="color-777">                <span
							class="label label-success">已解决</span>
                </td>
            <td class="color-777"><p><small>投诉时间：2016-04-08 06:46:54</small></p>
                        <p><small>解决时间：2016-04-08 17:02:26</small></p>
			</td>
            <td><a
							href="/report/info?id=78175&backurl=%2Freport%2Findex"><i
								class="fa fa-info-circle"></i> 详情</a></td>
          </tr>
                    <tr>
            <td width="50"><small>76244</small></td>
            <td><small><a
						href="/report/info?id=76244&backurl=%2Freport%2Findex"> <strong>【
                            其他问题
                            】</strong> 拍错产品，要求退款，重新拍</a></small>
                                <div class="clearfix">
                                    <a href="http://7xp28h.com1.z0.glb.clouddn.com/comment0gow_57032cbd0572c?imageMogr2/thumbnail/800x/strip/quality/70/format/jpg" target="_blank"><img
										src="http://7xp28h.com1.z0.glb.clouddn.com/comment0gow_57032cbd0572c?imageMogr2/thumbnail/160x/strip/quality/70/format/jpg" height="60" /></a>
                                    <a href="http://7xp28h.com1.z0.glb.clouddn.com/comment0gow_57032ccc3193a?imageMogr2/thumbnail/800x/strip/quality/70/format/jpg" target="_blank"><img
										src="http://7xp28h.com1.z0.glb.clouddn.com/comment0gow_57032ccc3193a?imageMogr2/thumbnail/160x/strip/quality/70/format/jpg" height="60" /></a>
                                    <a href="http://7xp28h.com1.z0.glb.clouddn.com/comment0gow_57032cdd5630c?imageMogr2/thumbnail/800x/strip/quality/70/format/jpg" target="_blank"><img
										src="http://7xp28h.com1.z0.glb.clouddn.com/comment0gow_57032cdd5630c?imageMogr2/thumbnail/160x/strip/quality/70/format/jpg" height="60" /></a>
                                  </div>
                                              <div class="clearfix report-replys replys-well">
                                    <p class="color-666">
                                        商家
                                        回复：亲 需要工体音箱 可以免费复制给你  谢谢</p>
                                  </div>
                                        </td>
            <td class="color-777 report-order">                <div class="clearfix">
                <small><a href="/order/view?order_sn=20160405f6da40c3d6ba" target="_blank">20160405f6da40c3d6ba</a></small></div>
                                	<div class="clearfix">
                	[<a href="javascript:window.open('/order/wl?deliver_no=881498239250933044', 'wl-881498239250933044', 'height=500, width=400, top=0, left=0, toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, status=no');" target="_blank">查看物流</a>]</div>                                <div class="clearfix">
                	<span class="label label-success">已付款</span>
                    
                     <span class="label label-info">已发货</span>

                    <span class="label label-warning"> 未结算</span>
                    
                    <span class="label label-primary">已处理</span>
                </div>
                                </td>
            <td class="color-777"><small>17088996<br />[上海婺诚--小敏]</small></td>
            <td class="color-777"><small>极速金属时尚随身U盘16G</small></td>
            <td class="color-777">                <span
						class="label label-danger">驳回申诉</span>
				</td>
            <td class="color-777"><p><small>投诉时间：2016-04-05 11:11:28</small></p>
            </td>
            <td><a
							href="/report/info?id=76244&backurl=%2Freport%2Findex"><i
								class="fa fa-info-circle"></i> 详情</a></td>
          </tr>
                            </tbody>
      </table>
    </form>
  </div>
  <div class="text-center"> <ul class="pagination pagination-sm"><li class="disabled"><a href="/report/index?starttime=2016-04-03&endtime=2016-04-10&p=1">First</a></li><li class="disabled"><a href="/report/index?starttime=2016-04-03&endtime=2016-04-10&p=0">Prev</a></li><li class="active"><a href="/report/index?starttime=2016-04-03&endtime=2016-04-10&p=1">1</a></li><li class="disabled"><a href="/report/index?starttime=2016-04-03&endtime=2016-04-10&p=2">Next</a></li><li class="disabled"><a href="/report/index?starttime=2016-04-03&endtime=2016-04-10&p=1">Last</a></li></ul> </div>
</div>
</div>
