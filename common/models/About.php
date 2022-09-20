<?php

namespace common\models;

use common\models\defaults\DefaultActiveRecord;
use gofuroov\multilingual\behaviors\MultilingualBehavior;
use Yii;

/**
 * This is the model class for table "about".
 *
 * @property int $id
 * @property string|null $img
 *
 */
class About extends DefaultActiveRecord
{


    public function behaviors()
    {
        return [
            'multilingual' => [
                'class' => MultilingualBehavior::class,
                'languages' => [
                    'uz' => 'Uzbek',
                    'en' => 'English',
                    'ru' => 'Rus',
                ],
                'attributes' => [
                    'content'
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'about';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content'], 'required'],
            [['content'], 'string'],
            [['img'], 'string', 'max' => 255],
        ];
    }

}
