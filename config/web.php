<?php

return
[
    'id' => 'school',
    'basePath' => realpath(__DIR__ . '/../'),
    'bootstrap' => [
        'debug'
    ],
    'components' => [
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false
        ],
        'request' => [
            'cookieValidationKey' => 'secret code'
        ],
        'db' => require __DIR__ . '/db.php',
        'user' => [
            'identityClass' => 'app\models\UserIdentity'
        ]
    ],
        'modules' => [
            'debug' => 'yii\debug\Module'
        ]

];