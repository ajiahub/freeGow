<?php
/**
 * Created by PhpStorm.
 * User: francics <allenfrancics@foxmail.com>
 * Date: 2016/5/28
 * Time: 13:23
 */
namespace wechat\controllers;

use Yii;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use wechat\behaviors\AuthBehavior;

class MainController extends Controller
{
    public function behaviors()
    {
        $behaviors = [
            'auth' => [
                'class' => AuthBehavior::className(),
                'config' => Yii::$app->params['wechat']
            ],
        ];
        return ArrayHelper::merge(parent::behaviors(), $behaviors);
    }
}