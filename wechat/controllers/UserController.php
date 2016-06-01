<?php
/**
 * Created by PhpStorm.
 * User: francics <allenfrancics@foxmail.com>
 * Date: 2016/5/22
 * Time: 11:36
 */
namespace wechat\controllers;

use yii\web\Controller;

class UserController extends MainController
{
    public function actionIndex()
    {
        return $this->renderPartial('index');
    }
}