<?php

use kartik\builder\Form;
use kartik\form\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\QuestionCategory */
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
                'status' => [
                    'type' => Form::INPUT_DROPDOWN_LIST,
                    'items' => [1 => 'Faol', 0 => 'Faol emas'],
                    'options' => ['inline' => true]
                ],
            ]
        ]); ?>
        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success w-100']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>
