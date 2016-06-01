<?php
namespace frontend\controllers;

use Yii;

class CashController extends MController
{
	public function actionIndex(){
		return $this->render('index');
	}
	public function actionOrder(){
		return $this->render('order');
	}
}