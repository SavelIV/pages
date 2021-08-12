<?php

/* @var $this yii\web\View */

use common\widgets\pagesList\PagesList;

$this->title = 'Главная';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Приветствуем!</h1>
        <p class="lead">Здесь можно увидеть статические страницы:</p>

    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-md-12 text-center">
                <h2><?php echo 'Страницы:'; ?></h2>
                <?php echo PagesList::widget(); ?>
            </div>
        </div>

    </div>
</div>
