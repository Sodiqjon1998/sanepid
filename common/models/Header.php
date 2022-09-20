<?php

namespace common\models;

use common\models\defaults\DefaultActiveRecord;
use gofuroov\multilingual\behaviors\MultilingualBehavior;
use mohorev\file\UploadImageBehavior;
use Yii;

/**
 * This is the model class for table "header".
 *
 * @property int $id
 * @property string|null $logo
 * @property string|null $belief_number
 * @property string|null $phone
 * @property string|null $email
 *
 */
class Header extends DefaultActiveRecord
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
                    'title', 'address', 'location', 'content'
                ],
            ],
            [
                'class' => UploadImageBehavior::class,
                'attribute' => 'logo',
                'scenarios' => ['default', 'create'],
                'path' => '@frontend/web/upload/header_logo/{id}',
                'url' => '/frontend/web/upload/header_logo/{id}',
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
        return 'header';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['phone', 'email', 'title', 'location', 'address'], 'string', 'max' => 255],
            [['belief_number' ], 'string', 'max' => 20],
            [['content'], 'string'],
            [['logo'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
            ['logo', 'required', 'on' => self::SCENARIO_CREATE],
        ];
    }


    public function getImageUrl(){

        return $this->getUploadUrl('logo');
    }


}
