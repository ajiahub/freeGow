<?php
/**
 * Created by PhpStorm.
 * User: ligang <ligang@chexiu.cn>
 * Date: 2016/6/2
 * Time: 17:17
 */
namespace wechat\controllers;

use Yii;
use wechat\models\Order;
use yii\base\ErrorException;

class OrderControllere extends MainController
{
    public function actionConsignee()
    {
        return $this->renderPartial('consignee');
    }

    public function actionCreate()
    {
        $request = Yii::$app->request;
        if ($request->isPost) {
            $model = new Order();
            $model->store_id = $request->post('userid');
            $model->fans_id = $this->fans->fans_id;
            $model->goods_id = $request->post('goos_id');
            $model->number = 1;
            if ($model->validate() && $model->save()) {
                return $this->redirect('/order/consignee');
            } else {
                throw new ErrorException;
            }
        }
    }
}