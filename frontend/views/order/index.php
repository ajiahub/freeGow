<?php
$this->registerCssFile('@web/static/css/order-index.css');
?>
<div class="container-fluid main-container">
	<?= $this->render('/layouts/menu'); ?>
	<div class="container-fluid">
    <div class="location">
    	您的位置：<a href="/">控制台</a><a href="/order">订单中心</a><a href="javascript:void(0);" class="active">订单列表</a>
    </div>
    
    <div class="page-header clearfix">
        <h1 class="pull-left"><i class="fa fa-database fa-fw"></i> 订单列表</h1>
    </div>
    <div class="text-left">
		 <form class="form-inline filter-form" action="/order" method="get">
    		<div class="form-group"> 
    			<select class="form-control input-sm"  name="pay_status" id="pay_status">
    			<option value="">付款状态</option>
    	     	<option value="1" >已付款</option>
    	     	<option value="2" >申请退款</option>
    	     	<option value="4" >已退款</option>
    			</select>
			</div>
			<div class="form-group">
			<select class="form-control input-sm" name="goods_status" id="goods_status">
			<option value="" >全部发货状态</option>
			<option value="0" >未发货</option>
	     	<option value="1" >已发货</option>
	     	<option value="2" >已收货</option>
	     	<option value="3" >配货中</option>
	     	</select>
	     	</div>
	     	<div class="form-group">
        		<label></label>
				<select class="form-control input-sm" name="status" id="status">
				<option value="">全部订单状态</option>
				<option value="0" >未处理</option>
				<option value="1" >已作废</option>
				<option value="2" >待退货</option>
				<option value="3" >已退货</option>
				<option value="4" >异常订单</option>
				<option value="10" >已处理</option>
		     	</select>
    		 </div>
    		<div class="form-group">
    		<input type="text" id="starttime" name="starttime" value="2016-04-07" class="form-control input-sm" style="width: 90px;" onFocus="WdatePicker({dateFmt:'yyyy-MM-dd'})" />
                           &nbsp;至&nbsp;
                           <input type="text" id="endtime" name="endtime" value="2016-04-10" class="form-control input-sm" style="width: 90px;" onFocus="WdatePicker({dateFmt:'yyyy-MM-dd'})" />
            </div>    
    		<div class="form-group">
                <input type="text" class="form-control input-sm" name="order_sn" placeholder="订单号" style="width: 120px;" value="">
            </div>
            <div class="form-group">
                <input type="text" class="form-control input-sm" name="goods_name" placeholder="商品名字" value="">
            </div>
            <div class="form-group">
                <input type="text" class="form-control input-sm" name="shipname" placeholder="收货人名字" style="width: 85px;" value="">
            </div>
            <div class="form-group">
                <input type="text" class="form-control input-sm" name="tel" placeholder="手机号" style="width: 90px;" value="">
            </div>
            <button type="submit" class="btn btn-default btn-sm"><i class="fa fa-arrow-circle-o-right"></i> 提交</button>
            <button type="submit" name="operate" value="export" class="btn btn-default btn-sm"><i class="fa fa-file-excel-o"></i> 导出Excel</button>
            <button type="submit" name="operate" value="shipingAndExport" class="btn btn-default btn-sm"><i class="fa fa-truck"></i> 配货并导出</button>
    	</form>
	</div>
	<div class="site-alert alert hide"></div>
