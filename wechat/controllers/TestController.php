<?php
namespace wechat\controllers;

use Yii;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

class TestController extends Controller
{
	
	public function actionIndex(){
		echo "dfadfd";
	}
}