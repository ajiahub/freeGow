<?php
/**
 * Created by PhpStorm.
 * User: francics <allenfrancics@foxmail.com>
 * Date: 2016/5/28
 * Time: 13:27
 */
namespace wechat\behaviors;

use Yii;
use yii\base\Behavior;
use wechat\models\Fans;
use Overtrue\Wechat\Auth;

class AuthBehavior extends Behavior
{
    public $config;

    public function events()
    {
        return [
            'beforeAction' => 'auth'
        ];
    }

    public function auth()
    {
        $config = $this->config;
        if (Yii::$app->user->isGuest) {
            //$auth = new Auth('wx65cca1d72198e37f', '27156dfb08fefe812b5c85f584d3bf0d');
            //$identity = Fans::findByOpenid('oZDgDs-TkPDU-U1At_pSLKUN1rKs');
            $auth = new Auth($config['app_id'], $config['app_secret']);
            $user = $auth->authorize();
            $identity = Fans::findByOpenid($user->get('openid'));
            if (!$identity) {
                $model = new Fans();
                $data = [
                    'open_id' => $user->get('openid'),
                    'wx_name' => $user->get('nickname'),
                    'gender' => $user->get('sex'),
                    'language' => $user->get('language'),
                    'city' => $user->get('city'),
                    'province' => $user->get('province'),
                    'country' => $user->get('country'),
                    'avatar' => $user->get('headimgurl'),
                ];
                /*
                $data = [
                    'open_id' => '54325423542542',
                    'wx_name' => 'hello world',
                    'gender' => 1,
                    'language' => 'zh_cn',
                    'city' => 'sz',
                    'province' => 'gd',
                    'country' => 'china',
                    'avatar' => 'http://www.sbzj.com/',
                ];
                */
                $model->load($data, '');
                if ($model->save()) {
                    $identity = $model;
                }
            }
            Yii::$app->user->login($identity);
        }
    }
}