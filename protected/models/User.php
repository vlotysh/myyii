<?php

Yii::import('application.models._base.BaseUser');

class User extends BaseUser
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function rules() {
		return array(
			array('username, password, last_login', 'required'),
			array('username', 'length', 'max'=>100),
			array('password', 'length', 'max'=>32),
			array('username', 'safe', 'on'=>'search'),
		);
	}

	public function validatePassword($password)
	{
		return ($this->password == md5($password));
	}
}