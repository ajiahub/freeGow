<?php
$this->registerCssFile('@web/static/css/goods-common.css');
?>
<div class="container-fluid main-container">
    <?= $this->render('/layouts/menu'); ?>
	<div class="container-fluid">
    <div class="location">
    	您的位置：<a href="/">控制台</a><a href="/good">商品管理</a><a href="javascript:void(0);" class="active">未上架商品</a>
    </div>
    <div class="page-header clearfix">
        <h1 class="pull-left"><i class="fa fa-flag fa-fw"></i> 未上架商品</h1>
        <a class="btn btn-default" href="/goods/create">添加新商品</a>
    </div>
    <div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		  <div class="btn-group btn-group-sm">
		      <a href="/goods" class="btn btn-default">已上架商品</a>
		      <a href="/goods/unsale" class="btn btn-primary active">未上架商品</a>
		      <a href="/goods/lowstock" class="btn btn-default">待补货商品</a>
          </div>
		</div>

		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-right">
		 <form class="form-inline" action="/goods/unsale" method="post">
    		<div class="form-group">
                <input type="text" class="form-control input-sm" name="name" placeholder="商品名" value="">
            </div>
            <button type="submit" class="btn btn-default btn-sm">提交</button>
    	</form>
		</div>
	</div>
		<div class="alert alert-info alert-msg"><strong>公告：为了杜绝多次重复申请导致排队过长，提升审核效率！</strong><br />
	<small>注意：每款商品每周只有最多两次申请上架机会，如果都遭到拒绝上架，周内将无法再次申请上架…</small></div>
	
	<div class="table-responsive">
	<form class=" goods-list-form  shenqing" >
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
</script>      <table class="table goodlist-table">
        <thead>
            <tr class="active">
                <th colspan="3"><label class="checkbox-inline"><input type="checkbox" name="checkall"> 全选</label> </th>
                                <th width="130">价格</th>
                                                <th width="100">评论 </th>
                <th width="100">退款</th>
                                <th width="100">销量</th>
                <th width="60">查看</th>
                <th width="180"></th>
            </tr>
        </thead>
        <tbody>
                      <tr>
                <td width="35">
                    <label class="checkbox-inline"><input type="checkbox" name="good_id[]" value="58159">
                </td>
                <td width="80">
                    <a href="/goods/edit?goods_id=58159&url=%2Fgood%2Funsale" class="good-cover">
                        <img src="http://p3.0gow.com/pic0gow_56e90e33ea872?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" alt="点击图片预览" />
                    </a>
                </td>
                <td>
                    <h4><a href="/goods/edit?goods_id=58159&url=%2Fgood%2Funsale">64GB极速u盘</a></h4>

                    <span class="label label-info">基础</span>

                    <span class="label label-primary">已激活</span>

                    <span class="label label-danger">未上架</span>

                    <span class="label label-danger">上架被拒绝</span>
                                   </td>
                               <td>
                <ul class="list-unstyled">
                		<li><small class="color-999">结算价：88.00</small></li>
                		<li><small class="color-999">物流价: 0.00</small></li>
                		<li><small class="color-999">现价: 98.00</small></li>
                </ul>
                </td>
                                                 <td>
                	<ul class="list-unstyled">
                		<li><small class="color-999">好评率: 0%</small></li>
                		<li><small class="color-999">差评率: 0%</small></li>
                	</ul>
                </td>
                <td>
                	<ul class="list-unstyled">
                		<li><small class="color-999">退款数: 0</small></li>
                		<li><small class="color-999">退款率: 0%</small></li>
                	</ul>
                </td>
                                <td>
                    <p class="color-999">0</p>
                </td>
                <td>
                    <p class="color-999">0</p>
                </td>
                <td>
                    <div class="btn-group btn-group-lg">
                        <a href="http://www.0gow.com/goods/58159?yl=96358741" target="_blank" class="btn btn-link">
                            <i class="fa fa-lg fa-eye"></i>
                            <small>预览</small>
                        </a>
                        <a href="/goods/edit?goods_id=58159&url=%2Fgood%2Funsale" class="btn btn-link">
                            <i class="fa fa-lg fa-pencil-square-o"></i>
                            <small>编辑</small>
                        </a>
                        <a href="/goods/del?goods_id=58159&url=%2Fgood%2Funsale" class="btn btn-link btn-delete">
                            <i class="fa fa-lg fa-times"></i>
                            <small>删除</small>
                        </a>
                    </div>
                </td>
            </tr>
                      <tr>
                <td width="35">
                    <label class="checkbox-inline"><input type="checkbox" name="good_id[]" value="36974">
                </td>
                <td width="80">
                    <a href="/goods/edit?goods_id=36974&url=%2Fgood%2Funsale" class="good-cover">
                        <img src="http://p3.0gow.com/pic0gow_56ef3447eaf90?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" alt="点击图片预览" />
                    </a>
                </td>
                <td>
                    <h4><a href="/goods/edit?goods_id=36974&url=%2Fgood%2Funsale">多功能 懒人手机支架 </a></h4>

                    <span class="label label-info">基础</span>

                    <span class="label label-primary">已激活</span>

                    <span class="label label-danger">未上架</span>

                    <span class="label label-danger">上架被拒绝</span>
                                   </td>
                               <td>
                <ul class="list-unstyled">
                		<li><small class="color-999">结算价：10.00</small></li>
                		<li><small class="color-999">物流价: 12.00</small></li>
                		<li><small class="color-999">现价: 25.00</small></li>
                </ul>
                </td>
                                                 <td>
                	<ul class="list-unstyled">
                		<li><small class="color-999">好评率: 0%</small></li>
                		<li><small class="color-999">差评率: 0%</small></li>
                	</ul>
                </td>
                <td>
                	<ul class="list-unstyled">
                		<li><small class="color-999">退款数: 0</small></li>
                		<li><small class="color-999">退款率: 0%</small></li>
                	</ul>
                </td>
                                <td>
                    <p class="color-999">0</p>
                </td>
                <td>
                    <p class="color-999">0</p>
                </td>
                <td>
                    <div class="btn-group btn-group-lg">
                        <a href="http://www.0gow.com/goods/36974?yl=96358741" target="_blank" class="btn btn-link">
                            <i class="fa fa-lg fa-eye"></i>
                            <small>预览</small>
                        </a>
                        <a href="/goods/edit?goods_id=36974&url=%2Fgood%2Funsale" class="btn btn-link">
                            <i class="fa fa-lg fa-pencil-square-o"></i>
                            <small>编辑</small>
                        </a>
                        <a href="/goods/del?goods_id=36974&url=%2Fgood%2Funsale" class="btn btn-link btn-delete">
                            <i class="fa fa-lg fa-times"></i>
                            <small>删除</small>
                        </a>
                    </div>
                </td>
            </tr>
                      <tr>
                <td width="35">
                    <label class="checkbox-inline"><input type="checkbox" name="good_id[]" value="36959">
                </td>
                <td width="80">
                    <a href="/goods/edit?goods_id=36959&url=%2Fgood%2Funsale" class="good-cover">
                        <img src="http://p3.0gow.com/pic0gow_56c73f9194a2f?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" alt="点击图片预览" />
                    </a>
                </td>
                <td>
                    <h4><a href="/goods/edit?goods_id=36959&url=%2Fgood%2Funsale">胡椒器花椒研磨器2只装</a></h4>

                    <span class="label label-info">基础</span>

                    <span class="label label-primary">已激活</span>

                    <span class="label label-danger">未上架</span>

                    <span class="label label-danger">上架被拒绝</span>
                                   </td>
                               <td>
                <ul class="list-unstyled">
                		<li><small class="color-999">结算价：16.00</small></li>
                		<li><small class="color-999">物流价: 18.00</small></li>
                		<li><small class="color-999">现价: 28.00</small></li>
                </ul>
                </td>
                                                 <td>
                	<ul class="list-unstyled">
                		<li><small class="color-999">好评率: 0%</small></li>
                		<li><small class="color-999">差评率: 0%</small></li>
                	</ul>
                </td>
                <td>
                	<ul class="list-unstyled">
                		<li><small class="color-999">退款数: 0</small></li>
                		<li><small class="color-999">退款率: 0%</small></li>
                	</ul>
                </td>
                                <td>
                    <p class="color-999">0</p>
                </td>
                <td>
                    <p class="color-999">2</p>
                </td>
                <td>
                    <div class="btn-group btn-group-lg">
                        <a href="http://www.0gow.com/goods/36959?yl=96358741" target="_blank" class="btn btn-link">
                            <i class="fa fa-lg fa-eye"></i>
                            <small>预览</small>
                        </a>
                        <a href="/goods/edit?goods_id=36959&url=%2Fgood%2Funsale" class="btn btn-link">
                            <i class="fa fa-lg fa-pencil-square-o"></i>
                            <small>编辑</small>
                        </a>
                        <a href="/goods/del?goods_id=36959&url=%2Fgood%2Funsale" class="btn btn-link btn-delete">
                            <i class="fa fa-lg fa-times"></i>
                            <small>删除</small>
                        </a>
                    </div>
                </td>
            </tr>
                      <tr>
                <td width="35">
                    <label class="checkbox-inline"><input type="checkbox" name="good_id[]" value="29742">
                </td>
                <td width="80">
                    <a href="/goods/edit?goods_id=29742&url=%2Fgood%2Funsale" class="good-cover">
                        <img src="http://p3.0gow.com/pic0gow_5697e71eee067?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" alt="点击图片预览" />
                    </a>
                </td>
                <td>
                    <h4><a href="/goods/edit?goods_id=29742&url=%2Fgood%2Funsale">高速内TF存卡8G</a></h4>

                    <span class="label label-info">基础</span>

                    <span class="label label-primary">已激活</span>

                    <span class="label label-danger">未上架</span>

                    <span class="label label-danger">上架被拒绝</span>
                                   </td>
                               <td>
                <ul class="list-unstyled">
                		<li><small class="color-999">结算价：17.00</small></li>
                		<li><small class="color-999">物流价: 18.00</small></li>
                		<li><small class="color-999">现价: 55.00</small></li>
                </ul>
                </td>
                                                 <td>
                	<ul class="list-unstyled">
                		<li><small class="color-999">好评率: 0%</small></li>
                		<li><small class="color-999">差评率: 0%</small></li>
                	</ul>
                </td>
                <td>
                	<ul class="list-unstyled">
                		<li><small class="color-999">退款数: 0</small></li>
                		<li><small class="color-999">退款率: 0%</small></li>
                	</ul>
                </td>
                                <td>
                    <p class="color-999">0</p>
                </td>
                <td>
                    <p class="color-999">1</p>
                </td>
                <td>
                    <div class="btn-group btn-group-lg">
                        <a href="http://www.0gow.com/goods/29742?yl=96358741" target="_blank" class="btn btn-link">
                            <i class="fa fa-lg fa-eye"></i>
                            <small>预览</small>
                        </a>
                        <a href="/goods/edit?goods_id=29742&url=%2Fgood%2Funsale" class="btn btn-link">
                            <i class="fa fa-lg fa-pencil-square-o"></i>
                            <small>编辑</small>
                        </a>
                        <a href="/goods/del?goods_id=29742&url=%2Fgood%2Funsale" class="btn btn-link btn-delete">
                            <i class="fa fa-lg fa-times"></i>
                            <small>删除</small>
                        </a>
                    </div>
                </td>
            </tr>
                      <tr>
                <td width="35">
                    <label class="checkbox-inline"><input type="checkbox" name="good_id[]" value="29516">
                </td>
                <td width="80">
                    <a href="/goods/edit?goods_id=29516&url=%2Fgood%2Funsale" class="good-cover">
                        <img src="http://p3.0gow.com/pic0gow_56983f9c3a1e3?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" alt="点击图片预览" />
                    </a>
                </td>
                <td>
                    <h4><a href="/goods/edit?goods_id=29516&url=%2Fgood%2Funsale">3只装创意USB小灯泡</a></h4>

                    <span class="label label-info">基础</span>

                    <span class="label label-primary">已激活</span>

                    <span class="label label-danger">未上架</span>

                    <span class="label label-danger">上架被拒绝</span>
                                   </td>
                               <td>
                <ul class="list-unstyled">
                		<li><small class="color-999">结算价：9.00</small></li>
                		<li><small class="color-999">物流价: 10.00</small></li>
                		<li><small class="color-999">现价: 30.00</small></li>
                </ul>
                </td>
                                                 <td>
                	<ul class="list-unstyled">
                		<li><small class="color-999">好评率: 0%</small></li>
                		<li><small class="color-999">差评率: 0%</small></li>
                	</ul>
                </td>
                <td>
                	<ul class="list-unstyled">
                		<li><small class="color-999">退款数: 0</small></li>
                		<li><small class="color-999">退款率: 0%</small></li>
                	</ul>
                </td>
                                <td>
                    <p class="color-999">0</p>
                </td>
                <td>
                    <p class="color-999">1</p>
                </td>
                <td>
                    <div class="btn-group btn-group-lg">
                        <a href="http://www.0gow.com/goods/29516?yl=96358741" target="_blank" class="btn btn-link">
                            <i class="fa fa-lg fa-eye"></i>
                            <small>预览</small>
                        </a>
                        <a href="/goods/edit?goods_id=29516&url=%2Fgood%2Funsale" class="btn btn-link">
                            <i class="fa fa-lg fa-pencil-square-o"></i>
                            <small>编辑</small>
                        </a>
                        <a href="/goods/del?goods_id=29516&url=%2Fgood%2Funsale" class="btn btn-link btn-delete">
                            <i class="fa fa-lg fa-times"></i>
                            <small>删除</small>
                        </a>
                    </div>
                </td>
            </tr>
                      <tr>
                <td width="35">
                    <label class="checkbox-inline"><input type="checkbox" name="good_id[]" value="29339">
                </td>
                <td width="80">
                    <a href="/goods/edit?goods_id=29339&url=%2Fgood%2Funsale" class="good-cover">
                        <img src="http://p3.0gow.com/pic0gow_56e018b8b079d?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" alt="点击图片预览" />
                    </a>
                </td>
                <td>
                    <h4><a href="/goods/edit?goods_id=29339&url=%2Fgood%2Funsale">超级防爆手机钢化膜 9H硬度+ 安装神器  傻瓜贴膜工具</a></h4>

                    <span class="label label-info">组合</span>

                    <span class="label label-primary">已激活</span>

                    <span class="label label-danger">未上架</span>

                    <span class="label label-danger">上架被拒绝</span>
                                   </td>
                               <td>
                <ul class="list-unstyled">
                		<li><small class="color-999">结算价：12.00</small></li>
                		<li><small class="color-999">物流价: 14.00</small></li>
                		<li><small class="color-999">现价: 0.00</small></li>
                </ul>
                </td>
                                                 <td>
                	<ul class="list-unstyled">
                		<li><small class="color-999">好评率: 13.7%</small></li>
                		<li><small class="color-999">差评率: 5.54%</small></li>
                	</ul>
                </td>
                <td>
                	<ul class="list-unstyled">
                		<li><small class="color-999">退款数: 18</small></li>
                		<li><small class="color-999">退款率: 5.23%</small></li>
                	</ul>
                </td>
                                <td>
                    <p class="color-999">343</p>
                </td>
                <td>
                    <p class="color-999">12566</p>
                </td>
                <td>
                    <div class="btn-group btn-group-lg">
                        <a href="http://www.0gow.com/goods/29339?yl=96358741" target="_blank" class="btn btn-link">
                            <i class="fa fa-lg fa-eye"></i>
                            <small>预览</small>
                        </a>
                        <a href="/goods/edit?goods_id=29339&url=%2Fgood%2Funsale" class="btn btn-link">
                            <i class="fa fa-lg fa-pencil-square-o"></i>
                            <small>编辑</small>
                        </a>
                        <a href="/goods/del?goods_id=29339&url=%2Fgood%2Funsale" class="btn btn-link btn-delete">
                            <i class="fa fa-lg fa-times"></i>
                            <small>删除</small>
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
            <select name="operate" class=" input-sm">
                                <option value="onsale">申请上架</option>
                <option value="downsale">取消申请</option>
                            </select>
          </div>
          <input type="hidden" name="url" value="/goods/unsale">
                    <button type="submit" id = "tj" class="btn btn-default btn-sm">提交</button>
                </div>
    </form>
    </div>
	<div class="text-center">
	   <ul class="pagination pagination-sm"><li class="disabled"><a href="/goods/unsale?p=1">First</a></li><li class="disabled"><a href="/goods/unsale?p=0">Prev</a></li><li class="active"><a href="/goods/unsale?p=1">1</a></li><li class="disabled"><a href="/goods/unsale?p=2">Next</a></li><li class="disabled"><a href="/goods/unsale?p=1">Last</a></li></ul>	</div>
<script>
    jQuery('.shenqing ').bind('submit', function(e) {
        e.preventDefault();
        e.stopPropagation();

        jQuery.ajax({
            type: 'POST',
            url: '/goods/operate',
            dataType: 'json',
            data: jQuery(this).serialize(),
            error:function(){},
            success:function(regData){
                if(regData.action == true){
                    alert("您选择的商品申请上架成功！");
                    location.reload(true);
                }else if(regData.qx ==true){
                    alert("您选择的商品取消申请上架成功！");
                    location.reload(true);
                }else if(regData.xj ==true){
                    alert("您选择的商品下架成功！");
                    location.reload(true);
                }
            }
        });
    });

</script></div>