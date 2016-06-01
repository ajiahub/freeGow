<div class="container-fluid main-container">
	<div class="site-menu">
	<?= $this->render('/layouts/menu'); ?>
	<ul class="nav nav-pills nav-stacked site-menu-item ">
		<li class="menu-label">
			<a href="javascript:void(0);">控制台</a>
		</li>
		<li>
			<a href="/">
				<i class="fa fa-tachometer fa-fw"></i>
				<span class="glyphicon glyphicon-menu-right pull-right"></span>
				控制台
			</a>
		</li>
		<li>
			<a href="/jifen/index">
				<i class="fa fa-clone fa-fw"></i>
				<span class="glyphicon glyphicon-menu-right pull-right"></span>
				商户积分明细
			</a>
		</li>
		<li>
			<a href="/seller/bankcard">
				<i class="fa fa-credit-card fa-fw"></i>
				<span class="glyphicon glyphicon-menu-right pull-right"></span>
				绑定银行卡
			</a>
		</li>
		<li>
			<a href="/seller/create">
				<i class="fa fa-money fa-fw"></i>
				<span class="glyphicon glyphicon-menu-right pull-right"></span>
				商户提现
			</a>
		</li>
		<li>
			<a href="/seller/txlog">
				<i class="fa fa-history fa-fw"></i>
				<span class="glyphicon glyphicon-menu-right pull-right"></span>
				提现流水
			</a>
		</li>
	</ul>
	<ul class="nav nav-pills nav-stacked site-menu-item ">
		<li class="menu-label">
			<a href="javascript:void(0);">信息中心 </a>
		</li>
		<li>
			<a href="/msg/index">
				<i class="fa fa-file-text-o fa-fw"></i>
				<span class="glyphicon glyphicon-menu-right pull-right"></span>
				信息中心
			</a>
		</li>
	</ul>
	<ul class="nav nav-pills nav-stacked site-menu-item ">
		<li class="menu-label">
			<a href="javascript:void(0);">举报投诉管理</a>
		</li>
		<li>
			<a href="/report/index">
				<i class="fa fa-comments-o fa-fw"></i>
				<span class="glyphicon glyphicon-menu-right pull-right"></span>
				举报投诉列表
			</a>
		</li>
		<li>
			<a href="/report/static">
				<i class="fa fa-area-chart fa-fw"></i>
				<span class="glyphicon glyphicon-menu-right pull-right"></span>
				趋势图
			</a>
		</li>
		<li>
			<a href="/report/chart">
				<i class="fa fa-pie-chart fa-fw"></i>
				<span class="glyphicon glyphicon-menu-right pull-right"></span>
				结构图
			</a>
		</li>
	</ul>
	<ul class="nav nav-pills nav-stacked site-menu-item">
		<li class="menu-label">
			<a href="javascript:void(0);">商品管理</a>
		</li>
		<li>
			<a href="/good">
				<i class="fa fa-star-o fa-fw"></i>
				<span class="glyphicon glyphicon-menu-right pull-right"></span>
				已上架商品
			</a>
		</li>
		<li>
			<a href="/good/unsale">
				<i class="fa fa-flag fa-fw"></i>
				<span class="glyphicon glyphicon-menu-right pull-right"></span>
				未上架商品
			</a>
		</li>
	   	<li>
			<a href="/good/lowstock">
				<i class="fa fa-info-circle fa-fw"></i>
				<span class="glyphicon glyphicon-menu-right pull-right"></span>
				待补货商品
			</a>
		</li>
		<li>
			<a href="/good/add">
				<i class="fa fa-plus-circle fa-fw"></i>
				<span class="glyphicon glyphicon-menu-right pull-right"></span>
				添加新商品
			</a>
		</li>
		<li>
			<a href="/good/comments">
				<i class="fa fa-comment fa-fw"></i>
				<span class="glyphicon glyphicon-menu-right pull-right"></span>
				商品评论管理
			</a>
		</li>
	</ul>
	<ul class="nav nav-pills nav-stacked site-menu-item">
		<li class="menu-label">
			<a href="javascript:void(0);">订单中心</a>
		</li>
		<li>
			<a href="/order">
				<i class="fa fa-database fa-fw"></i>
				<span class="glyphicon glyphicon-menu-right pull-right"></span>
				订单列表
			</a>
		</li>
		<li>
			<a href="/order/deliver">
				<i class="fa fa-truck fa-fw"></i>
				<span class="glyphicon glyphicon-menu-right pull-right"></span>
				批量发货
			</a>
		</li>
		
		<li>
			<a href="/order/sale">
				<i class="fa fa-bar-chart fa-fw"></i>
				<span class="glyphicon glyphicon-menu-right pull-right"></span>
				销量统计
			</a>
		</li>
		<li>
			<a href="/order/chart">
				<i class="fa fa-pie-chart fa-fw"></i>
				<span class="glyphicon glyphicon-menu-right pull-right"></span>
				报表查询
			</a>
		</li>
	</ul>
	<ul class="nav nav-pills nav-stacked site-menu-item current-menu">
		<li class="menu-label">
			<a href="javascript:void(0);">结算中心</a>
		</li>
		<li>
			<a href="/cash">
				<i class="fa fa-list fa-fw"></i>
				<span class="glyphicon glyphicon-menu-right pull-right"></span>
				结算流水
			</a>
		</li>
		<li class="active">
			<a href="/cash/IsCash">
				<i class="fa fa-calendar-check-o fa-fw"></i>
				<span class="glyphicon glyphicon-menu-right pull-right"></span>
				结算订单
			</a>
		</li>
	</ul>
