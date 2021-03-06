<?php
return [
    'name' => 'Pages',
    'sourceLanguage' => 'ru',
    'language' => 'ru',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'stringHelper' => [
            'class' => 'common\components\StringHelper',
        ],
    ],
];
