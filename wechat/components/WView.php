<?php
namespace frontend\components;

use Yii;
use yii\helpers\Url;

class WView extends \yii\web\View {

    public $route;
	public $menu;
    /**
     * Initializes the view component.
     */
    public function init() {
        parent::init();
        $this->menu = $this->getMenu();		
    }
	
	public function getMenu(){
		return $menus = [
	[
		'label' => '控制台','url' => '#','tag'=>'seller',
		'items' => [
			['label' => '控制台', 'url' => '/site/index'],
			['label' => '商户积分明细', 'url' => '/credit/index'],
			['label' => '绑定银行卡', 'url' => '/seller/bankcard'],
			['label' => '商户提现', 'url' => '/seller/create'],
			['label' => '提现流水', 'url' => '/seller/txlog'],
		],
	],
	[
		'label' => '信息中心','url' => '#','tag'=>'msg',
		'items' => [
			['label' => '信息中心', 'url' => '/msg/index']
		],
	],
	[
		'label' => '举报投诉管理','url' => '#','tag'=>'report',
		'items' => [
			['label' => '举报投诉列表', 'url' => '/report/index'],
			['label' => '趋势图', 'url' => '/report/static'],
			['label' => '结构图', 'url' => '/report/chart']
		],
	],
	[
		'label' => '商品管理','url' => '#','tag'=>'goods',
		'items' => [
			['label' => '已上架商品', 'url' => '/goods/index'],
			['label' => '未上架商品', 'url' => '/goods/unsale'],
			['label' => '待补货商品', 'url' => '/goods/lowstock'],
			['label' => '添加新商品', 'url' => '/goods/create'],
			['label' => '商品评论管理', 'url' => '/goods/comments']
		],
	],
	[
		'label' => '订单中心','url' => '#','tag'=>'order',
		'items' => [
			['label' => '订单列表', 'url' => '/order/index'],
			['label' => '批量发货', 'url' => '/order/deliver'],
			['label' => '销量统计', 'url' => '/order/sale'],
			['label' => '报表查询', 'url' => '/order/chart']
		],
	],	
	[
		'label' => '结算中心','url' => '#','tag'=>'cash',
		'items' => [
			['label' => '结算流水', 'url' => '/cash/index'],
			['label' => '结算订单', 'url' => '/cash/order']
		],
	]
];
	}
}