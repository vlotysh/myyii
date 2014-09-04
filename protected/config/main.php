<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
	'name' => 'Site Name',
	'theme' => 'default',
	'homeUrl' => array('/'),
	// preloading 'log' component
	'preload' => array('log'),
	'sourceLanguage'=>'00',
	'language' => 'en',
	'aliases' => array(
		//'aliasname' => 'application.alias.path',
	),
	// autoloading model and component classes
	'import' => array(
		'application.vendor.Helper',
		'application.models.*',
		'application.components.*',
		'application.widgets.*',
		'application.libs.*',
		'ext.YiiMailer.YiiMailer',
		'ext.giix-components.*',
		'ext.SoftDelete.SoftDeleteBehavior',
	),
	'modules' => array(
		// gii/default/index
		'gii' => array(
			'class' => 'system.gii.GiiModule',
			'generatorPaths' => array(
				'ext.giix-core', // giix generators
			),
			'password' => "qwerty16",
			'ipFilters' => array('127.0.0.1', '192.168.*'),
		),
	),
	// application components
	'components' => array(
		'user' => array(
			// enable cookie-based authentication
            'class' => 'CWebUser',
			'allowAutoLogin' => true,
			'loginUrl' => ['/site/login'],
		),
		// uncomment the following to enable URLs in path-format

		'urlManager' => array(
			'urlFormat' => 'path',
			'showScriptName' => false,
			'rules' => array(
				'' => 'site/index',
				'login' => 'site/login',
				'logout' => 'site/logout',
				'<controller:\w+>' => '<controller>/index',
				'<controller:\w+>/<id:\d+>' => '<controller>/view',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
			),
		),
        'cache' => array(
            'class' => YII_DEBUG ? 'CDummyCache' : 'CMemCache'
        ),
		'errorHandler' => array(
			// use 'site/error' action to display errors
			'errorAction' => 'site/error',
		),
		'log' => array(
			'class' => 'CLogRouter',
			'routes' => array(
				array(
					'class' => 'CFileLogRoute',
					'levels' => 'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	'params' => require_once(__DIR__ . DIRECTORY_SEPARATOR . 'params.php'),
);
