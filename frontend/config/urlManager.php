<?php
return [
    'class' => 'yii\web\UrlManager',
    'baseUrl' => 'http://pages.test/',
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'rules' => [
        '<view:[\w\-]+>' => 'site/page',
    ],
];
