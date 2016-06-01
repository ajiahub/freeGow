<?php
use yii\helpers\Url;
use common\components\ResizeImage;
?>
<?php if($otherGoods): ?>
<div class="goods-recommend">
	<h3 class="text-left">商户的其他商品</h3>
	<div class="row">
	<?php foreach($otherGoods as $value): ?>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
			<div class="goods-recommend-wrapper">
				<a href="<?= Url::to(['/goods/view','goods_id'=>$value['goods_id']]) ?>" class="goods-recommend-cover"> <img class="img-responsive lazy" data-original="<?= ResizeImage::resize($value['username'],$value['defaultImage']['image'],320,320) ?>" src="/static/images/static/lazy-loading.jpg" alt="<?= $value['goods_name'] ?>">
				</a>
				<h5>
					<a href="#" class="text-overflow"><?= $value['goods_name'] ?></a> <small>¥<?= $value['price'] ?></small>
				</h5>
			</div>
		</div>
	<?php endforeach ?>
	</div>
</div>
<?php endif; ?>