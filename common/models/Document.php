<?php

namespace common\models;

use common\models\defaults\DefaultActiveRecord;
use gofuroov\multilingual\behaviors\MultilingualBehavior;
use mohorev\file\UploadImageBehavior;
use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "document".
 *
 * @property int $id
 * @property int|null $category_id
 * @property string|null $img
 * @property string|null $title
 * @property string|null $content
 * @property string|null $url
 * @property string|null $date
 * @property int|null $status
 *
 * @property DocumentCategory $category
 */
class Document extends DefaultActiveRecord
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
                'path' => '@frontend/web/upload/document/{id}',
                'url' => '/frontend/web/upload/document/{id}',
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
        return 'document';
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
            [['url', 'title'], 'string', 'max' => 255],
            [['content'], 'string'],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => DocumentCategory::className(), 'targetAttribute' => ['category_id' => 'id']],
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
        return $this->hasOne(DocumentCategory::className(), ['id' => 'category_id']);
    }


    public static function getList(){
        return ArrayHelper::map(DocumentCategory::find()->where(['status' => DocumentCategory::STATUS_ACTIVE])->all(), 'id', 'title');
    }


    public function getImageUrl(){

        return $this->getUploadUrl('img');
    }
}
