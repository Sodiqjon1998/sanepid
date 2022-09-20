<?php

namespace common\models;

use common\models\defaults\DefaultActiveRecord;
use gofuroov\multilingual\behaviors\MultilingualBehavior;
use mohorev\file\UploadImageBehavior;
use Yii;

/**
 * This is the model class for table "banner".
 *
 * @property int $id
 * @property string|null $img
 *
 */
class Banner extends DefaultActiveRecord
{

    const SCENARIO_CREATE = "create";
    /**
     * {@inheritdoc}
     */


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
            [
                'class' => UploadImageBehavior::class,
                'attribute' => 'img',
                'scenarios' => ['default', 'create'],
                'path' => '@frontend/web/upload/banner/{id}',
                'url' => '/frontend/web/upload/banner/{id}',
                'thumbs' => [
                    'preview' => ['width' => 300],
                ],
            ],
        ];
    }
    public static function tableName()
    {
        return 'banner';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['img'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
            ['img', 'required', 'on' => self::SCENARIO_CREATE],
            ['content', 'string'],
        ];
    }



    public function getImageUrl(){

        return $this->getUploadUrl('img');
    }
}
