<div class="container-fluid main-container">
	<?= $this->render('/layouts/menu'); ?>
	<div class="container-fluid">
    <div class="location">
    	您的位置：<a href="/site/index" class="active">控制台</a>
    </div>
    
    <div class="page-header clearfix">
        <h1 class="pull-left"><i class="fa fa-tachometer fa-fw"></i> 控制台</h1>
    </div>
    
    <div class="home-wrapper">
        <div class="home-row">
            <div class="home-col">
                <h3>商品管理</h3>
                	今日待发货  <span class="label label-warning">1</span> 单；已付款 <span class="label label-primary">0</span> 单；应收款 <span class="label label-info">88888.00</span> 元</p>          
                <a class="btn btn-primary btn-good-static" href="/goods">
                                               已上架商品 <span class="badge">1</span> <i class="fa fa-angle-right"></i>
                </a>
                
                <a class="btn btn-primary btn-good-static" href="/goods/unsale">
                                               未上架商品 <span class="badge">8</span> <i class="fa fa-angle-right"></i>
                </a>
                
                <a class="btn btn-primary btn-good-static" href="/goods/lowstock">
                                               待补货商品 <i class="fa fa-angle-right"></i>
                </a>
            </div>
            <div class="home-col">
                <h3>结算流水</h3>
                <p class="color-999">您上架商品的销售和提现产生的流水</p>
                                           商户总收入 <span class="badge">0.00</span>元； 已结算 <span class="badge">0.00</span>元，冻结3天的收入金额共<span class="badge badge-red">0</span>元。
                <a href="/cash">查看更多</a>
                
            </div>
            
         </div>
         <div class="home-row">
            <div class="home-col">
                <h3>商品销售排名</h3>
                 <p class="color-999">您上架商品销量排名</p>
                <table class="table table-condensed goodlist-table">

			        <thead>
			            <tr class="active">
			            	<th width="20">排名</th>
			                <th width="250">商品名</th>
			                <th width="60">销量</th>
			                
			            </tr>
			        </thead>
			        <tbody>
			        			            <tr>
			                <td>
			                    1			                </td>
			                <td>
			                    <a href="/goods/create?goods_id=29739">极速金属时尚随身U盘16G</a>
			                </td>
			                <td>
			                    2428			                </td>
			            </tr>
         			 			            <tr>
			                <td>
			                    2			                </td>
			                <td>
			                    <a href="/goods/create?goods_id=29515">【吹控感应开关】复古个性煤油灯LED灯床头小夜灯</a>
			                </td>
			                <td>
			                    1415			                </td>
			            </tr>
         			 			            <tr>
			                <td>
			                    3			                </td>
			                <td>
			                    <a href="/goods/create?goods_id=35047">极速金属时尚随身U盘</a>
			                </td>
			                <td>
			                    943			                </td>
			            </tr>
         			 			            <tr>
			                <td>
			                    4			                </td>
			                <td>
			                    <a href="/goods/create?goods_id=52837">Apple/苹果 型号备注</a>
			                </td>
			                <td>
			                    214			                </td>
			            </tr>
         			 			            <tr>
			                <td>
			                    5			                </td>
			                <td>
			                    <a href="/goods/create?goods_id=52849">超级防爆手机钢化膜 9H硬度+ 安装神器  傻瓜贴膜工具下单备注手机型号</a>
			                </td>
			                <td>
			                    39			                </td>
			            </tr>
         			 			            <tr>
			                <td>
			                    6			                </td>
			                <td>
			                    <a href="/goods/create?goods_id=56127">32GB极速u盘</a>
			                </td>
			                <td>
			                    34			                </td>
			            </tr>
         			 			            <tr>
			                <td>
			                    7			                </td>
			                <td>
			                    <a href="/goods/create?goods_id=52879">超级防爆手机钢化膜 9H硬度+ 安装神器  傻瓜贴膜工具下单备注手机型号</a>
			                </td>
			                <td>
			                    21			                </td>
			            </tr>
         			 			            <tr>
			                <td>
			                    8			                </td>
			                <td>
			                    <a href="/goods/create?goods_id=52839">超级防爆手机钢化膜 9H硬度+ 安装神器  傻瓜贴膜工具下单备注手机型号</a>
			                </td>
			                <td>
			                    13			                </td>
			            </tr>
         			 			            <tr>
			                <td>
			                    9			                </td>
			                <td>
			                    <a href="/goods/create?goods_id=52865">超级防爆手机钢化膜 9H硬度+ 安装神器  傻瓜贴膜工具下单备注手机型号</a>
			                </td>
			                <td>
			                    13			                </td>
			            </tr>
         			 			            <tr>
			                <td>
			                    10			                </td>
			                <td>
			                    <a href="/goods/create?goods_id=52846">超级防爆手机钢化膜 9H硬度+ 安装神器  傻瓜贴膜工具下单备注手机型号</a>
			                </td>
			                <td>
			                    12			                </td>
			            </tr>
         			 			        			        </tbody>
      			</table>
               <a href="/order">查看更多</a>
                
            </div>
            <div class="home-col">
                <h3>本周销售 </h3>
                <p class="color-999">本周已售商品的销量和金额</p>          
               <table class="table table-condensed goodlist-table">
			        <thead>
			            <tr class="active">
			            	<th width="150">时间</th>
			                <th width="100">订单数</th>
			                <th width="60">金额</th>
			                
			            </tr>
			        </thead>
			        <tbody>
			        			            <tr>
			                <td class="color-777">
			                    <small>2016-04-04</small>
			                </td>
			                <td class="color-777">
			                    <small>161</small>
			                </td>
			                <td class="color-777">
			                   <small>2816.00</small>
			                </td>
			            </tr>
         			 			            <tr>
			                <td class="color-777">
			                    <small>2016-04-05</small>
			                </td>
			                <td class="color-777">
			                    <small>103</small>
			                </td>
			                <td class="color-777">
			                   <small>2152.00</small>
			                </td>
			            </tr>
         			 			            <tr>
			                <td class="color-777">
			                    <small>2016-04-06</small>
			                </td>
			                <td class="color-777">
			                    <small>101</small>
			                </td>
			                <td class="color-777">
			                   <small>2054.00</small>
			                </td>
			            </tr>
         			 			            <tr>
			                <td class="color-777">
			                    <small>2016-04-07</small>
			                </td>
			                <td class="color-777">
			                    <small>53</small>
			                </td>
			                <td class="color-777">
			                   <small>1144.00</small>
			                </td>
			            </tr>
         			 			            <tr>
			                <td class="color-777">
			                    <small>2016-04-08</small>
			                </td>
			                <td class="color-777">
			                    <small>0</small>
			                </td>
			                <td class="color-777">
			                   <small>0</small>
			                </td>
			            </tr>
         			 			            <tr>
			                <td class="color-777">
			                    <small>2016-04-09</small>
			                </td>
			                <td class="color-777">
			                    <small>0</small>
			                </td>
			                <td class="color-777">
			                   <small>0</small>
			                </td>
			            </tr>
         			 			            <tr>
			                <td class="color-777">
			                    <small>2016-04-10</small>
			                </td>
			                <td class="color-777">
			                    <small>0</small>
			                </td>
			                <td class="color-777">
			                   <small>0</small>
			                </td>
			            </tr>
         			 			        			        </tbody>
      			</table>
               
                <a href="/order/sale">查看更多</a>
            </div>
        </div>
        <div class="home-row">
            <div class="home-col">
                <h3>商户积分</h3>
                <p class="color-999">您当前的商户积分为<font class="color-red">0.5</font>分</p>
               	<table class="table table-condensed goodlist-table">
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
			            <td valign="middle" width="60" class="color-777"><small>1</small></td>
			            <td valign="middle" class="color-777"><small>0.5</small></td>
			 			<td valign="middle" class="color-777"><small>秒杀</small></td>
			 			<td valign="middle" class="color-777"><small>张霞霞</small></td>
			            <td valign="middle" class="color-888"><small>2016-04-07 16:41:03</small></td>
			            </tr>
			          			          			          
			        </tbody>
			      </table>
			      <a href="/credit/index">查看更多</a>
            </div>
            <div class="home-col">
                <h3>零购联系方式</h3>
                <p class="color-666 home-contacts">
					<i class="fa fa-phone fa-fw color-999"></i> 咨询热线：xxxxxxxxx<br />
	            	<i class="fa fa-envelope-o fa-fw color-999"></i> 意见反馈：xxxxx@lucky-peple.cn<br />
	            	<i class="fa fa-qq fa-fw color-999"></i> 在线咨询：xxxxxxxx<br />
	            	<i class="fa fa-map-signs fa-fw color-999"></i> 公司地址：深圳市华强北路华强大厦A座16B
    			</p>
            </div>
        </div>
    </div>
</div></div>
