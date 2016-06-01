<?php
use yii\bootstrap\Nav;
$this->route = Yii::$app->controller->getRoute();
?>
<div class="site-menu">
<?php foreach($this->menu as $key =>$value): ?>	
	<ul class="nav nav-pills nav-stacked site-menu-item <?php if(strpos('/'.$this->route,$value['tag']) > 0 || (in_array($this->route,['site/index','credit/index']) && $key==0)): ?>current-menu <?php endif ?>">
		<li class="menu-label">
			<a href="javascript:void(0);"><?= $value['label'] ?></a>
		</li>
		<?php if($value['items']): ?>
		<?php foreach($value['items'] as $sk => $sv): ?>
		<li <?php if(ltrim($sv['url'],'/') == $this->route): ?>class="active" <?php endif ?>>
			<a href="<?= $sv['url'] ?>">
				<i class="fa fa-tachometer fa-fw"></i>
				<span class="glyphicon glyphicon-menu-right pull-right"></span>
				<?= $sv['label'] ?>
			</a>
		</li>
		<?php endforeach ?>
		<?php endif ?>
	</ul>
<?php endforeach ?>
</div>