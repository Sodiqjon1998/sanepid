<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'language' => 'uz',
    'modules' => [
        'treemanager' =>  [
            'class' => '\kartik\tree\Module',
        ],
    ],
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
            'baseUrl' => '',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
          'rules' => [
                '<lang:\w+>/' => 'site/index',
                '<lang:\w+>/site/index' => 'site/index',
                  '<lang:\w+>/about' => 'site/about',
                '<lang:\w+>/leader/<id>' => 'leader/index',
                '<lang:\w+>/work' => 'site/work',
                '<lang:\w+>/document/index' => 'document/index',
                '<lang:\w+>/page/<id>' => 'site/page',
                '<lang:\w+>/news/<id>' => 'news/news',
                '<lang:\w+>/site/quation' => 'site/quation',
                '<lang:\w+>/site/contact' => 'site/contact',
                '<lang:\w+>/document/<id>' => 'document/single',
            ],
        ],
    ],
    'params' => $params,
];
