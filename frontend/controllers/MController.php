<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;

class MController extends Controller
{
    /**
     * 当前布局页
     * @var string
     */
    public $layout = '/member';

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ]
        ];
    }

    /**
     * 获取当前用户名
     * @return mixed
     */
    public function getUsername()
    {
        return Yii::$app->user->identity->username;
    }


}