<?php
/**
 * @Author: Prawee Wongsa <prawee.w@integra8t.com>
 * @Date: 10/19/2017 AD 2:59 PM
 */
$db = require(__DIR__.'/db.php');
$params = require(__DIR__.'/params.php');

return [
    'id' => 'i8-website',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'i8\controllers',
    'aliases' => [
        '@i8' => dirname(__DIR__),
    ],
    'components' => [
        'request' => [
            'baseUrl' => '',
            'cookieValidationKey' => 'l8vemel8vemyd8g'
        ],
        'cache' => [
            'class' => 'yii\caching\MemCache',
            'useMemcached' => true
        ],
        'user' => [
            'identityClass' => 'i8\models\Auth',
            'enableAutoLogin' => true
        ],
        'db' => $db,
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ]
        ],
    ],
    'params' => $params
];
