<?php

/* @var $this yii\web\View */

use common\widgets\pagesList\PagesList;

$this->title = 'Админка';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Админка.</h1>
        <p class="lead">Здесь можно редактировать статические страницы.</p>

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
