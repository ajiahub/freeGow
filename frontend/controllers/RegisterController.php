<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

class RegisterController extends Controller
{
	public function actionIndex(){
		return $this->renderPartial('index');
	}
	public function actionServiceAgreement(){
		return $this->renderPartial('service');
	}	
}
