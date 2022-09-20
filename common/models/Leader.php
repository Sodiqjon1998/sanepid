<?php

namespace common\models;

use common\models\defaults\DefaultActiveRecord;
use gofuroov\multilingual\behaviors\MultilingualBehavior;
use mohorev\file\UploadImageBehavior;
use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "leader".
 *
 * @property int $id
 * @property int|null $category_id
 * @property string|null $img
 * @property string|null $phone
 * @property int|null $status
 *
 * @property LeaderCategory $category
 * @property LeaderLang[] $leaderLangs
 */
class Leader extends DefaultActiveRecord
{

    const SCENARIO_CREATE = "create";

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
                    'days', 'job', 'authority', 'bio_info'
                ],
            ],
            [
                'class' => UploadImageBehavior::class,
                'attribute' => 'img',
                'scenarios' => ['default', 'create'],
                'path' => '@frontend/web/upload/leader/{id}',
                'url' => '/frontend/web/upload/leader/{id}',
                'thumbs' => [
                    'preview' => ['width' => 300],
                ],
            ],
        ];
    }


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'leader';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['job', 'days'], 'required'],
            [['category_id', 'status'], 'integer'],
            [['authority', 'bio_info'], 'string'],
            [['job', 'days', 'phone', 'name'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => LeaderCategory::className(), 'targetAttribute' => ['category_id' => 'id']],
            [['img'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
            ['img', 'required', 'on' => self::SCENARIO_CREATE],
        ];
    }


    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(LeaderCategory::className(), ['id' => 'category_id']);
    }


    public static function getList(){
        return ArrayHelper::map(LeaderCategory::find()->where(['status' => LeaderCategory::STATUS_ACTIVE])->all(), 'id', 'title');
    }


    public function getImageUrl(){

        return $this->getUploadUrl('img');
    }
}
