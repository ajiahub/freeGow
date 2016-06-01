<?php
$this->registerCssFile('@web/static/css/goods-common.css');
?>
<div class="container-fluid main-container">
	<?= $this->render('/layouts/menu'); ?>
	<div class="container-fluid">
    <div class="location">
    	您的位置：<a href="/">控制台</a><a href="/good">商品管理</a><a href="javascript:void(0);" class="active">待补货商品</a>
    </div>
    <div class="page-header clearfix">
        <h1 class="pull-left"><i class="fa fa-info-circle fa-fw"></i> 待补货商品</h1>
        <a class="btn btn-default" href="/goods/create">添加新商品</a>
    </div>
    <div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		  <div class="btn-group btn-group-sm">
		      <a href="/goods" class="btn btn-default">已上架商品</a>
		      <a href="/goods/unsale" class="btn btn-default">未上架商品</a>
		      <a href="/goods/lowstock" class="btn btn-primary active">待补货商品</a>
          </div>
		</div>

		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-right">
		 <form class="form-inline" action="/goods/lowstock" method="post">
    		<div class="form-group">
                <input type="text" class="form-control input-sm" name="name" placeholder="商品名" value="">
            </div>
            <button type="submit" class="btn btn-default btn-sm">提交</button>
    	</form>
		</div>
	</div>
	
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
                                <th width="160">规格</th>
                                <th width="130">价格</th>
                                <th width="60">库存</th>
                                                <th width="100">销量</th>
                <th width="60">查看</th>
                <th width="180"></th>
            </tr>
        </thead>
        <tbody>
                      <tr>
                <td width="35">
                    <label class="checkbox-inline"><input type="checkbox" name="good_id[]" value="29739">
                </td>
                <td width="80">
                    <a href="/goods/edit?goods_id=29739&url=%2Fgood%2Flowstock" class="good-cover">
                        <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" alt="点击图片预览" />
                    </a>
                </td>
                <td>
                    <h4><a href="/goods/edit?goods_id=29739&url=%2Fgood%2Flowstock">极速金属随身U盘16G</a></h4>

                    <span class="label label-info">组合</span>

                    <span class="label label-primary">已激活</span>

                    <span class="label label-success">已上架</span>

                    <span class="label label-danger">未申请</span>
                                   </td>
                              <td><p class="color-999">银色 </p></td>
                               <td>
                <ul class="list-unstyled">
                		<li><small class="color-999">结算价：20.00</small></li>
                		<li><small class="color-999">物流价: 22.00</small></li>
                		<li><small class="color-999">现价: 0.00</small></li>
                </ul>
                </td>
                                 <td>
                    <p class="color-999">
                                        0/100                                        </p>
                </td>
                                                <td>
                    <p class="color-999">3526</p>
                </td>
                <td>
                    <p class="color-999">3841</p>
                </td>
                <td>
                    <div class="btn-group btn-group-lg">
                        <a href="http://www.0gow.com/goods/29739?yl=96358741" target="_blank" class="btn btn-link">
                            <i class="fa fa-lg fa-eye"></i>
                            <small>预览</small>
                        </a>
                        <a href="/goods/edit?goods_id=29739&url=%2Fgood%2Flowstock" class="btn btn-link">
                            <i class="fa fa-lg fa-pencil-square-o"></i>
                            <small>编辑</small>
                        </a>
                        <a href="/goods/del?goods_id=29739&url=%2Fgood%2Flowstock" class="btn btn-link btn-delete">
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
                                <option value="unsale">下架</option>
                            </select>
          </div>
          <input type="hidden" name="url" value="/goods/lowstock">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" >提交</button>
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title" id="exampleModalLabel">下架原因</h4>
                          </div>
                          <div class="modal-body">
                                  <div class="form-group">
                                      <textarea class="form-control" name="yuanyin" id="message-text"></textarea>
                                  </div>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">返回</button>
                              <button type="submit" class="btn btn-primary">提交</button>
                          </div>
                      </div>
                  </div>
              </div>
                  </div>
    </form>
    </div>
	<div class="text-center">
	   <ul class="pagination pagination-sm"><li class="disabled"><a href="/goods/lowstock?p=1">First</a></li><li class="disabled"><a href="/goods/lowstock?p=0">Prev</a></li><li class="active"><a href="/goods/lowstock?p=1">1</a></li><li class="disabled"><a href="/goods/lowstock?p=2">Next</a></li><li class="disabled"><a href="/goods/lowstock?p=1">Last</a></li></ul>	</div>
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