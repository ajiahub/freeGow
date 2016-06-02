<?php
/**
 * Created by PhpStorm.
 * User: ligang <ligang@chexiu.cn>
 * Date: 2016/6/2
 * Time: 16:13
 */
namespace wechat\controllers;

use Yii;
use wechat\models\Cart;
use yii\base\ErrorException;

class CartController extends MainController
{
    /**
     * create cart
     * @return \yii\web\Response
     * @throws ErrorException
     */
    public function actionCreate()
    {
        $request = Yii::$app->request;
        if ($request->isPost) {
            $model = new Cart();
            $model->store_id = $request->post('userid');
            $model->fans_id = $this->fans->fans_id;
            $model->goods_id = $request->post('goods_id');
            $model->number = 1;
            if ($model->validate() && $model->save()) {
                return $this->redirect('/order/consignee');
            } else {
                throw new ErrorException('代码君出差了');
            }
        }
    }
}