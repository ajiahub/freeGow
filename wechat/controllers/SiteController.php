<?php
namespace wechat\controllers;

use Yii;
use yii\web\Controller;
use wechat\models\Goods;

class SiteController extends MainController
{
    public function actionIndex()
    {
        $params = Yii::$app->request->queryParams;
        $params['status'] = 1;
        $model = new Goods();
        $dataProvider = $model->search($params);
        return $this->render('index', ['dataProvider' => $dataProvider]);
    }
}