<script type="text/javascript">
var note = '现在已经增加配货并导出功能，该功能只会配货并导出已付款未发货的订单！';
jQuery(function (){
				showAlertMsg('现在已经增加配货并导出功能，该功能只会配货并导出已付款未发货的订单！', 'info', null);
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
</script>	<div class="table-responsive">
	   <form class="form-inline orderlist-form" action="/order" method="post">
      <table class="table datalist-table">
        <thead>
            <tr class="active">
                <th colspan="3"><label class="checkbox-inline"><input type="checkbox" name="checkall"> 全选</label> </th>
                                <th width="150">规格</th>
                <th width="60">数量</th>
                <th width="100">收货人姓名</th>
                <th width="240">收货人信息</th>
                <th width="110">时间</th>
                <th width="120"></th>
            </tr>
        </thead>
        <tbody>
                    <tr>
                <td width="35"><input type="checkbox" name="ordersn[]" value="201604070907f8b2dd1f"></td>
                <td>
                    <a href="/order/view?order_sn=201604070907f8b2dd1f&url=%2Forder" class="good-cover">
                        <img src="http://p3.0gow.com/pic0gow_5696901f136d4?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" />
                    </a>
                </td>
                <td><h4><a href="/order/view?order_sn=201604070907f8b2dd1f&url=%2Forder">订单号：201604070907f8b2dd1f</a></h4>
                    <p class="color-888">复古个性煤油灯LED灯床头灯</p>
                    <span class="label label-success">已付款</span>
                    
                    
                    <span class="label label-info">已发货</span>

                    <span class="label label-warning"> 未结算</span>
                    
                    <span class="label label-primary">已处理</span>
                    
                    
                </td>
                                <td><p class="color-999"></p></td>
                <td><p class="color-999">x 1</p></td>
                <td><p class="color-333">邵建军</p></td>
                
                <td><p class="color-999">北京 市辖区 房山区 </p>
                <p class="color-999">13671031261</p>
                
                <p class="color-999">北京市房山区长阳镇朱岗子村三区49号</p>
                </td>
                
                <td><p class="color-999">04/07 00:09:24</p></td>
                <td>
                    <div class="btn-group btn-group-lg">
                                                <a href="javascript:window.open('/order/wl?deliver_no=881523185923004751', 'wl-881523185923004751', 'height=500, width=400, top=0, left=0, toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, status=no');" target="_blank" class="btn btn-link">
                            <i class="fa fa-lg fa-map-marker"></i>
                            <small>物流</small>
                        </a>
                                                <a href="/order/view?order_sn=201604070907f8b2dd1f&url=%2Forder" class="btn btn-link">
                            <i class="fa fa-lg fa-info-circle"></i>
                            <small>详情</small>
                        </a>
                    </div>
                </td>
            </tr>
                      <tr>
                <td width="35"><input type="checkbox" name="ordersn[]" value="201604073b82f8341b56"></td>
                <td>
                    <a href="/order/view?order_sn=201604073b82f8341b56&url=%2Forder" class="good-cover">
                        <img src="http://p3.0gow.com/pic0gow_56e589e36538a?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" />
                    </a>
                </td>
                <td><h4><a href="/order/view?order_sn=201604073b82f8341b56&url=%2Forder">订单号：201604073b82f8341b56</a></h4>
                    <p class="color-888">32GB极速u盘</p>
                    <span class="label label-success">已付款</span>
                    
                    
                    <span class="label label-info">已发货</span>

                    <span class="label label-warning"> 未结算</span>
                    
                    <span class="label label-primary">已处理</span>
                    
                    
                </td>
                                <td><p class="color-999"></p></td>
                <td><p class="color-999">x 1</p></td>
                <td><p class="color-333">暨祥</p></td>
                
                <td><p class="color-999">湖南 长沙市 浏阳市 </p>
                <p class="color-999">15111075012</p>
                
                <p class="color-999">浏阳市白沙路36号，五福堂酒业有限公司</p>
                </td>
                
                <td><p class="color-999">04/07 00:47:52</p></td>
                <td>
                    <div class="btn-group btn-group-lg">
                                                <a href="javascript:window.open('/order/wl?deliver_no=881513998741549105', 'wl-881513998741549105', 'height=500, width=400, top=0, left=0, toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, status=no');" target="_blank" class="btn btn-link">
                            <i class="fa fa-lg fa-map-marker"></i>
                            <small>物流</small>
                        </a>
                                                <a href="/order/view?order_sn=201604073b82f8341b56&url=%2Forder" class="btn btn-link">
                            <i class="fa fa-lg fa-info-circle"></i>
                            <small>详情</small>
                        </a>
                    </div>
                </td>
            </tr>
                      <tr>
                <td width="35"><input type="checkbox" name="ordersn[]" value="20160407fd440084e62f"></td>
                <td>
                    <a href="/order/view?order_sn=20160407fd440084e62f&url=%2Forder" class="good-cover">
                        <img src="http://p3.0gow.com/pic0gow_5696901f136d4?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" />
                    </a>
                </td>
                <td><h4><a href="/order/view?order_sn=20160407fd440084e62f&url=%2Forder">订单号：20160407fd440084e62f</a></h4>
                    <p class="color-888">复古个性煤油灯LED灯床头灯</p>
                    <span class="label label-success">已付款</span>
                    
                    
                    <span class="label label-info">已发货</span>

                    <span class="label label-warning"> 未结算</span>
                    
                    <span class="label label-primary">已处理</span>
                    
                    
                </td>
                                <td><p class="color-999"></p></td>
                <td><p class="color-999">x 1</p></td>
                <td><p class="color-333">黄超年</p></td>
                
                <td><p class="color-999">广西 南宁市 宾阳县 </p>
                <p class="color-999">13788012357</p>
                
                <p class="color-999">广西南宁宾阳县黎塘镇三李区委会李九村44号</p>
                </td>
                
                <td><p class="color-999">04/07 00:55:45</p></td>
                <td>
                    <div class="btn-group btn-group-lg">
                                                <a href="javascript:window.open('/order/wl?deliver_no=881516004647135064', 'wl-881516004647135064', 'height=500, width=400, top=0, left=0, toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, status=no');" target="_blank" class="btn btn-link">
                            <i class="fa fa-lg fa-map-marker"></i>
                            <small>物流</small>
                        </a>
                                                <a href="/order/view?order_sn=20160407fd440084e62f&url=%2Forder" class="btn btn-link">
                            <i class="fa fa-lg fa-info-circle"></i>
                            <small>详情</small>
                        </a>
                    </div>
                </td>
            </tr>
                      <tr>
                <td width="35"><input type="checkbox" name="ordersn[]" value="201604076a4632a9e6d7"></td>
                <td>
                    <a href="/order/view?order_sn=201604076a4632a9e6d7&url=%2Forder" class="good-cover">
                        <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" />
                    </a>
                </td>
                <td><h4><a href="/order/view?order_sn=201604076a4632a9e6d7&url=%2Forder">订单号：201604076a4632a9e6d7</a></h4>
                    <p class="color-888">极速金属时尚随身U盘16G</p>
                    <span class="label label-success">已付款</span>
                    
                    
                    <span class="label label-info">已发货</span>

                    <span class="label label-warning"> 未结算</span>
                    
                    <span class="label label-primary">已处理</span>
                    
                    
                </td>
                                <td><p class="color-999"></p></td>
                <td><p class="color-999">x 1</p></td>
                <td><p class="color-333">钟继良</p></td>
                
                <td><p class="color-999">广东 深圳市 宝安区 </p>
                <p class="color-999">13927495115</p>
                
                <p class="color-999">光明新区体育路99号高尔夫球会后门保安室</p>
                </td>
                
                <td><p class="color-999">04/07 03:25:01</p></td>
                <td>
                    <div class="btn-group btn-group-lg">
                                                <a href="javascript:window.open('/order/wl?deliver_no=881523376282973448', 'wl-881523376282973448', 'height=500, width=400, top=0, left=0, toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, status=no');" target="_blank" class="btn btn-link">
                            <i class="fa fa-lg fa-map-marker"></i>
                            <small>物流</small>
                        </a>
                                                <a href="/order/view?order_sn=201604076a4632a9e6d7&url=%2Forder" class="btn btn-link">
                            <i class="fa fa-lg fa-info-circle"></i>
                            <small>详情</small>
                        </a>
                    </div>
                </td>
            </tr>
                      <tr>
                <td width="35"><input type="checkbox" name="ordersn[]" value="20160407e14808dbda39"></td>
                <td>
                    <a href="/order/view?order_sn=20160407e14808dbda39&url=%2Forder" class="good-cover">
                        <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" />
                    </a>
                </td>
                <td><h4><a href="/order/view?order_sn=20160407e14808dbda39&url=%2Forder">订单号：20160407e14808dbda39</a></h4>
                    <p class="color-888">极速金属时尚随身U盘16G</p>
                    <span class="label label-success">已付款</span>
                    
                    
                    <span class="label label-info">已发货</span>

                    <span class="label label-warning"> 未结算</span>
                    
                    <span class="label label-primary">已处理</span>
                    
                    
                </td>
                                <td><p class="color-999"></p></td>
                <td><p class="color-999">x 1</p></td>
                <td><p class="color-333">孙丽梅</p></td>
                
                <td><p class="color-999">吉林 长春市 绿园区 </p>
                <p class="color-999">18644989268</p>
                
                <p class="color-999">吉林省长春市绿园区创业大街洛阳街3455号，门卫代收</p>
                </td>
                
                <td><p class="color-999">04/07 04:42:01</p></td>
                <td>
                    <div class="btn-group btn-group-lg">
                                                <a href="javascript:window.open('/order/wl?deliver_no=881523203254064357', 'wl-881523203254064357', 'height=500, width=400, top=0, left=0, toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, status=no');" target="_blank" class="btn btn-link">
                            <i class="fa fa-lg fa-map-marker"></i>
                            <small>物流</small>
                        </a>
                                                <a href="/order/view?order_sn=20160407e14808dbda39&url=%2Forder" class="btn btn-link">
                            <i class="fa fa-lg fa-info-circle"></i>
                            <small>详情</small>
                        </a>
                    </div>
                </td>
            </tr>
                      <tr>
                <td width="35"><input type="checkbox" name="ordersn[]" value="20160407f3ee2202e179"></td>
                <td>
                    <a href="/order/view?order_sn=20160407f3ee2202e179&url=%2Forder" class="good-cover">
                        <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" />
                    </a>
                </td>
                <td><h4><a href="/order/view?order_sn=20160407f3ee2202e179&url=%2Forder">订单号：20160407f3ee2202e179</a></h4>
                    <p class="color-888">极速金属时尚随身U盘16G</p>
                    <span class="label label-success">已付款</span>
                    
                    
                    <span class="label label-info">已发货</span>

                    <span class="label label-warning"> 未结算</span>
                    
                    <span class="label label-primary">已处理</span>
                    
                    
                </td>
                                <td><p class="color-999"></p></td>
                <td><p class="color-999">x 1</p></td>
                <td><p class="color-333">宋玉芝</p></td>
                
                <td><p class="color-999">上海 市辖区 浦东新区 </p>
                <p class="color-999">15221889738</p>
                
                <p class="color-999">浦三路858弄5号202室</p>
                </td>
                
                <td><p class="color-999">04/07 04:47:32</p></td>
                <td>
                    <div class="btn-group btn-group-lg">
                                                <a href="javascript:window.open('/order/wl?deliver_no=881515821710610812', 'wl-881515821710610812', 'height=500, width=400, top=0, left=0, toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, status=no');" target="_blank" class="btn btn-link">
                            <i class="fa fa-lg fa-map-marker"></i>
                            <small>物流</small>
                        </a>
                                                <a href="/order/view?order_sn=20160407f3ee2202e179&url=%2Forder" class="btn btn-link">
                            <i class="fa fa-lg fa-info-circle"></i>
                            <small>详情</small>
                        </a>
                    </div>
                </td>
            </tr>
                      <tr>
                <td width="35"><input type="checkbox" name="ordersn[]" value="20160407e0d2cd21624d"></td>
                <td>
                    <a href="/order/view?order_sn=20160407e0d2cd21624d&url=%2Forder" class="good-cover">
                        <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" />
                    </a>
                </td>
                <td><h4><a href="/order/view?order_sn=20160407e0d2cd21624d&url=%2Forder">订单号：20160407e0d2cd21624d</a></h4>
                    <p class="color-888">极速金属时尚随身U盘16G</p>
                    <span class="label label-success">已付款</span>
                    
                    
                    <span class="label label-info">已发货</span>

                    <span class="label label-warning"> 未结算</span>
                    
                    <span class="label label-primary">已处理</span>
                    
                    
                </td>
                                <td><p class="color-999"></p></td>
                <td><p class="color-999">x 1</p></td>
                <td><p class="color-333">吴杰山</p></td>
                
                <td><p class="color-999">江苏 无锡市 滨湖区 </p>
                <p class="color-999">13830904567</p>
                
                <p class="color-999">江苏省无锡市滨湖区湖滨路3号，金至尊国际娱乐会所，吴杰山，13830904567</p>
                </td>
                
                <td><p class="color-999">04/07 05:42:01</p></td>
                <td>
                    <div class="btn-group btn-group-lg">
                                                <a href="javascript:window.open('/order/wl?deliver_no=881523235139741125', 'wl-881523235139741125', 'height=500, width=400, top=0, left=0, toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, status=no');" target="_blank" class="btn btn-link">
                            <i class="fa fa-lg fa-map-marker"></i>
                            <small>物流</small>
                        </a>
                                                <a href="/order/view?order_sn=20160407e0d2cd21624d&url=%2Forder" class="btn btn-link">
                            <i class="fa fa-lg fa-info-circle"></i>
                            <small>详情</small>
                        </a>
                    </div>
                </td>
            </tr>
                      <tr>
                <td width="35"><input type="checkbox" name="ordersn[]" value="20160407995f290ef166"></td>
                <td>
                    <a href="/order/view?order_sn=20160407995f290ef166&url=%2Forder" class="good-cover">
                        <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" />
                    </a>
                </td>
                <td><h4><a href="/order/view?order_sn=20160407995f290ef166&url=%2Forder">订单号：20160407995f290ef166</a></h4>
                    <p class="color-888">极速金属时尚随身U盘16G</p>
                    <span class="label label-success">已付款</span>
                    
                    
                    <span class="label label-info">已发货</span>

                    <span class="label label-warning"> 未结算</span>
                    
                    <span class="label label-primary">已处理</span>
                    
                    
                </td>
                                <td><p class="color-999"></p></td>
                <td><p class="color-999">x 1</p></td>
                <td><p class="color-333">北京市西城区月坛北街25号18号楼603</p></td>
                
                <td><p class="color-999">河北 保定市 新市区 </p>
                <p class="color-999">15313353570</p>
                
                <p class="color-999">保定市新市区棉仿厂宿舍52号楼7室</p>
                </td>
                
                <td><p class="color-999">04/07 05:46:00</p></td>
                <td>
                    <div class="btn-group btn-group-lg">
                                                <a href="javascript:window.open('/order/wl?deliver_no=881513998749024953', 'wl-881513998749024953', 'height=500, width=400, top=0, left=0, toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, status=no');" target="_blank" class="btn btn-link">
                            <i class="fa fa-lg fa-map-marker"></i>
                            <small>物流</small>
                        </a>
                                                <a href="/order/view?order_sn=20160407995f290ef166&url=%2Forder" class="btn btn-link">
                            <i class="fa fa-lg fa-info-circle"></i>
                            <small>详情</small>
                        </a>
                    </div>
                </td>
            </tr>
                      <tr>
                <td width="35"><input type="checkbox" name="ordersn[]" value="201604076ce5695d473b"></td>
                <td>
                    <a href="/order/view?order_sn=201604076ce5695d473b&url=%2Forder" class="good-cover">
                        <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" />
                    </a>
                </td>
                <td><h4><a href="/order/view?order_sn=201604076ce5695d473b&url=%2Forder">订单号：201604076ce5695d473b</a></h4>
                    <p class="color-888">极速金属时尚随身U盘16G</p>
                    <span class="label label-success">已付款</span>
                    
                    
                    <span class="label label-info">已发货</span>

                    <span class="label label-warning"> 未结算</span>
                    
                    <span class="label label-primary">已处理</span>
                    
                    
                </td>
                                <td><p class="color-999"></p></td>
                <td><p class="color-999">x 1</p></td>
                <td><p class="color-333">安学文</p></td>
                
                <td><p class="color-999">山东 烟台市 莱山区 </p>
                <p class="color-999">17862890335</p>
                
                <p class="color-999">观海路滨州医学院</p>
                </td>
                
                <td><p class="color-999">04/07 08:24:37</p></td>
                <td>
                    <div class="btn-group btn-group-lg">
                                                <a href="javascript:window.open('/order/wl?deliver_no=881513823503327983', 'wl-881513823503327983', 'height=500, width=400, top=0, left=0, toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, status=no');" target="_blank" class="btn btn-link">
                            <i class="fa fa-lg fa-map-marker"></i>
                            <small>物流</small>
                        </a>
                                                <a href="/order/view?order_sn=201604076ce5695d473b&url=%2Forder" class="btn btn-link">
                            <i class="fa fa-lg fa-info-circle"></i>
                            <small>详情</small>
                        </a>
                    </div>
                </td>
            </tr>
                      <tr>
                <td width="35"><input type="checkbox" name="ordersn[]" value="201604075aa43055b63e"></td>
                <td>
                    <a href="/order/view?order_sn=201604075aa43055b63e&url=%2Forder" class="good-cover">
                        <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" />
                    </a>
                </td>
                <td><h4><a href="/order/view?order_sn=201604075aa43055b63e&url=%2Forder">订单号：201604075aa43055b63e</a></h4>
                    <p class="color-888">极速金属时尚随身U盘16G</p>
                    <span class="label label-success">已付款</span>
                    
                    
                    <span class="label label-info">已发货</span>

                    <span class="label label-warning"> 未结算</span>
                    
                    <span class="label label-primary">已处理</span>
                    
                    
                </td>
                                <td><p class="color-999"></p></td>
                <td><p class="color-999">x 1</p></td>
                <td><p class="color-333">韩甜甜</p></td>
                
                <td><p class="color-999">陕西 咸阳市 兴平市 </p>
                <p class="color-999">15091801791</p>
                
                <p class="color-999">兴平市中心大街雨露花园</p>
                </td>
                
                <td><p class="color-999">04/07 08:25:53</p></td>
                <td>
                    <div class="btn-group btn-group-lg">
                                                <a href="javascript:window.open('/order/wl?deliver_no=881513823504589509', 'wl-881513823504589509', 'height=500, width=400, top=0, left=0, toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, status=no');" target="_blank" class="btn btn-link">
                            <i class="fa fa-lg fa-map-marker"></i>
                            <small>物流</small>
                        </a>
                                                <a href="/order/view?order_sn=201604075aa43055b63e&url=%2Forder" class="btn btn-link">
                            <i class="fa fa-lg fa-info-circle"></i>
                            <small>详情</small>
                        </a>
                    </div>
                </td>
            </tr>
                      <tr>
                <td width="35"><input type="checkbox" name="ordersn[]" value="20160407fa8c9431ceda"></td>
                <td>
                    <a href="/order/view?order_sn=20160407fa8c9431ceda&url=%2Forder" class="good-cover">
                        <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" />
                    </a>
                </td>
                <td><h4><a href="/order/view?order_sn=20160407fa8c9431ceda&url=%2Forder">订单号：20160407fa8c9431ceda</a></h4>
                    <p class="color-888">极速金属时尚随身U盘16G</p>
                    <span class="label label-success">已付款</span>
                    
                    
                    <span class="label label-info">已发货</span>

                    <span class="label label-warning"> 未结算</span>
                    
                    <span class="label label-primary">已处理</span>
                    
                    
                </td>
                                <td><p class="color-999"></p></td>
                <td><p class="color-999">x 1</p></td>
                <td><p class="color-333">付争光</p></td>
                
                <td><p class="color-999">江苏 苏州市 太仓市 </p>
                <p class="color-999">17712695018</p>
                
                <p class="color-999">滨河路大庆锦绣新城雍景苑14栋101室</p>
                </td>
                
                <td><p class="color-999">04/07 08:48:58</p></td>
                <td>
                    <div class="btn-group btn-group-lg">
                                                <a href="javascript:window.open('/order/wl?deliver_no=881515933085478498', 'wl-881515933085478498', 'height=500, width=400, top=0, left=0, toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, status=no');" target="_blank" class="btn btn-link">
                            <i class="fa fa-lg fa-map-marker"></i>
                            <small>物流</small>
                        </a>
                                                <a href="/order/view?order_sn=20160407fa8c9431ceda&url=%2Forder" class="btn btn-link">
                            <i class="fa fa-lg fa-info-circle"></i>
                            <small>详情</small>
                        </a>
                    </div>
                </td>
            </tr>
                      <tr>
                <td width="35"><input type="checkbox" name="ordersn[]" value="2016040761248152d6fb"></td>
                <td>
                    <a href="/order/view?order_sn=2016040761248152d6fb&url=%2Forder" class="good-cover">
                        <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" />
                    </a>
                </td>
                <td><h4><a href="/order/view?order_sn=2016040761248152d6fb&url=%2Forder">订单号：2016040761248152d6fb</a></h4>
                    <p class="color-888">极速金属时尚随身U盘16G</p>
                    <span class="label label-success">已付款</span>
                    
                    
                    <span class="label label-info">已发货</span>

                    <span class="label label-warning"> 未结算</span>
                    
                    <span class="label label-primary">已处理</span>
                    
                    
                </td>
                                <td><p class="color-999"></p></td>
                <td><p class="color-999">x 1</p></td>
                <td><p class="color-333">兰汉发</p></td>
                
                <td><p class="color-999">福建 福州市 鼓楼区 </p>
                <p class="color-999">13506991981</p>
                
                <p class="color-999">杨桥中路79号闽赋苑2号楼技术层</p>
                </td>
                
                <td><p class="color-999">04/07 08:54:44</p></td>
                <td>
                    <div class="btn-group btn-group-lg">
                                                <a href="javascript:window.open('/order/wl?deliver_no=881523306705690610', 'wl-881523306705690610', 'height=500, width=400, top=0, left=0, toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, status=no');" target="_blank" class="btn btn-link">
                            <i class="fa fa-lg fa-map-marker"></i>
                            <small>物流</small>
                        </a>
                                                <a href="/order/view?order_sn=2016040761248152d6fb&url=%2Forder" class="btn btn-link">
                            <i class="fa fa-lg fa-info-circle"></i>
                            <small>详情</small>
                        </a>
                    </div>
                </td>
            </tr>
                      <tr>
                <td width="35"><input type="checkbox" name="ordersn[]" value="20160407f85ea80c7e4e"></td>
                <td>
                    <a href="/order/view?order_sn=20160407f85ea80c7e4e&url=%2Forder" class="good-cover">
                        <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" />
                    </a>
                </td>
                <td><h4><a href="/order/view?order_sn=20160407f85ea80c7e4e&url=%2Forder">订单号：20160407f85ea80c7e4e</a></h4>
                    <p class="color-888">极速金属时尚随身U盘16G</p>
                    <span class="label label-success">已付款</span>
                    
                    
                    <span class="label label-info">已发货</span>

                    <span class="label label-warning"> 未结算</span>
                    
                    <span class="label label-primary">已处理</span>
                    
                    
                </td>
                                <td><p class="color-999"></p></td>
                <td><p class="color-999">x 1</p></td>
                <td><p class="color-333">樊海婷</p></td>
                
                <td><p class="color-999">山西 运城市 永济市 </p>
                <p class="color-999">15835919983</p>
                
                <p class="color-999">北郊舜都市场移动公司</p>
                </td>
                
                <td><p class="color-999">04/07 09:16:13</p></td>
                <td>
                    <div class="btn-group btn-group-lg">
                                                <a href="javascript:window.open('/order/wl?deliver_no=881514030062175468', 'wl-881514030062175468', 'height=500, width=400, top=0, left=0, toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, status=no');" target="_blank" class="btn btn-link">
                            <i class="fa fa-lg fa-map-marker"></i>
                            <small>物流</small>
                        </a>
                                                <a href="/order/view?order_sn=20160407f85ea80c7e4e&url=%2Forder" class="btn btn-link">
                            <i class="fa fa-lg fa-info-circle"></i>
                            <small>详情</small>
                        </a>
                    </div>
                </td>
            </tr>
                      <tr>
                <td width="35"><input type="checkbox" name="ordersn[]" value="2016040795ef13c96c2b"></td>
                <td>
                    <a href="/order/view?order_sn=2016040795ef13c96c2b&url=%2Forder" class="good-cover">
                        <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" />
                    </a>
                </td>
                <td><h4><a href="/order/view?order_sn=2016040795ef13c96c2b&url=%2Forder">订单号：2016040795ef13c96c2b</a></h4>
                    <p class="color-888">极速金属时尚随身U盘16G</p>
                    <span class="label label-success">已付款</span>
                    
                    
                    <span class="label label-info">已发货</span>

                    <span class="label label-warning"> 未结算</span>
                    
                    <span class="label label-primary">已处理</span>
                    
                    
                </td>
                                <td><p class="color-999"></p></td>
                <td><p class="color-999">x 1</p></td>
                <td><p class="color-333">孙光明</p></td>
                
                <td><p class="color-999">上海 市辖区 闵行区 </p>
                <p class="color-999">18601651139</p>
                
                <p class="color-999">上海市 闵行区 七宝镇 青年路25弄蒲汇公寓8号202室 </p>
                </td>
                
                <td><p class="color-999">04/07 09:32:56</p></td>
                <td>
                    <div class="btn-group btn-group-lg">
                                                <a href="javascript:window.open('/order/wl?deliver_no=881513799450004751', 'wl-881513799450004751', 'height=500, width=400, top=0, left=0, toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, status=no');" target="_blank" class="btn btn-link">
                            <i class="fa fa-lg fa-map-marker"></i>
                            <small>物流</small>
                        </a>
                                                <a href="/order/view?order_sn=2016040795ef13c96c2b&url=%2Forder" class="btn btn-link">
                            <i class="fa fa-lg fa-info-circle"></i>
                            <small>详情</small>
                        </a>
                    </div>
                </td>
            </tr>
                      <tr>
                <td width="35"><input type="checkbox" name="ordersn[]" value="20160407a01e81ccd9c2"></td>
                <td>
                    <a href="/order/view?order_sn=20160407a01e81ccd9c2&url=%2Forder" class="good-cover">
                        <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" />
                    </a>
                </td>
                <td><h4><a href="/order/view?order_sn=20160407a01e81ccd9c2&url=%2Forder">订单号：20160407a01e81ccd9c2</a></h4>
                    <p class="color-888">极速金属时尚随身U盘16G</p>
                    <span class="label label-success">已付款</span>
                    
                    
                    <span class="label label-info">已发货</span>

                    <span class="label label-warning"> 未结算</span>
                    
                    <span class="label label-primary">已处理</span>
                    
                    
                </td>
                                <td><p class="color-999"></p></td>
                <td><p class="color-999">x 1</p></td>
                <td><p class="color-333">范裕乐</p></td>
                
                <td><p class="color-999">广东 汕尾市 城　区 </p>
                <p class="color-999">18023153789</p>
                
                <p class="color-999">海滨街89号渔政支队</p>
                </td>
                
                <td><p class="color-999">04/07 09:33:31</p></td>
                <td>
                    <div class="btn-group btn-group-lg">
                                                <a href="javascript:window.open('/order/wl?deliver_no=881515805885145165', 'wl-881515805885145165', 'height=500, width=400, top=0, left=0, toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, status=no');" target="_blank" class="btn btn-link">
                            <i class="fa fa-lg fa-map-marker"></i>
                            <small>物流</small>
                        </a>
                                                <a href="/order/view?order_sn=20160407a01e81ccd9c2&url=%2Forder" class="btn btn-link">
                            <i class="fa fa-lg fa-info-circle"></i>
                            <small>详情</small>
                        </a>
                    </div>
                </td>
            </tr>
                      <tr>
                <td width="35"><input type="checkbox" name="ordersn[]" value="201604072a26a568c131"></td>
                <td>
                    <a href="/order/view?order_sn=201604072a26a568c131&url=%2Forder" class="good-cover">
                        <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" />
                    </a>
                </td>
                <td><h4><a href="/order/view?order_sn=201604072a26a568c131&url=%2Forder">订单号：201604072a26a568c131</a></h4>
                    <p class="color-888">极速金属时尚随身U盘16G</p>
                    <span class="label label-success">已付款</span>
                    
                    
                    <span class="label label-info">已发货</span>

                    <span class="label label-warning"> 未结算</span>
                    
                    <span class="label label-primary">已处理</span>
                    
                    
                </td>
                                <td><p class="color-999"></p></td>
                <td><p class="color-999">x 1</p></td>
                <td><p class="color-333">谢生</p></td>
                
                <td><p class="color-999">广东 潮州市 饶平县 </p>
                <p class="color-999">13410043262</p>
                
                <p class="color-999">新丰镇</p>
                </td>
                
                <td><p class="color-999">04/07 09:43:27</p></td>
                <td>
                    <div class="btn-group btn-group-lg">
                                                <a href="javascript:window.open('/order/wl?deliver_no=881523203255327983', 'wl-881523203255327983', 'height=500, width=400, top=0, left=0, toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, status=no');" target="_blank" class="btn btn-link">
                            <i class="fa fa-lg fa-map-marker"></i>
                            <small>物流</small>
                        </a>
                                                <a href="/order/view?order_sn=201604072a26a568c131&url=%2Forder" class="btn btn-link">
                            <i class="fa fa-lg fa-info-circle"></i>
                            <small>详情</small>
                        </a>
                    </div>
                </td>
            </tr>
                      <tr>
                <td width="35"><input type="checkbox" name="ordersn[]" value="2016040776f805dd5443"></td>
                <td>
                    <a href="/order/view?order_sn=2016040776f805dd5443&url=%2Forder" class="good-cover">
                        <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" />
                    </a>
                </td>
                <td><h4><a href="/order/view?order_sn=2016040776f805dd5443&url=%2Forder">订单号：2016040776f805dd5443</a></h4>
                    <p class="color-888">极速金属时尚随身U盘16G</p>
                    <span class="label label-success">已付款</span>
                    
                    
                    <span class="label label-info">已发货</span>

                    <span class="label label-warning"> 未结算</span>
                    
                    <span class="label label-primary">已处理</span>
                    
                    
                </td>
                                <td><p class="color-999"></p></td>
                <td><p class="color-999">x 1</p></td>
                <td><p class="color-333">王先生</p></td>
                
                <td><p class="color-999">山东 济宁市 梁山县 </p>
                <p class="color-999">18753779888</p>
                
                <p class="color-999">水泊中路108号黄金海岸楼下第七街冷饮店！</p>
                </td>
                
                <td><p class="color-999">04/07 09:50:33</p></td>
                <td>
                    <div class="btn-group btn-group-lg">
                                                <a href="javascript:window.open('/order/wl?deliver_no=881513871141862337', 'wl-881513871141862337', 'height=500, width=400, top=0, left=0, toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, status=no');" target="_blank" class="btn btn-link">
                            <i class="fa fa-lg fa-map-marker"></i>
                            <small>物流</small>
                        </a>
                                                <a href="/order/view?order_sn=2016040776f805dd5443&url=%2Forder" class="btn btn-link">
                            <i class="fa fa-lg fa-info-circle"></i>
                            <small>详情</small>
                        </a>
                    </div>
                </td>
            </tr>
                      <tr>
                <td width="35"><input type="checkbox" name="ordersn[]" value="2016040758e2336790c3"></td>
                <td>
                    <a href="/order/view?order_sn=2016040758e2336790c3&url=%2Forder" class="good-cover">
                        <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" />
                    </a>
                </td>
                <td><h4><a href="/order/view?order_sn=2016040758e2336790c3&url=%2Forder">订单号：2016040758e2336790c3</a></h4>
                    <p class="color-888">极速金属时尚随身U盘16G</p>
                    <span class="label label-success">已付款</span>
                    
                    
                    <span class="label label-info">已发货</span>

                    <span class="label label-warning"> 未结算</span>
                    
                    <span class="label label-primary">已处理</span>
                    
                    
                </td>
                                <td><p class="color-999"></p></td>
                <td><p class="color-999">x 1</p></td>
                <td><p class="color-333">姜丽</p></td>
                
                <td><p class="color-999">黑龙江 牡丹江市 西安区 </p>
                <p class="color-999">13836378072</p>
                
                <p class="color-999">南市街西三条路511号</p>
                </td>
                
                <td><p class="color-999">04/07 09:52:23</p></td>
                <td>
                    <div class="btn-group btn-group-lg">
                                                <a href="javascript:window.open('/order/wl?deliver_no=881513783693721923', 'wl-881513783693721923', 'height=500, width=400, top=0, left=0, toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, status=no');" target="_blank" class="btn btn-link">
                            <i class="fa fa-lg fa-map-marker"></i>
                            <small>物流</small>
                        </a>
                                                <a href="/order/view?order_sn=2016040758e2336790c3&url=%2Forder" class="btn btn-link">
                            <i class="fa fa-lg fa-info-circle"></i>
                            <small>详情</small>
                        </a>
                    </div>
                </td>
            </tr>
                      <tr>
                <td width="35"><input type="checkbox" name="ordersn[]" value="20160407fdd956e53ebf"></td>
                <td>
                    <a href="/order/view?order_sn=20160407fdd956e53ebf&url=%2Forder" class="good-cover">
                        <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" />
                    </a>
                </td>
                <td><h4><a href="/order/view?order_sn=20160407fdd956e53ebf&url=%2Forder">订单号：20160407fdd956e53ebf</a></h4>
                    <p class="color-888">极速金属时尚随身U盘16G</p>
                    <span class="label label-success">已付款</span>
                    
                    
                    <span class="label label-info">已发货</span>

                    <span class="label label-warning"> 未结算</span>
                    
                    <span class="label label-primary">已处理</span>
                    
                    
                </td>
                                <td><p class="color-999"></p></td>
                <td><p class="color-999">x 1</p></td>
                <td><p class="color-333">陈瑞发</p></td>
                
                <td><p class="color-999">江苏 泰州市 海陵区 </p>
                <p class="color-999">13625172881</p>
                
                <p class="color-999">塘湾工业园十二号，五菱汽车4s店</p>
                </td>
                
                <td><p class="color-999">04/07 09:53:49</p></td>
                <td>
                    <div class="btn-group btn-group-lg">
                                                <a href="javascript:window.open('/order/wl?deliver_no=881523368432741125', 'wl-881523368432741125', 'height=500, width=400, top=0, left=0, toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, status=no');" target="_blank" class="btn btn-link">
                            <i class="fa fa-lg fa-map-marker"></i>
                            <small>物流</small>
                        </a>
                                                <a href="/order/view?order_sn=20160407fdd956e53ebf&url=%2Forder" class="btn btn-link">
                            <i class="fa fa-lg fa-info-circle"></i>
                            <small>详情</small>
                        </a>
                    </div>
                </td>
            </tr>
                      <tr>
                <td width="35"><input type="checkbox" name="ordersn[]" value="20160407fa6642ad140f"></td>
                <td>
                    <a href="/order/view?order_sn=20160407fa6642ad140f&url=%2Forder" class="good-cover">
                        <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" />
                    </a>
                </td>
                <td><h4><a href="/order/view?order_sn=20160407fa6642ad140f&url=%2Forder">订单号：20160407fa6642ad140f</a></h4>
                    <p class="color-888">极速金属时尚随身U盘16G</p>
                    <span class="label label-success">已付款</span>
                    
                    
                    <span class="label label-info">已发货</span>

                    <span class="label label-warning"> 未结算</span>
                    
                    <span class="label label-primary">已处理</span>
                    
                    
                </td>
                                <td><p class="color-999"></p></td>
                <td><p class="color-999">x 1</p></td>
                <td><p class="color-333">陈建金</p></td>
                
                <td><p class="color-999">江苏 宿迁市 泗洪县 </p>
                <p class="color-999">13511797060</p>
                
                <p class="color-999">双沟国土资源所</p>
                </td>
                
                <td><p class="color-999">04/07 10:05:37</p></td>
                <td>
                    <div class="btn-group btn-group-lg">
                                                <a href="javascript:window.open('/order/wl?deliver_no=881523282796236074', 'wl-881523282796236074', 'height=500, width=400, top=0, left=0, toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, status=no');" target="_blank" class="btn btn-link">
                            <i class="fa fa-lg fa-map-marker"></i>
                            <small>物流</small>
                        </a>
                                                <a href="/order/view?order_sn=20160407fa6642ad140f&url=%2Forder" class="btn btn-link">
                            <i class="fa fa-lg fa-info-circle"></i>
                            <small>详情</small>
                        </a>
                    </div>
                </td>
            </tr>
                            </tbody>
       
      </table>
      <div class="clearfix">
         <div class="checkbox">
            <label>
              <input type="checkbox" name="checkall"> 全选
            </label>
         </div>
         <div class="form-group">
            <select name="operate" class="form-control input-sm">
                <option value="export">导出订单</option>
                <option value="shiping">添加到配货中</option>
                <option value="noshiping">取消配货中</option>
            </select>
          </div>
          <input type="hidden" name="pageurl" value="/order">
          <button type="submit" class="btn btn-default btn-sm">提交</button>
      </div>
      
    </form>
    </div>
	<div class="text-center">
	   <ul class="pagination pagination-sm"><li class="disabled"><a href="/order/index?starttime=2016-04-07&endtime=2016-04-10&p=1">First</a></li><li class="disabled"><a href="/order/index?starttime=2016-04-07&endtime=2016-04-10&p=0">Prev</a></li><li class="active"><a href="/order/index?starttime=2016-04-07&endtime=2016-04-10&p=1">1</a></li><li><a href="/order/index?starttime=2016-04-07&endtime=2016-04-10&p=2">2</a></li><li><a href="/order/index?starttime=2016-04-07&endtime=2016-04-10&p=3">3</a></li><li><a href="/order/index?starttime=2016-04-07&endtime=2016-04-10&p=4">4</a></li><li><a href="/order/index?starttime=2016-04-07&endtime=2016-04-10&p=5">5</a></li><li><a href="/order/index?starttime=2016-04-07&endtime=2016-04-10&p=6">6</a></li><li><a href="/order/index?starttime=2016-04-07&endtime=2016-04-10&p=7">7</a></li><li><a href="/order/index?starttime=2016-04-07&endtime=2016-04-10&p=8">8</a></li><li><a href="/order/index?starttime=2016-04-07&endtime=2016-04-10&p=9">9</a></li><li><a href="/order/index?starttime=2016-04-07&endtime=2016-04-10&p=10">10</a></li><li><a href="/order/index?starttime=2016-04-07&endtime=2016-04-10&p=11">11</a></li><li><a href="/order/index?starttime=2016-04-07&endtime=2016-04-10&p=2">Next</a></li><li><a href="/order/index?starttime=2016-04-07&endtime=2016-04-10&p=13">Last</a></li></ul>	</div>
</div></div>
