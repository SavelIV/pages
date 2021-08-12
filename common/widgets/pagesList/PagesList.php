<?php

namespace common\widgets\pagesList;

use backend\models\Pages;
use yii\base\Widget;
use yii\data\ActiveDataProvider;

/**
 *
 * @param int $showLimit
 */
class PagesList extends Widget
{

    public function run()
    {

        $list = Pages::find()->orderBy('id ASC');


        $dataProvider = new ActiveDataProvider([
            'query' => $list,
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }
}
