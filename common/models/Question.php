<?php

namespace common\models;

use common\models\defaults\DefaultActiveRecord;
use gofuroov\multilingual\behaviors\MultilingualBehavior;
use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "question".
 *
 * @property int $id
 * @property int|null $status
 *
 */
class Question extends DefaultActiveRecord
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
                    'title', 'content'
                ],
            ],
        ];
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'question';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'category_id'], 'required'],
            [['title'], 'string', 'max' => 255],
            [['content'], 'string'],
            [['status', 'category_id'], 'integer'],
        ];
    }


    public static function getlist(){
       return ArrayHelper::map(QuestionCategory::find()->all(), 'id', 'title');
    }

    public function getCategory(){
        return $this->hasOne(QuestionCategory::class, ['id' => 'category_id']);
    }

    public static function statuses(){
        return [
            self::STATUS_ACTIVE => Yii::t('app', 'Faol'),
            self::STATUS_NO_ACTIVE => Yii::t('app', 'Faol Emas'),
        ];
    }


    public function getStatusLabel(){
        return $this->statuses() [$this->status];
    }
}
