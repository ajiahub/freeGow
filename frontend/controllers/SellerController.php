<?php
namespace frontend\controllers;

use Yii;

class SellerController extends MController
{
	public function actionBankcard(){
		return $this->render('bankcard');
	}
	public function actionCreateCard(){
		return $this->render('create-card');
	}	
	public function actionCreate(){
		return $this->render('create');
	}
	public function actionTxlog(){
		return $this->render('txlog');
	}
	public function actionInfo(){
		return $this->render('info');
	}
	public function actionProfile(){
		return $this->render('profile');
	}		
	public function actionPaycode(){
		return $this->render('paycode');
	}			
}