<?php

namespace common\models;

use common\models\defaults\DefaultActiveRecord;
use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "contact".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $content
 * @property int|null $status
 */
class Contact extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'phone', 'content'], 'required'],
            [['content'], 'string'],
            [['status'], 'integer'],
            [['email'], 'email'],
            [['name', 'email', 'phone'], 'string', 'max' => 255],
        ];
    }


}
