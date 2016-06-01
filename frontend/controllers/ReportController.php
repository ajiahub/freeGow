<?php
namespace frontend\controllers;

use Yii;

class ReportController extends MController
{
	public function actionIndex(){
		return $this->render('index');
	}
	public function actionStatic(){
		return $this->render('static');
	}	
	public function actionChart(){
		return $this->render('chart');
	}
}