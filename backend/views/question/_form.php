<?php

use common\models\Question;
use common\models\QuestionCategory;
use kartik\builder\Form;
use kartik\form\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Question */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="card">
    <div class="card-body">

        <?php $form = ActiveForm::begin();
        echo Form::widget([
            'model' => $model,
            'form' => $form,
            'columns' => 3,
            'attributes' => [
                'title_uz' => ['type' => Form::INPUT_TEXT],
                'title_ru' => ['type' => Form::INPUT_TEXT],
                'title_en' => ['type' => Form::INPUT_TEXT],
                'content_uz' => [
                    'type' => Form::INPUT_TEXTAREA],
                'content_ru' => [
                    'type' => Form::INPUT_TEXTAREA],
                'content_en' => [
                    'type' => Form::INPUT_TEXTAREA
                ],
                'category_id'=>[
                    'type'=>Form::INPUT_WIDGET,
                    'widgetClass'=>'\kartik\select2\Select2',
                    'options'=>[
                            'data'=> Question::getlist(),
                    ],
                ],
                'status' => [
                    'type' => Form::INPUT_DROPDOWN_LIST,
                    'items' => [1 => 'Faol', 0 => 'Faol emas'],
                    'options' => ['inline' => true]
                ],
            ]
        ]);
        echo Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']);
        ActiveForm::end(); ?>

    </div>
</div>
