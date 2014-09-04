<?php

class SiteController extends Controller
{
	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
        $this->pageTitle = Yii::t('app', 'Welcome');

		$this->render('index');
	}

	public function actionBook()
	{
        $this->pageTitle = Yii::t('app', 'Books');

		$this->render('book');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		$error = Yii::app()->errorHandler->error;
		if($error)
		{
			if(Yii::app()->request->isAjaxRequest)
			{
				echo $error['message'];
			}
			else
			{
				$this->render('error', array('error' => $error));
			}
		}
	}
}