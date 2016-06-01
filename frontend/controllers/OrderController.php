<?php
namespace frontend\controllers;

use Yii;

class OrderController extends MController
{
	public function actionIndex(){
		return $this->render('index');
	}
	public function actionDeliver(){
		return $this->render('deliver');
	}	
	public function actionSale(){
		return $this->render('sale');
	}
	public function actionChart(){
		return $this->render('chart');
	}
}