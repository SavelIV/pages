<?php

/* @var $dataProvider backend\controllers\PageController */

use yii\widgets\ListView;

?>

<?php echo ListView::widget([

    'dataProvider' => $dataProvider,
    'itemOptions' => ['class' => 'item'],
    'itemView' => 'block',

]);



