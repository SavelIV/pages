<?php

use backend\models\Pages;
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $model Pages */

$this->params['breadcrumbs'][] = 'Страница: '.$model->url;
?>
    <div class="site-about">
        <h1>
            <?= Html::encode($model->title) ?>
        </h1>
        <p>
            <?= Html::encode($model->content) ?>
        </p>
    </div>
