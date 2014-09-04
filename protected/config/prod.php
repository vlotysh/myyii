<?php
$mainConfig = PHP_SAPI === 'cli' ? __DIR__ . '/console.php' : __DIR__ . '/main.php';
return CMap::mergeArray(
    require_once($mainConfig),
    array(
        'components' => array(
            'db' => array(
                'connectionString' => 'mysql:host=localhost;dbname=mtv',
                'emulatePrepare' => true,
                'username' => 'someusername',
                'password' => 'somepassword',
                'charset' => 'utf8',
                'enableProfiling' => YII_DEBUG,
                'enableParamLogging' => YII_DEBUG,
                'schemaCachingDuration' => YII_DEBUG ? 0 : 3600
            ),
        )
    )
);