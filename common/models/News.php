<?php

namespace common\models;

use common\models\defaults\DefaultActiveRecord;
use gofuroov\multilingual\behaviors\MultilingualBehavior;
use mohorev\file\UploadImageBehavior;
use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property int|null $category_id
 * @property string|null $img
 * @property string|null $date
 * @property int|null $status
 *
 * @property NewsCategory $category
 */
class News extends DefaultActiveRecord
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
                'path' => '@frontend/web/upload/news_img/{id}',
                'url' => '/frontend/web/upload/news_img/{id}',
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
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'content'], 'required'],
            [['category_id', 'status'], 'integer'],
            [['date'], 'safe'],
            [['content'], 'string'],
            [['title', 'url'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => NewsCategory::class, 'targetAttribute' => ['category_id' => 'id']],
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
        return $this->hasOne(NewsCategory::class, ['id' => 'category_id']);
    }

    public static function getList(){
        return ArrayHelper::map(NewsCategory::find()->where(['status' => NewsCategory::STATUS_ACTIVE])->all(), 'id', 'title');
    }


    public function getImageUrl(){

        return $this->getUploadUrl('img');
    }
}