</div>
	<div class="container-fluid">
    <div class="location">
    	您的位置：<a href="/">控制台</a><a href="/cash">结算中心</a><a href="javascript:void(0);" class="active">结算信息</a>
    </div>
    <div class="text-left">
		 <form class="form-inline filter-form" action="/cash/IsCash" method="get">
    		<div class="form-group">
    		<div class="form-group">
                <input type="text" class="form-control input-sm" name="order_sn" placeholder="订单号" value="">
            </div>
            <div class="form-group">
                <input type="text" class="form-control input-sm" name="goods_name" placeholder="商品名字" value="">
            </div>
            <div class="form-group">
        		<label></label>
				<select class="form-control input-sm" name="balance" id="balance">
				
				<option value="0" selected>未结算</option>
		     	<option value="1" >已结算</option>
		     	</select>
    		 </div>
    		<input type="text" id="starttime" name="starttime" value="2016-04-07" class="form-control input-sm" style="width: 90px;" onFocus="WdatePicker({dateFmt:'yyyy-MM-dd'})" />
                           &nbsp;至&nbsp;
                           <input type="text" id="endtime" name="endtime" value="2016-04-10" class="form-control input-sm" style="width: 90px;" onFocus="WdatePicker({dateFmt:'yyyy-MM-dd'})" />
            </div>    
    		
            
            <button type="submit" class="btn btn-default btn-sm"><i class="fa fa-arrow-circle-o-right"></i> 提交</button>
            
    	</form>
	</div>
	<div class="alert alert-info page-alert">当前时间段内,已结算金额:40.00元,未结算金额:4936.00元</div>
	<div class="site-alert alert hide"></div>
