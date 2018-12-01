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
        ]
    ],
        'modules' => [
            'debug' => 'yii\debug\Module'
        ]

];