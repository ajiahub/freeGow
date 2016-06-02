<?php
/**
 * Created by PhpStorm.
 * User: francics <allenfrancics@foxmail.com>
 * Date: 2016/5/28
 * Time: 13:23
 */
namespace wechat\controllers;

use wechat\models\Fans;
use Yii;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use wechat\behaviors\AuthBehavior;

class MainController extends Controller
{
    /**
     * @var Fans
     */
    private $_fans = false;
    /*
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
    */

    /**
     * 获取触发微信请求的微信用户信息
     * @return Fans
     */
    public function getFans()
    {
        if ($this->_fans === false) {
            $this->_fans = Yii::$app->user->identity;
        }
        return $this->_fans;
    }
}