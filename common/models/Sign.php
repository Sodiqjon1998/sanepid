<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "sign".
 *
 * @property int $id
 * @property string $email
 * @property int|null $status
 */
class Sign extends \yii\db\ActiveRecord
{

    const STATUS_ACTIVE = 1;
    const STATUS_NO_ACTIVE = 0;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sign';
    }



    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['email'], 'required', 'message' => "Band qilingan"],
            [['status'], 'integer'],
            [['email'], 'string', 'max' => 255],
            [['email'], 'unique'],
            [['email'], 'email']
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

}
