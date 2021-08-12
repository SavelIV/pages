<?php

use yii\helpers\Html;
use yii\helpers\HtmlPurifier;


?>
<?php $pageLink = Yii::$app->get('frontendUrlManager')->createUrl([$model['url']]); ?>
<hr>
<p>Страница: <?php echo Html::encode($model['url']); ?></p>
<h4><?php echo Html::a(Html::encode($model['title']), $pageLink); ?></h4>

<p><?php echo HtmlPurifier::process(Yii::$app->stringHelper->getShort($model['content'])); ?>...</p>