<script type="text/javascript">
var note = '';
jQuery(function (){
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
	   
      <table class="table datalist-table">
        <thead>
            <tr class="active">
            <th colspan="2"><label class="checkbox-inline"> 订单</label> </th>
                <th width="60">结算价</th>
                <th width="150">规格</th>
                <th width="60">数量</th>
                <th width="100">收货人姓名</th>
                <th width="240">收货人信息</th>
                <th width="110">时间</th>
                <th>状态</th>
                
            </tr>
        </thead>
        <tbody>
                    <tr>
                <td>
                    <a href="/order/view?order_sn=201604070907f8b2dd1f&url=%2Fcash%2FIsCash" class="good-cover">
                        <img src="http://p3.0gow.com/pic0gow_5696901f136d4?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" />
                    </a>
                </td>
                <td><h4><a href="/order/view?order_sn=201604070907f8b2dd1f&url=%2Fcash%2FIsCash">订单号：201604070907f8b2dd1f</a></h4>
                    <p class="color-888">复古个性煤油灯LED灯床头灯</p>
                    
                   <span class="label label-success">已付款</span>
                    
                    
                    <span class="label label-info">已发货</span>

                    
                    <span class="label label-primary">已处理</span>
                    
                    
                    
                </td>
                <td><p class="color-999">16.00</p></td>
                <td><p class="color-999"></p></td>
                <td><p class="color-999">x 1</p></td>
                <td><p class="color-333">邵建军</p></td>
                
                <td><p class="color-999">北京 市辖区 房山区</p>
                <p class="color-999">13671031261</p>
                <p class="color-999">北京市房山区长阳镇朱岗子村三区49号</p>
                </td>
                
                <td><p class="color-999">04/07 00:09:24</p></td>
                <td>
                    <div class="btn-group btn-group-lg">
                         <span class="label label-warning"> 未结算</span>
                    </div>
                </td>
            </tr>
                      <tr>
                <td>
                    <a href="/order/view?order_sn=201604073b82f8341b56&url=%2Fcash%2FIsCash" class="good-cover">
                        <img src="http://p3.0gow.com/pic0gow_56e589e36538a?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" />
                    </a>
                </td>
                <td><h4><a href="/order/view?order_sn=201604073b82f8341b56&url=%2Fcash%2FIsCash">订单号：201604073b82f8341b56</a></h4>
                    <p class="color-888">32GB极速u盘</p>
                    
                   <span class="label label-success">已付款</span>
                    
                    
                    <span class="label label-info">已发货</span>

                    
                    <span class="label label-primary">已处理</span>
                    
                    
                    
                </td>
                <td><p class="color-999">44.00</p></td>
                <td><p class="color-999"></p></td>
                <td><p class="color-999">x 1</p></td>
                <td><p class="color-333">暨祥</p></td>
                
                <td><p class="color-999">湖南 长沙市 浏阳市</p>
                <p class="color-999">15111075012</p>
                <p class="color-999">浏阳市白沙路36号，五福堂酒业有限公司</p>
                </td>
                
                <td><p class="color-999">04/07 00:47:52</p></td>
                <td>
                    <div class="btn-group btn-group-lg">
                         <span class="label label-warning"> 未结算</span>
                    </div>
                </td>
            </tr>
                      <tr>
                <td>
                    <a href="/order/view?order_sn=20160407fd440084e62f&url=%2Fcash%2FIsCash" class="good-cover">
                        <img src="http://p3.0gow.com/pic0gow_5696901f136d4?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" />
                    </a>
                </td>
                <td><h4><a href="/order/view?order_sn=20160407fd440084e62f&url=%2Fcash%2FIsCash">订单号：20160407fd440084e62f</a></h4>
                    <p class="color-888">复古个性煤油灯LED灯床头灯</p>
                    
                   <span class="label label-success">已付款</span>
                    
                    
                    <span class="label label-info">已发货</span>

                    
                    <span class="label label-primary">已处理</span>
                    
                    
                    
                </td>
                <td><p class="color-999">16.00</p></td>
                <td><p class="color-999"></p></td>
                <td><p class="color-999">x 1</p></td>
                <td><p class="color-333">黄超年</p></td>
                
                <td><p class="color-999">广西 南宁市 宾阳县</p>
                <p class="color-999">13788012357</p>
                <p class="color-999">广西南宁宾阳县黎塘镇三李区委会李九村44号</p>
                </td>
                
                <td><p class="color-999">04/07 00:55:45</p></td>
                <td>
                    <div class="btn-group btn-group-lg">
                         <span class="label label-warning"> 未结算</span>
                    </div>
                </td>
            </tr>
                      <tr>
                <td>
                    <a href="/order/view?order_sn=201604076a4632a9e6d7&url=%2Fcash%2FIsCash" class="good-cover">
                        <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" />
                    </a>
                </td>
                <td><h4><a href="/order/view?order_sn=201604076a4632a9e6d7&url=%2Fcash%2FIsCash">订单号：201604076a4632a9e6d7</a></h4>
                    <p class="color-888">极速金属时尚随身U盘16G</p>
                    
                   <span class="label label-success">已付款</span>
                    
                    
                    <span class="label label-info">已发货</span>

                    
                    <span class="label label-primary">已处理</span>
                    
                    
                    
                </td>
                <td><p class="color-999">20.00</p></td>
                <td><p class="color-999"></p></td>
                <td><p class="color-999">x 1</p></td>
                <td><p class="color-333">钟继良</p></td>
                
                <td><p class="color-999">广东 深圳市 宝安区</p>
                <p class="color-999">13927495115</p>
                <p class="color-999">光明新区体育路99号高尔夫球会后门保安室</p>
                </td>
                
                <td><p class="color-999">04/07 03:25:01</p></td>
                <td>
                    <div class="btn-group btn-group-lg">
                         <span class="label label-warning"> 未结算</span>
                    </div>
                </td>
            </tr>
                      <tr>
                <td>
                    <a href="/order/view?order_sn=20160407e14808dbda39&url=%2Fcash%2FIsCash" class="good-cover">
                        <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" />
                    </a>
                </td>
                <td><h4><a href="/order/view?order_sn=20160407e14808dbda39&url=%2Fcash%2FIsCash">订单号：20160407e14808dbda39</a></h4>
                    <p class="color-888">极速金属时尚随身U盘16G</p>
                    
                   <span class="label label-success">已付款</span>
                    
                    
                    <span class="label label-info">已发货</span>

                    
                    <span class="label label-primary">已处理</span>
                    
                    
                    
                </td>
                <td><p class="color-999">20.00</p></td>
                <td><p class="color-999"></p></td>
                <td><p class="color-999">x 1</p></td>
                <td><p class="color-333">孙丽梅</p></td>
                
                <td><p class="color-999">吉林 长春市 绿园区</p>
                <p class="color-999">18644989268</p>
                <p class="color-999">吉林省长春市绿园区创业大街洛阳街3455号，门卫代收</p>
                </td>
                
                <td><p class="color-999">04/07 04:42:01</p></td>
                <td>
                    <div class="btn-group btn-group-lg">
                         <span class="label label-warning"> 未结算</span>
                    </div>
                </td>
            </tr>
                      <tr>
                <td>
                    <a href="/order/view?order_sn=20160407f3ee2202e179&url=%2Fcash%2FIsCash" class="good-cover">
                        <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" />
                    </a>
                </td>
                <td><h4><a href="/order/view?order_sn=20160407f3ee2202e179&url=%2Fcash%2FIsCash">订单号：20160407f3ee2202e179</a></h4>
                    <p class="color-888">极速金属时尚随身U盘16G</p>
                    
                   <span class="label label-success">已付款</span>
                    
                    
                    <span class="label label-info">已发货</span>

                    
                    <span class="label label-primary">已处理</span>
                    
                    
                    
                </td>
                <td><p class="color-999">20.00</p></td>
                <td><p class="color-999"></p></td>
                <td><p class="color-999">x 1</p></td>
                <td><p class="color-333">宋玉芝</p></td>
                
                <td><p class="color-999">上海 市辖区 浦东新区</p>
                <p class="color-999">15221889738</p>
                <p class="color-999">浦三路858弄5号202室</p>
                </td>
                
                <td><p class="color-999">04/07 04:47:32</p></td>
                <td>
                    <div class="btn-group btn-group-lg">
                         <span class="label label-warning"> 未结算</span>
                    </div>
                </td>
            </tr>
                      <tr>
                <td>
                    <a href="/order/view?order_sn=20160407e0d2cd21624d&url=%2Fcash%2FIsCash" class="good-cover">
                        <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" />
                    </a>
                </td>
                <td><h4><a href="/order/view?order_sn=20160407e0d2cd21624d&url=%2Fcash%2FIsCash">订单号：20160407e0d2cd21624d</a></h4>
                    <p class="color-888">极速金属时尚随身U盘16G</p>
                    
                   <span class="label label-success">已付款</span>
                    
                    
                    <span class="label label-info">已发货</span>

                    
                    <span class="label label-primary">已处理</span>
                    
                    
                    
                </td>
                <td><p class="color-999">20.00</p></td>
                <td><p class="color-999"></p></td>
                <td><p class="color-999">x 1</p></td>
                <td><p class="color-333">吴杰山</p></td>
                
                <td><p class="color-999">江苏 无锡市 滨湖区</p>
                <p class="color-999">13830904567</p>
                <p class="color-999">江苏省无锡市滨湖区湖滨路3号，金至尊国际娱乐会所，吴杰山，13830904567</p>
                </td>
                
                <td><p class="color-999">04/07 05:42:01</p></td>
                <td>
                    <div class="btn-group btn-group-lg">
                         <span class="label label-warning"> 未结算</span>
                    </div>
                </td>
            </tr>
                      <tr>
                <td>
                    <a href="/order/view?order_sn=20160407995f290ef166&url=%2Fcash%2FIsCash" class="good-cover">
                        <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" />
                    </a>
                </td>
                <td><h4><a href="/order/view?order_sn=20160407995f290ef166&url=%2Fcash%2FIsCash">订单号：20160407995f290ef166</a></h4>
                    <p class="color-888">极速金属时尚随身U盘16G</p>
                    
                   <span class="label label-success">已付款</span>
                    
                    
                    <span class="label label-info">已发货</span>

                    
                    <span class="label label-primary">已处理</span>
                    
                    
                    
                </td>
                <td><p class="color-999">20.00</p></td>
                <td><p class="color-999"></p></td>
                <td><p class="color-999">x 1</p></td>
                <td><p class="color-333">北京市西城区月坛北街25号18号楼603</p></td>
                
                <td><p class="color-999">河北 保定市 新市区</p>
                <p class="color-999">15313353570</p>
                <p class="color-999">保定市新市区棉仿厂宿舍52号楼7室</p>
                </td>
                
                <td><p class="color-999">04/07 05:46:00</p></td>
                <td>
                    <div class="btn-group btn-group-lg">
                         <span class="label label-warning"> 未结算</span>
                    </div>
                </td>
            </tr>
                      <tr>
                <td>
                    <a href="/order/view?order_sn=201604076ce5695d473b&url=%2Fcash%2FIsCash" class="good-cover">
                        <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" />
                    </a>
                </td>
                <td><h4><a href="/order/view?order_sn=201604076ce5695d473b&url=%2Fcash%2FIsCash">订单号：201604076ce5695d473b</a></h4>
                    <p class="color-888">极速金属时尚随身U盘16G</p>
                    
                   <span class="label label-success">已付款</span>
                    
                    
                    <span class="label label-info">已发货</span>

                    
                    <span class="label label-primary">已处理</span>
                    
                    
                    
                </td>
                <td><p class="color-999">20.00</p></td>
                <td><p class="color-999"></p></td>
                <td><p class="color-999">x 1</p></td>
                <td><p class="color-333">安学文</p></td>
                
                <td><p class="color-999">山东 烟台市 莱山区</p>
                <p class="color-999">17862890335</p>
                <p class="color-999">观海路滨州医学院</p>
                </td>
                
                <td><p class="color-999">04/07 08:24:37</p></td>
                <td>
                    <div class="btn-group btn-group-lg">
                         <span class="label label-warning"> 未结算</span>
                    </div>
                </td>
            </tr>
                      <tr>
                <td>
                    <a href="/order/view?order_sn=201604075aa43055b63e&url=%2Fcash%2FIsCash" class="good-cover">
                        <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" />
                    </a>
                </td>
                <td><h4><a href="/order/view?order_sn=201604075aa43055b63e&url=%2Fcash%2FIsCash">订单号：201604075aa43055b63e</a></h4>
                    <p class="color-888">极速金属时尚随身U盘16G</p>
                    
                   <span class="label label-success">已付款</span>
                    
                    
                    <span class="label label-info">已发货</span>

                    
                    <span class="label label-primary">已处理</span>
                    
                    
                    
                </td>
                <td><p class="color-999">20.00</p></td>
                <td><p class="color-999"></p></td>
                <td><p class="color-999">x 1</p></td>
                <td><p class="color-333">韩甜甜</p></td>
                
                <td><p class="color-999">陕西 咸阳市 兴平市</p>
                <p class="color-999">15091801791</p>
                <p class="color-999">兴平市中心大街雨露花园</p>
                </td>
                
                <td><p class="color-999">04/07 08:25:53</p></td>
                <td>
                    <div class="btn-group btn-group-lg">
                         <span class="label label-warning"> 未结算</span>
                    </div>
                </td>
            </tr>
                      <tr>
                <td>
                    <a href="/order/view?order_sn=20160407fa8c9431ceda&url=%2Fcash%2FIsCash" class="good-cover">
                        <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" />
                    </a>
                </td>
                <td><h4><a href="/order/view?order_sn=20160407fa8c9431ceda&url=%2Fcash%2FIsCash">订单号：20160407fa8c9431ceda</a></h4>
                    <p class="color-888">极速金属时尚随身U盘16G</p>
                    
                   <span class="label label-success">已付款</span>
                    
                    
                    <span class="label label-info">已发货</span>

                    
                    <span class="label label-primary">已处理</span>
                    
                    
                    
                </td>
                <td><p class="color-999">20.00</p></td>
                <td><p class="color-999"></p></td>
                <td><p class="color-999">x 1</p></td>
                <td><p class="color-333">付争光</p></td>
                
                <td><p class="color-999">江苏 苏州市 太仓市</p>
                <p class="color-999">17712695018</p>
                <p class="color-999">滨河路大庆锦绣新城雍景苑14栋101室</p>
                </td>
                
                <td><p class="color-999">04/07 08:48:58</p></td>
                <td>
                    <div class="btn-group btn-group-lg">
                         <span class="label label-warning"> 未结算</span>
                    </div>
                </td>
            </tr>
                      <tr>
                <td>
                    <a href="/order/view?order_sn=2016040761248152d6fb&url=%2Fcash%2FIsCash" class="good-cover">
                        <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" />
                    </a>
                </td>
                <td><h4><a href="/order/view?order_sn=2016040761248152d6fb&url=%2Fcash%2FIsCash">订单号：2016040761248152d6fb</a></h4>
                    <p class="color-888">极速金属时尚随身U盘16G</p>
                    
                   <span class="label label-success">已付款</span>
                    
                    
                    <span class="label label-info">已发货</span>

                    
                    <span class="label label-primary">已处理</span>
                    
                    
                    
                </td>
                <td><p class="color-999">20.00</p></td>
                <td><p class="color-999"></p></td>
                <td><p class="color-999">x 1</p></td>
                <td><p class="color-333">兰汉发</p></td>
                
                <td><p class="color-999">福建 福州市 鼓楼区</p>
                <p class="color-999">13506991981</p>
                <p class="color-999">杨桥中路79号闽赋苑2号楼技术层</p>
                </td>
                
                <td><p class="color-999">04/07 08:54:44</p></td>
                <td>
                    <div class="btn-group btn-group-lg">
                         <span class="label label-warning"> 未结算</span>
                    </div>
                </td>
            </tr>
                      <tr>
                <td>
                    <a href="/order/view?order_sn=20160407f85ea80c7e4e&url=%2Fcash%2FIsCash" class="good-cover">
                        <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" />
                    </a>
                </td>
                <td><h4><a href="/order/view?order_sn=20160407f85ea80c7e4e&url=%2Fcash%2FIsCash">订单号：20160407f85ea80c7e4e</a></h4>
                    <p class="color-888">极速金属时尚随身U盘16G</p>
                    
                   <span class="label label-success">已付款</span>
                    
                    
                    <span class="label label-info">已发货</span>

                    
                    <span class="label label-primary">已处理</span>
                    
                    
                    
                </td>
                <td><p class="color-999">20.00</p></td>
                <td><p class="color-999"></p></td>
                <td><p class="color-999">x 1</p></td>
                <td><p class="color-333">樊海婷</p></td>
                
                <td><p class="color-999">山西 运城市 永济市</p>
                <p class="color-999">15835919983</p>
                <p class="color-999">北郊舜都市场移动公司</p>
                </td>
                
                <td><p class="color-999">04/07 09:16:13</p></td>
                <td>
                    <div class="btn-group btn-group-lg">
                         <span class="label label-warning"> 未结算</span>
                    </div>
                </td>
            </tr>
                      <tr>
                <td>
                    <a href="/order/view?order_sn=2016040795ef13c96c2b&url=%2Fcash%2FIsCash" class="good-cover">
                        <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" />
                    </a>
                </td>
                <td><h4><a href="/order/view?order_sn=2016040795ef13c96c2b&url=%2Fcash%2FIsCash">订单号：2016040795ef13c96c2b</a></h4>
                    <p class="color-888">极速金属时尚随身U盘16G</p>
                    
                   <span class="label label-success">已付款</span>
                    
                    
                    <span class="label label-info">已发货</span>

                    
                    <span class="label label-primary">已处理</span>
                    
                    
                    
                </td>
                <td><p class="color-999">20.00</p></td>
                <td><p class="color-999"></p></td>
                <td><p class="color-999">x 1</p></td>
                <td><p class="color-333">孙光明</p></td>
                
                <td><p class="color-999">上海 市辖区 闵行区</p>
                <p class="color-999">18601651139</p>
                <p class="color-999">上海市 闵行区 七宝镇 青年路25弄蒲汇公寓8号202室 </p>
                </td>
                
                <td><p class="color-999">04/07 09:32:56</p></td>
                <td>
                    <div class="btn-group btn-group-lg">
                         <span class="label label-warning"> 未结算</span>
                    </div>
                </td>
            </tr>
                      <tr>
                <td>
                    <a href="/order/view?order_sn=20160407a01e81ccd9c2&url=%2Fcash%2FIsCash" class="good-cover">
                        <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" />
                    </a>
                </td>
                <td><h4><a href="/order/view?order_sn=20160407a01e81ccd9c2&url=%2Fcash%2FIsCash">订单号：20160407a01e81ccd9c2</a></h4>
                    <p class="color-888">极速金属时尚随身U盘16G</p>
                    
                   <span class="label label-success">已付款</span>
                    
                    
                    <span class="label label-info">已发货</span>

                    
                    <span class="label label-primary">已处理</span>
                    
                    
                    
                </td>
                <td><p class="color-999">20.00</p></td>
                <td><p class="color-999"></p></td>
                <td><p class="color-999">x 1</p></td>
                <td><p class="color-333">范裕乐</p></td>
                
                <td><p class="color-999">广东 汕尾市 城　区</p>
                <p class="color-999">18023153789</p>
                <p class="color-999">海滨街89号渔政支队</p>
                </td>
                
                <td><p class="color-999">04/07 09:33:31</p></td>
                <td>
                    <div class="btn-group btn-group-lg">
                         <span class="label label-warning"> 未结算</span>
                    </div>
                </td>
            </tr>
                      <tr>
                <td>
                    <a href="/order/view?order_sn=201604072a26a568c131&url=%2Fcash%2FIsCash" class="good-cover">
                        <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" />
                    </a>
                </td>
                <td><h4><a href="/order/view?order_sn=201604072a26a568c131&url=%2Fcash%2FIsCash">订单号：201604072a26a568c131</a></h4>
                    <p class="color-888">极速金属时尚随身U盘16G</p>
                    
                   <span class="label label-success">已付款</span>
                    
                    
                    <span class="label label-info">已发货</span>

                    
                    <span class="label label-primary">已处理</span>
                    
                    
                    
                </td>
                <td><p class="color-999">20.00</p></td>
                <td><p class="color-999"></p></td>
                <td><p class="color-999">x 1</p></td>
                <td><p class="color-333">谢生</p></td>
                
                <td><p class="color-999">广东 潮州市 饶平县</p>
                <p class="color-999">13410043262</p>
                <p class="color-999">新丰镇</p>
                </td>
                
                <td><p class="color-999">04/07 09:43:27</p></td>
                <td>
                    <div class="btn-group btn-group-lg">
                         <span class="label label-warning"> 未结算</span>
                    </div>
                </td>
            </tr>
                      <tr>
                <td>
                    <a href="/order/view?order_sn=2016040776f805dd5443&url=%2Fcash%2FIsCash" class="good-cover">
                        <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" />
                    </a>
                </td>
                <td><h4><a href="/order/view?order_sn=2016040776f805dd5443&url=%2Fcash%2FIsCash">订单号：2016040776f805dd5443</a></h4>
                    <p class="color-888">极速金属时尚随身U盘16G</p>
                    
                   <span class="label label-success">已付款</span>
                    
                    
                    <span class="label label-info">已发货</span>

                    
                    <span class="label label-primary">已处理</span>
                    
                    
                    
                </td>
                <td><p class="color-999">20.00</p></td>
                <td><p class="color-999"></p></td>
                <td><p class="color-999">x 1</p></td>
                <td><p class="color-333">王先生</p></td>
                
                <td><p class="color-999">山东 济宁市 梁山县</p>
                <p class="color-999">18753779888</p>
                <p class="color-999">水泊中路108号黄金海岸楼下第七街冷饮店！</p>
                </td>
                
                <td><p class="color-999">04/07 09:50:33</p></td>
                <td>
                    <div class="btn-group btn-group-lg">
                         <span class="label label-warning"> 未结算</span>
                    </div>
                </td>
            </tr>
                      <tr>
                <td>
                    <a href="/order/view?order_sn=2016040758e2336790c3&url=%2Fcash%2FIsCash" class="good-cover">
                        <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" />
                    </a>
                </td>
                <td><h4><a href="/order/view?order_sn=2016040758e2336790c3&url=%2Fcash%2FIsCash">订单号：2016040758e2336790c3</a></h4>
                    <p class="color-888">极速金属时尚随身U盘16G</p>
                    
                   <span class="label label-success">已付款</span>
                    
                    
                    <span class="label label-info">已发货</span>

                    
                    <span class="label label-primary">已处理</span>
                    
                    
                    
                </td>
                <td><p class="color-999">20.00</p></td>
                <td><p class="color-999"></p></td>
                <td><p class="color-999">x 1</p></td>
                <td><p class="color-333">姜丽</p></td>
                
                <td><p class="color-999">黑龙江 牡丹江市 西安区</p>
                <p class="color-999">13836378072</p>
                <p class="color-999">南市街西三条路511号</p>
                </td>
                
                <td><p class="color-999">04/07 09:52:23</p></td>
                <td>
                    <div class="btn-group btn-group-lg">
                         <span class="label label-warning"> 未结算</span>
                    </div>
                </td>
            </tr>
                      <tr>
                <td>
                    <a href="/order/view?order_sn=20160407fdd956e53ebf&url=%2Fcash%2FIsCash" class="good-cover">
                        <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" />
                    </a>
                </td>
                <td><h4><a href="/order/view?order_sn=20160407fdd956e53ebf&url=%2Fcash%2FIsCash">订单号：20160407fdd956e53ebf</a></h4>
                    <p class="color-888">极速金属时尚随身U盘16G</p>
                    
                   <span class="label label-success">已付款</span>
                    
                    
                    <span class="label label-info">已发货</span>

                    
                    <span class="label label-primary">已处理</span>
                    
                    
                    
                </td>
                <td><p class="color-999">20.00</p></td>
                <td><p class="color-999"></p></td>
                <td><p class="color-999">x 1</p></td>
                <td><p class="color-333">陈瑞发</p></td>
                
                <td><p class="color-999">江苏 泰州市 海陵区</p>
                <p class="color-999">13625172881</p>
                <p class="color-999">塘湾工业园十二号，五菱汽车4s店</p>
                </td>
                
                <td><p class="color-999">04/07 09:53:49</p></td>
                <td>
                    <div class="btn-group btn-group-lg">
                         <span class="label label-warning"> 未结算</span>
                    </div>
                </td>
            </tr>
                      <tr>
                <td>
                    <a href="/order/view?order_sn=20160407fa6642ad140f&url=%2Fcash%2FIsCash" class="good-cover">
                        <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" />
                    </a>
                </td>
                <td><h4><a href="/order/view?order_sn=20160407fa6642ad140f&url=%2Fcash%2FIsCash">订单号：20160407fa6642ad140f</a></h4>
                    <p class="color-888">极速金属时尚随身U盘16G</p>
                    
                   <span class="label label-success">已付款</span>
                    
                    
                    <span class="label label-info">已发货</span>

                    
                    <span class="label label-primary">已处理</span>
                    
                    
                    
                </td>
                <td><p class="color-999">20.00</p></td>
                <td><p class="color-999"></p></td>
                <td><p class="color-999">x 1</p></td>
                <td><p class="color-333">陈建金</p></td>
                
                <td><p class="color-999">江苏 宿迁市 泗洪县</p>
                <p class="color-999">13511797060</p>
                <p class="color-999">双沟国土资源所</p>
                </td>
                
                <td><p class="color-999">04/07 10:05:37</p></td>
                <td>
                    <div class="btn-group btn-group-lg">
                         <span class="label label-warning"> 未结算</span>
                    </div>
                </td>
            </tr>
                            </tbody>
       
      </table>

    </div>
	<div class="text-center">
	   <ul class="pagination pagination-sm"><li class="disabled"><a href="/cash/iscash?starttime=2016-04-07&endtime=2016-04-10&p=1">First</a></li><li class="disabled"><a href="/cash/iscash?starttime=2016-04-07&endtime=2016-04-10&p=0">Prev</a></li><li class="active"><a href="/cash/iscash?starttime=2016-04-07&endtime=2016-04-10&p=1">1</a></li><li><a href="/cash/iscash?starttime=2016-04-07&endtime=2016-04-10&p=2">2</a></li><li><a href="/cash/iscash?starttime=2016-04-07&endtime=2016-04-10&p=3">3</a></li><li><a href="/cash/iscash?starttime=2016-04-07&endtime=2016-04-10&p=4">4</a></li><li><a href="/cash/iscash?starttime=2016-04-07&endtime=2016-04-10&p=5">5</a></li><li><a href="/cash/iscash?starttime=2016-04-07&endtime=2016-04-10&p=6">6</a></li><li><a href="/cash/iscash?starttime=2016-04-07&endtime=2016-04-10&p=7">7</a></li><li><a href="/cash/iscash?starttime=2016-04-07&endtime=2016-04-10&p=8">8</a></li><li><a href="/cash/iscash?starttime=2016-04-07&endtime=2016-04-10&p=9">9</a></li><li><a href="/cash/iscash?starttime=2016-04-07&endtime=2016-04-10&p=10">10</a></li><li><a href="/cash/iscash?starttime=2016-04-07&endtime=2016-04-10&p=11">11</a></li><li><a href="/cash/iscash?starttime=2016-04-07&endtime=2016-04-10&p=2">Next</a></li><li><a href="/cash/iscash?starttime=2016-04-07&endtime=2016-04-10&p=13">Last</a></li></ul>	</div>
</div></div>
