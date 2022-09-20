<?php

namespace common\models;

use common\models\defaults\DefaultActiveRecord;
use gofuroov\multilingual\behaviors\MultilingualBehavior;
use mohorev\file\UploadImageBehavior;
use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "region".
 *
 * @property int $id
 * @property int|null $category_id
 * @property string|null $img
 * @property string|null $name
 * @property string|null $phone
 * @property int|null $status
 *
 * @property RegionCategory $category
 * @property RegionLang[] $regionLangs
 */
class Region extends DefaultActiveRecord
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
                    'title', 'content'
                ],
            ],
            [
                'class' => UploadImageBehavior::class,
                'attribute' => 'img',
                'scenarios' => ['default', 'create'],
                'path' => '@frontend/web/upload/region/{id}',
                'url' => '/frontend/web/upload/region/{id}',
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
        return 'region';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'content'], 'required'],
            [['category_id', 'status'], 'integer'],
            [['title', 'name', 'phone', 'address'], 'string', 'max' => 255],
            [['content'], 'string'],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => RegionCategory::className(), 'targetAttribute' => ['category_id' => 'id']],
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
        return $this->hasOne(RegionCategory::className(), ['id' => 'category_id']);
    }

    public static function getList(){
        return ArrayHelper::map(RegionCategory::find()->where(['status' => RegionCategory::STATUS_ACTIVE])->all(), 'id', 'title');
    }


    public function getImageUrl(){

        return $this->getUploadUrl('img');
    }
}
