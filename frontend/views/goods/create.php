<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<div class="container-fluid main-container">
	<?= $this->render('/layouts/menu'); ?>
	<script type="text/javascript" src="/static/js/jquery.form.js"></script>
<script type="text/javascript" src="/static/js/good-common.js"></script>
<link rel="stylesheet" href="/static/kindeditor/themes/default/default.css" />
<script charset="utf-8" src="/static/kindeditor/kindeditor-min.js"></script>
<script charset="utf-8" src="/static/kindeditor/lang/zh_CN.js"></script>

<script type="text/javascript">
var editor;
KindEditor.ready(function(K) {
	editor = K.create('textarea[name="content"]', {
		allowFileManager : true,
		urlType: 'domain'
	});
});
</script>
<div class="container-fluid">
  <div class="location"> 您的位置：<a href="/">控制台</a><a href="/good">商品管理</a><a href="javascript:void(0);" class="active">
    添加新商品  </a> </div>
  <div class="page-header clearfix">
    <h1 class="pull-left"><i class="fa fa-cube fa-fw"></i>
        添加新商品    	<a href="/goods/index" class="btn btn-default">返回</a>
    </h1>
  </div>
  <div class="good-form" data-isonsale="0">
  <?php $form = ActiveForm::begin(['options'=>['class'=>'form-horizontal goodsaveform']]); ?>
      <div class="site-alert alert hide"></div>
