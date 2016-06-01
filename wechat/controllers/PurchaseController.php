<?php
/**
 * Created by PhpStorm.
 * User: francics <allenfrancics@foxmail.com>
 * Date: 2016/5/22
 * Time: 10:20
 */
namespace wechat\controllers;

use Yii;
use yii\web\Controller;

class PurchaseController extends MainController
{
    /**
     * 下单流程首页
     * @return string
     */
    public function actionIndex()
    {
        $request = Yii::$app->request;
        if ($request->isPost) {
            return $this->redirect('consignee');
        }
        return $this->renderPartial('consignee');
        // return $this->renderPartial('index');
    }

    /**
     * 第一次下单添加收货地址信息
     * @return string
     */
    public function actionConsignee()
    {
        return $this->renderPartial('consignee');
    }
}