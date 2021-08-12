<?php
return [
    'class' => 'yii\web\UrlManager',
    'baseUrl' => 'http://admin.pages.test/',
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'rules' => [
        '<view:[\w\-]+>' => 'site/page',
    ],
];