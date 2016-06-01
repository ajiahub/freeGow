<?php
namespace frontend\controllers;

use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use frontend\models\Test;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use moonland\phpexcel\Excel;

/**
 * Site controller
 */
class TestController extends Controller
{
  public function actionT(){
    $result = Test::find()->all();
	//var_dump($result);
	Excel::widget([
    'models' => $result,
    'mode' => 'export', //default value as 'export'
    'columns' => ['itemid','username','company'], //without header working, because the header will be get label from attribute label. 
    'headers' => ['itemid' => 'ID号','username' => '用户名', 'company' => '公司'], 
]);
  }
  
  public function actionGenerateFile()
{
    $data = Excel::widget([
        'models' => Test::find()->all(),
        'mode' => 'export',
        'columns' => ['itemid', 'username', 'company'],
        'headers' => ['itemid' => 'Header Column 1', 'username' => 'Header Column 2', 'company' => 'Header Column 3'],
    ]);
    return true;
}
}
