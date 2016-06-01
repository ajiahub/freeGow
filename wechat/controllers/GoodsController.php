<?php
/**
 * Created by PhpStorm.
 * User: francics <allenfrancics@gamil.com>
 * Date: 2016/5/2
 * Time: 13:35
 */
namespace wechat\controllers;

use yii\helpers\ArrayHelper;
use yii\web\Controller;
use wechat\models\Goods;

class GoodsController extends MainController
{
    public function actionView($goods_id)
    {
        $goods = new Goods();
        $model = Goods::find()->where(['goods_id' => $goods_id])->with(['content', 'goodsImage'])->one();
        $otherGoods = $goods->search(['username' => $model->username], 6);
        return $this->renderPartial('view', ['model' => $model, 'otherGoods' => ArrayHelper::toArray($otherGoods->models)]);
    }
}