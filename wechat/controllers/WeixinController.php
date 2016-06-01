<?php
/**
 * Created by PhpStorm.
 * User: francics <allenfrancics@foxmail.com>
 * Date: 2016/5/27
 * Time: 23:41
 */
namespace wechat\controllers;

use yii\web\Controller;

class WeixinController extends Controller
{
    public $options = ['debug' => true,
        'app_id' => 'wxb84976196dee611b',
        'secret' => '25720f7dfa8c71e24cb7259ab7596254',
        'token' => 'wechat123',
        'log' => ['level' => 'debug', 'file' => '/tmp/easywechat.log']
    ];

    public function actionServer()
    {

    }

}