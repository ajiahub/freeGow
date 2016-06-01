<?php
namespace frontend\controllers;

use Yii;

class CreditController extends MController
{
	public function actionIndex(){
		return $this->render('index');
	}
}