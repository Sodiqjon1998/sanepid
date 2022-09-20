<?php

use kartik\builder\Form;
use kartik\form\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Header */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="card">
    <div class="card-body">

        <?php $form = ActiveForm::begin();
//        $form->languageSwitcher($model);
        echo Form::widget([
            'model' => $model,
            'form' => $form,
            'columns' => 3,
            'attributes' => [
                'title_uz' => ['type'=>Form::INPUT_TEXT],
                'title_ru' => ['type'=>Form::INPUT_TEXT],
                'title_en' => ['type'=>Form::INPUT_TEXT],
                'address_uz' => ['type'=>Form::INPUT_TEXT],
                'address_ru' => ['type'=>Form::INPUT_TEXT],
                'address_en' => ['type'=>Form::INPUT_TEXT],
                'location_uz' => ['type'=>Form::INPUT_TEXT],
                'location_ru' => ['type'=>Form::INPUT_TEXT],
                'location_en' => ['type'=>Form::INPUT_TEXT],
                'content_uz'=>[
                    'type'=>Form::INPUT_TEXTAREA],
                'content_ru'=>[
                    'type'=>Form::INPUT_TEXTAREA],
                'content_en'=>[
                    'type'=>Form::INPUT_TEXTAREA
                ],

                'logo'=>['type' => Form::INPUT_FILE],
                'phone'=>['type'=> Form::INPUT_TEXT],
                'email'=>['type'=> Form::INPUT_TEXT],
                'belief_number'=>['type'=> Form::INPUT_TEXT],

            ]
        ]);
        echo Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']);
         ActiveForm::end(); ?>

    </div>
</div>
