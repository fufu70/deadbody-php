<?php

class DefaultController extends Controller
{
	const DEFAULT_LAYOUT = 'default';

	public $layout = self::DEFAULT_LAYOUT;

	protected function beforeAction($action)
	{
		return true;
	}

	public function actionIndex()
	{
		$this->render('/default/index');
	}
}
