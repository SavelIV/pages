<?php

/* @var $this yii\web\View */

use common\widgets\pagesList\PagesList;

$this->title = 'О проекте';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <div class="row">
        <div class="col-md-8">
            <h1><?php echo 'О проекте:'; ?></h1>
            &nbsp;
            <hr>
            <p>Это модуль для редактирования статических страниц через админку.</p>
            <p>Новые страницы представлены справа.</p>
            <p>Длина текста контента здесь ограничена через компонент StringHelper и доступна для изменения в параметрах: (frontend/config/params: shortTextLimit=90).</p>
            <p>Редактирование всего контента и добавление новых страниц доступно по ссылке "Редактировать" в шапке страницы, если вы залогинены (admin/11111111).</p>
        </div>
        <div class="col-md-3 text-right">
            <h2><?php echo 'Страницы:'; ?></h2>
            <?php echo PagesList::widget(); ?>
        </div>
    </div>
</div>
