<?php

namespace common\models\defaults;

use gofuroov\multilingual\db\MultilingualLabelsTrait;

use gofuroov\multilingual\db\MultilingualQuery;
use Yii;
use yii\db\ActiveRecord;

class DefaultActiveRecord extends ActiveRecord
{

    const STATUS_ACTIVE = 1;
    const STATUS_NO_ACTIVE = 0;

    use MultilingualLabelsTrait;



    public function attributeLabels()
    {
        return self::getAttributeLabels();
    }

    public static function getAttributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Sarlavha',
            'content' => 'Matin',
            'location' => 'Yo\'nalish',
            'address' => 'Manzili',
            'belief_number' => 'Ishonch raqami',
            'logo' => 'Logotipi',
            'email' => 'Emaili',
            'phone' => 'Telefoni  raqami',

            'img' => "Rasm",
            'category_id' => 'Kategoriyasi',

            'job' => 'Kasbi',
            'days' => 'Qabul kunlari',
            'bio_info' => 'Shaxs ma\'lumoti',
            'authority' => 'Vakolati',
            'name' => 'Ism',
        ];
    }





    public static function find()
    {
        return (new MultilingualQuery(get_called_class()))->multilingual();
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