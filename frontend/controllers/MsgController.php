<?php
namespace frontend\controllers;

use Yii;

class MsgController extends MController
{
	public function actionIndex(){
		return $this->render('index');
	}
}