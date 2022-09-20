<?php

namespace common\models;

use common\models\defaults\DefaultActiveRecord;
use gofuroov\multilingual\behaviors\MultilingualBehavior;
use Yii;

/**
 * This is the model class for table "leader_category".
 *
 * @property int $id
 * @property int|null $status
 *
 * @property Leader[] $leaders
 */
class LeaderCategory extends DefaultActiveRecord
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
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'leader_category';
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

    /**
     * Gets query for [[Leaders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLeaders()
    {
        return $this->hasMany(Leader::className(), ['category_id' => 'id']);
    }
}