<div class="panel panel-default">
        <div class="panel-heading">
          <ul class="nav nav-pills good-tabs">
            <li class="active"><a href="#base" data-target="#base" data-toggle="tab">商品信息 <font class="color-red">*</font></a></li>
            <li><a href="#image" data-target="#image" data-toggle="tab">商品图片 <font class="color-red">*</font></a></li>
            <!--<li><a href="#zuhe" data-target="#zuhe" data-toggle="tab">规格属性</a></li>-->
                      </ul>
        </div>
        <div class="panel-body tab-content">
          <div class="tab-pane active" id="base">
               <div class="form-group">
					<label class="col-lg-2 col-md-2 col-sm-4 col-xs-12 control-label">商品名称 <font class="color-red">*</font></label>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <?=Html::activeTextInput($model, 'goods_name', ['maxlength'=>'50','class' => 'form-control input-sm','placeholder'=>'您的商品名称']) ?>
					  <p class="help-block hide"></p>
					</div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 col-md-2 col-sm-4 col-xs-12 control-label">商品长标题 <font class="color-red">*</font></label>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
				<?=Html::activeTextInput($model, 'goods_title', ['maxlength'=>'50','class' => 'form-control input-sm','placeholder'=>'您的商品标题']) ?>
                  <p class="help-block hide"></p>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 col-md-2 col-sm-4 col-xs-12 control-label">商品短描述 <font class="color-red">*</font></label>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
				<?=Html::activeTextInput($model, 'goods_des', ['maxlength'=>'120','class' => 'form-control input-sm','placeholder'=>'您的商品简短广告词']) ?>
                  <p class="help-block hide"></p>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label class="col-lg-4 col-md-4 col-sm-6 col-xs-12 control-label">商品分区 <font class="color-red">*</font></label>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        	<?= Html::activeDropDownList($model, 'area_id', ['请选择商品分区','0元区','精品区'],['class'=>'form-control input-sm']); ?>
                  <p class="help-block hide"></p>

                        </div>
                      </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                
                        <div class="form-group">
                        <label class="col-lg-4 col-md-4 col-sm-6 col-xs-12 control-label">商品分类<font class="color-red">*</font></label>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        	<?= Html::activeDropDownList($model, 'cat_id', ['请选择商品分类','春装','生活','数码'],['class'=>'form-control input-sm']); ?>
                  <p class="help-block hide"></p>

                        </div>
                      </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label class="col-lg-4 col-md-4 col-sm-6 col-xs-12 control-label">市场价 <font class="color-red">*</font></label>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<?=Html::activeTextInput($model, 'sc_price', ['maxlength'=>'10','class' => 'form-control input-sm','placeholder'=>'您的商品市场价']) ?>
                                                    <p class="help-block hide"></p>

                        </div>
                      </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group">
                    <label class="col-lg-4 col-md-4 col-sm-6 col-xs-12 control-label">现价 <font class="color-red">*</font></label>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<?=Html::activeTextInput($model, 'price', ['maxlength'=>'10','class' => 'form-control input-sm','placeholder'=>'您的商品卖价']) ?>
                                           <p class="help-block hide"></p>
                    </div>
                  </div>
                </div>
                
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group">
                    <label class="col-lg-4 col-md-4 col-sm-6 col-xs-12 control-label">物流价 <font class="color-red">*</font></label>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<?=Html::activeTextInput($model, 'wl_price', ['maxlength'=>'10','class' => 'form-control input-sm','placeholder'=>'您的商品物流价格']) ?>
                                            <p class="help-block hide"></p>
                    </div>
                  </div>
                </div>
                
                
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group">
                    <label class="col-lg-4 col-md-4 col-sm-6 col-xs-12 control-label">总库存 <font class="color-red">*</font></label>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<?=Html::activeTextInput($model, 'goods_stock', ['maxlength'=>'10','class' => 'form-control input-sm','placeholder'=>'您的商品总库存']) ?>
                      <p class="help-block hide"></p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group">
                    <label class="col-lg-4 col-md-4 col-sm-6 col-xs-12 control-label">当前库存 <font class="color-red">*</font></label>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<?=Html::activeTextInput($model, 'goods_cur_stock', ['maxlength'=>'10','class' => 'form-control input-sm','placeholder'=>'您的商品当前库存']) ?>
                      <p class="help-block hide"></p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group">
                    <label class="col-lg-4 col-md-4 col-sm-6 col-xs-12 control-label">平台结算金额 <font class="color-red">*</font></label>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<?=Html::activeTextInput($model, 'pt_price', ['maxlength'=>'10','class' => 'form-control input-sm','placeholder'=>'平台结算商品的金额,填写后将不能修改']) ?>
                                           <p class="help-block hide"></p>
                    </div>
                  </div>
                </div>
                
              </div>
               <div class="form-group">
                   <label class="col-lg-2 col-md-2 col-sm-4 col-xs-12 control-label">商品备注</label>
                   <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
				    <?=Html::activeTextarea($model, 'mark', ['class' => 'form-control input-sm']); ?>
                    <p class="help-block hide"></p>
                  </div>
                </div> 
              <div class="form-group">
                   <label class="col-lg-2 col-md-2 col-sm-4 col-xs-12 control-label">描述</label>
                   <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
				   <?=Html::textarea('content',$content->content, ['class' => 'form-control input-sm','rows'=>20]); ?>
                    <p class="help-block hide"></p>
                  </div>
                </div>
              
          </div>
          <div class="tab-pane" id="image">
            <div class="alert alert-warning image-alert hide"></div>
            <div class="uploadForm text-center">
              <div class="fileuploadform text-center">
                    <div class="imglist text-center">
                                            <input type="hidden" name="defalut_image_id" value="0">
                      </div>
                      <p class="color-999">说明：只允许上传尺寸为620×620像素且格式为gif/jpg/png的图片，图片不得出现除Logo外的人为描述用语。</p>
                    <input class="fileupload hide" name="UploadForm[imageFile]" type="file">
                    <input type="hidden" name="goods_id" value="0">
                    
                    <button type="button" class="btn btn-success btn-upload"><i class="fa fa-file-image-o"></i> 添加图片</button>
                </div>
              </div>
          </div>
          <div class="tab-pane" id="zuhe">
            <div class="alert alert-info">
                                                商品规格属性是组合商品才有的特有属性，如果你需要添加的是基础商品，请不要添加商品规格属性！
            </div>
                        <div class="text-center">
                <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#specModal">
                    <i class="fa fa-plus-circle"></i> 添加新规格属性
                </button>
            </div>
                        <div class="table-responsive">
            <table class="table table-condensed datalist-table speclist-table">
                <thead>
                    <tr>
                        <th colspan="2">产品规格</th>
                        <th>市场价</th>
                        <th>现价</th>
                        <th>物流价</th>
                        <th>总库存</th>
                        <th>当前库存</th>
                        <th width="150"></th>
                    </tr>
                </thead>
                <tbody>
                                    </tbody>
            </table>
            </div>
          </div>
        </div>
        <div class="modal-footer">
            <input type="hidden" name="goods_id" value="0">
            <input type="hidden" name="url" value="">
            <button type="submit" class="btn btn-primary btn-lg btn-form-submit">提交保存商品</button>
        </div>
      </div>
    <?php ActiveForm::end() ?>
  <div class="modal fade" id="specModal" tabindex="-1" role="dialog" aria-labelledby="specModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title text-left" id="specModalLabel"><i class="fa fa-cubes"></i> 添加编辑商品规格属性</h4>
          </div>
          <form class="form-horizontal spec-form" method="post" enctype="multipart/form-data">
              <div class="modal-body">
              <div class="alert alert-info spec-alert hide"></div>
                <div class="form-group">
                    <label class="col-lg-3 col-md-3 col-sm-4 col-xs-12 control-label">规格属性图片 <font class="color-red">*</font></label>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                      <p class="color-999"><small>说明：只允许上传尺寸为620×620像素且格式为gif/jpg/png的图片，图片不得出现除Logo外的人为描述用语。</small></p>
                      <div class="uploadForm text-center">
                          <div class="fileuploadform text-center">
                                <div class="imglist text-center">
                                </div>
                                <input type="hidden" name="defalut_image_id" value="">
                                <input class="fileupload hide" name="mypic" type="file">
                                <button type="button" class="btn btn-success btn-sm btn-upload"><i class="fa fa-file-image-o"></i> 添加图片</button>
                            </div>
                          </div>
                          <p class="help-block hide"></p>
                    </div>
                  </div>
                <div class="form-group">
                    <label class="col-lg-3 col-md-3 col-sm-4 col-xs-12 control-label">规格属性一 <font class="color-red">*</font></label>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                      <input type="text" name="spec_1Attr" class="form-control input-sm" placeholder="您的商品规格属性一说明">
                      <p class="help-block hide"></p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-3 col-md-3 col-sm-4 col-xs-12 control-label">规格属性二</label>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                      <input type="text" name="spec_2Attr" class="form-control input-sm" placeholder="您的商品规格属性二说明">
                    </div>
                  </div>
                  <div class="form-group form-scPrice">
                    <label class="col-lg-3 col-md-3 col-sm-4 col-xs-12 control-label">市场价 <font class="color-red">*</font></label>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                      <input type="text" name="scPrice" class="form-control input-sm" placeholder="市场价">
                      <input type="hidden" name="" value="">
                      <p class="help-block hide"></p>
                    </div>
                  </div>
                  <div class="form-group form-Price">
                    <label class="col-lg-3 col-md-3 col-sm-4 col-xs-12 control-label">现价 <font class="color-red">*</font></label>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <input type="text" class="form-control input-sm" name="Price" id="Price" placeholder="您的商品卖价">
                      <p class="help-block hide"></p>
                    </div>
                  </div>
                  <div class="form-group form-wlPrice">
                    <label class="col-lg-3 col-md-3 col-sm-4 col-xs-12 control-label">物流价 <font class="color-red">*</font></label>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <input type="text" class="form-control input-sm" name="wlPrice" id="wlPrice" placeholder="您的商品物流价格">
                      <p class="help-block hide"></p>
                    </div>
                  </div>                  
                  <div class="form-group">
                    <label class="col-lg-3 col-md-3 col-sm-4 col-xs-12 control-label">总库存 <font class="color-red">*</font></label>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                      <input type="text" name="goodsStock" class="form-control input-sm" placeholder="总库存">
                      <p class="help-block hide"></p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-3 col-md-3 col-sm-4 col-xs-12 control-label">当前库存 <font class="color-red">*</font></label>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                      <input type="text" name="goodsNowStock" class="form-control input-sm" placeholder="当前库存">
                      <p class="help-block hide"></p>
                    </div>
                  </div>

              </div>
              <div class="modal-footer">
                <input type="hidden" name="spec_id" value="0">
                <input type="hidden" name="bindGoodsID" value="0">
                <input type="hidden" name="goods_id" value="0">
                <button type="button" class="btn btn-default" onclick="closeSpecModal();">关闭</button>
                <button type="submit" class="btn btn-primary btn-spec-submit">提交</button>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
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
</script>