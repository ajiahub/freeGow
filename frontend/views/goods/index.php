<?php
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;
use common\components\ResizeImage;

$this->registerCssFile('@web/static/css/goods-common.css');
$active1 = $active2 = $active3 = false;
switch(Yii::$app->controller->action->id){
	case 'unsale':
	$nav = '未上架商品';
	$active1 = true;
	break;
	case 'lowstock':
	$nav = '待补货商品';
	$active2 = true;
	break;
	default:
	$nav = '已上架商品';
	$active3 = true;
	break;
}
$username = Yii::$app->user->identity->username;
?>
<div class="container-fluid main-container">
    <?= $this->render('/layouts/menu'); ?>
    <div class="container-fluid">
        <div class="location">
            您的位置：<a href="/">控制台</a><a href="/goods">商品管理</a><a href="javascript:void(0);" class="active">已上架商品</a>
        </div>
        <div class="page-header clearfix">
            <h1 class="pull-left"><i class="fa fa-star-o fa-fw"></i> <?= $nav ?></h1>
            <a class="btn btn-default" href="/goods/create">添加新商品</a>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="btn-group btn-group-sm">
                    <a href="/goods" class="btn <?= $active3 ? 'btn-primary active' : 'btn-default' ?>">已上架商品</a>
                    <a href="/goods/unsale" class="btn <?= $active1 ? 'btn-primary active' : 'btn-default' ?>">未上架商品</a>
                    <a href="/goods/lowstock" class="btn <?= $active2 ? 'btn-primary active' : 'btn-default' ?>">待补货商品</a>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-right">
                <form class="form-inline" action="/goods/index" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control input-sm" name="name" placeholder="商品名" value="">
                    </div>
                    <button type="submit" class="btn btn-default btn-sm">提交</button>
                </form>
            </div>
        </div>

        <div class="table-responsive">
            <form class=" goods-list-form  shenqing">
                <div class="site-alert alert hide"></div>
                <script type="text/javascript">
                    var note = '';
                    jQuery(function () {
                    });

                    /**
                     * 显示操作成功信息
                     */
                    function showAlertMsg(msg, type, note) {
                        if (!msg || !type || msg == '' || type == '')    return false;

                        if (type != 'success' && type != 'info' && type != 'danger')        type = 'info';
                        jQuery("html,body").animate({scrollTop: jQuery("#top").offset().top}, 1000);

                        jQuery('.site-alert').removeClass('alert-success alert-info alert-danger').addClass('alert-' + type).html('<i class="fa fa-exclamation-circle fa-lg"></i> ' + msg).removeClass('hide').show();

                        if (type !== 'info') {
                            setTimeout
                            (
                                function () {
                                    if (note !== '' && note !== null) {
                                        jQuery('.site-alert').removeClass('alert-' + type).addClass('alert-info').html(note).removeClass('hide').show();

                                    }
                                    else {
                                        jQuery('.site-alert').removeClass('alert-' + type).html('').addClass('hide').fadeOut(1000);
                                    }
                                }, 6000
                            );
                        }
                    }
                </script><table class="table goodlist-table">
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
					<?php if($dataProvider->models): ?>
                    <tbody>
					<?php foreach($dataProvider->models as $value): ?>
                    <tr>
                        <td width="35">
                            <label class="checkbox-inline"><input type="checkbox" name="good_id[]" value="56127">
                        </td>
                        <td width="80">
                            <a href="#" class="good-cover">
							<?= Html::img(ResizeImage::resize($username,$value->defaultImage->image,320,320)); ?>
                            </a>
                        </td>
                        <td>
                            <h4><a href="/goods/edit?goods_id=56127&url=%2Fgood"><?= $value->goods_name ?></a></h4>

                            <span class="label label-info">基础</span>

                            <span class="label label-primary">已激活</span>

                            <span class="label label-success">已上架</span>

                            <span class="label label-danger">未申请</span>
                        </td>
                        <td>
                            <ul class="list-unstyled">
                                <li><small class="color-999">结算价：<?= $value->pt_price ?></small></li>
                                <li><small class="color-999">物流价: <?= $value->wl_price ?></small></li>
                                <li><small class="color-999">现价: <?= $value->price ?></small></li>
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
                            <p class="color-999"><?= $value->click ?></p>
                        </td>
                        <td>
                            <div class="btn-group btn-group-lg">
							<!--
                                <a href="http://www.0gow.com/goods/56127?yl=96358741" target="_blank" class="btn btn-link">
                                    <i class="fa fa-lg fa-eye"></i>
                                    <small>预览</small>
                                </a
							-->
                                <a href="<?=Url::toRoute(['edit','goods_id'=>$value->goods_id]) ?>" class="btn btn-link">
                                    <i class="fa fa-lg fa-pencil-square-o"></i>
                                    <small>编辑</small>
                                </a>
                                <a href="<?=Url::toRoute(['del','goods_id'=>$value->goods_id]) ?>" class="btn btn-link btn-delete">
                                    <i class="fa fa-lg fa-times"></i>
                                    <small>删除</small>
                                </a>
                            </div>
                        </td>
                    </tr>
					<?php endforeach ?>
                    </tbody>
					<?php else: ?>
					<tbody>
					<tr><td colspan="9">暂时没有相应的商品信息！</td></tr>
					</tbody>
					<?php endif; ?> 
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
                    <input type="hidden" name="url" value="/good">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">提交
                    </button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
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
            <?= \yii\widgets\LinkPager::widget([
                'pagination'=>$dataProvider->pagination,
            ]); ?>
        </div>
        <script>
            jQuery('.shenqing ').bind('submit', function (e) {
                e.preventDefault();
                e.stopPropagation();

                jQuery.ajax({
                    type: 'POST',
                    url: '/goods/operate',
                    dataType: 'json',
                    data: jQuery(this).serialize(),
                    error: function () {
                    },
                    success: function (regData) {
                        if (regData.action == true) {
                            alert("您选择的商品申请上架成功！");
                            location.reload(true);
                        } else if (regData.qx == true) {
                            alert("您选择的商品取消申请上架成功！");
                            location.reload(true);
                        } else if (regData.xj == true) {
                            alert("您选择的商品下架成功！");
                            location.reload(true);
                        }
                    }
                });
            });

        </script>
    </div>