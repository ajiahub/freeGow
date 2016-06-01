<?php
use yii\helpers\Url;
use common\components\ResizeImage;
?>
<script type="text/javascript">
	$(document).ready(function () {
		$("img.lazy").lazyload({placeholder:"/static/images/static/lazy-loading.jpg",effect: "fadeIn",threshold :320}).removeClass('lazy').addClass('lazyloaded');
	});
</script>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 item">
	<div class="well well-sm">
		<a href="<?= Url::to(['/goods/view','goods_id'=>$model->goods_id]); ?>" class="goods-link"></a>
		<a href="<?= Url::to(['/goods/view','goods_id'=>$model->goods_id]); ?>" class="good-cover">
			<img class="lazy" src="/static/images/static/lazy-loading.jpg"
				 data-original="<?= ResizeImage::resize($model->username,$model->defaultImage->image,320,320); ?>"
				 alt="<?= $model->goods_name ?>">
		</a>

		<div class="text-center good-info">
			<h4><a href="<?= Url::to(['/goods/view','goods_id'=>$model->goods_id]); ?>" class="text-overflow"><?= $model->goods_name ?></a></h4>

			<p class="color-aaa text-overflow clearfix">
				<del class="good-scprice">
					<small>￥<span><?= $model->sc_price ?></span></small>
				</del>
				<span class="good-price"><em>￥<?= $model->price ?></em></span>
			</p>
		</div>
	</div>
</div>