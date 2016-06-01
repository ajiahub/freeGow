<?php
/**
 * Created by PhpStorm.
 * User: francics <allenfrancics@gmail.com>
 * Date: 2016/5/2
 * Time: 13:21
 */
namespace wechat\controllers;

use Yii;
use wechat\models\Goods;
use yii\web\Controller;

class CategoryController extends MainController
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