<?php

namespace backend\models;

use yii\behaviors\TimestampBehavior;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;
use yii\db\BaseActiveRecord;

/**
 * This is the model class for table "pages".
 *
 * @property int $id
 * @property string $url
 * @property string $title
 * @property string $content
 * @property int|null $createdAt
 * @property int|null $updatedAt
 */
class Pages extends ActiveRecord
{
    public function behaviors()
    {
        return [

            'timestamp' => [
                'class' => TimestampBehavior::class,
                'attributes' => [
                    BaseActiveRecord::EVENT_BEFORE_INSERT => ['createdAt'],
                    BaseActiveRecord::EVENT_BEFORE_UPDATE => ['updatedAt'],

                ],
                'value' => function () {
                    return gmdate("Y-m-d H:i");
                },
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['url', 'title', 'content'], 'required'],
            [['content'], 'string'],
            [['url'], 'string', 'max' => 64],
            [['url'], 'match', 'pattern' => '/^([a-z\-\_0-9]+)$/i'],
            [['title'], 'string', 'max' => 128],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'url' => 'Url-адрес',
            'title' => 'Заголовок',
            'content' => 'Содержание',
            'createdAt' => 'Создано',
            'updatedAt' => 'Обновлено',
        ];
    }

    /**
     * @param string|null $url
     * @return ActiveQuery
     */
    public function findByUrl($url)
    {
        return $this->find()->andWhere([Pages::tableName() . '.[[url]]' => $url]);
    }
}
