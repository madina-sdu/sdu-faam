<?php

class DefaultController extends AdminController
{
	public $layout='/layouts/admin';

	public function actionIndex()
	{
		$this->render('index');
	}
}