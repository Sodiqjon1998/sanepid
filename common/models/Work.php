<?php

namespace common\models;

use common\models\defaults\DefaultActiveRecord;
use gofuroov\multilingual\behaviors\MultilingualBehavior;
use Yii;

/**
 * This is the model class for table "work".
 *
 * @property int $id
 * @property int|null $category_id
 * @property string|null $date
 * @property string|null $name
 * @property string|null $spec
 * @property string|null $section
 * @property string|null $organ
 * @property int|null $status
 *
 * @property WorkCategory $category
 */
class Work extends DefaultActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'work';
    }

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
                    'name', 'organ', 'section', 'spec',
                ],
            ],
        ];
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'organ'], 'required'],
            [['name', 'organ', 'section'], 'string', 'max' => 255],
            ['spec', 'string'],
            [['category_id', 'status'], 'integer'],
            [['date'], 'safe'],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => WorkCategory::class, 'targetAttribute' => ['category_id' => 'id']],
        ];
    }


    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(WorkCategory::class, ['id' => 'category_id']);
    }
}
