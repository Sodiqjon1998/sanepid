<?php

namespace common\models;

use common\models\defaults\DefaultActiveRecord;
use gofuroov\multilingual\behaviors\MultilingualBehavior;
use Yii;

/**
 * This is the model class for table "question_category".
 *
 * @property int $id
 * @property int|null $status
 *
 * @property QuestionCategoryLang[] $questionCategoryLangs
 */
class QuestionCategory extends DefaultActiveRecord
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
                    'title'
                ],
            ],
        ];
    }
    /**
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'question_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['title'], 'string', 'max' => 255],
            [['status'], 'integer'],
        ];
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


    public function getQuation(){
        return $this->hasMany(Question::class, ['category_id' => 'id']);
    }
}
