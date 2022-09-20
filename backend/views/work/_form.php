<?php

use common\models\WorkCategory;
use gofuroov\multilingual\widgets\ActiveForm;
use kartik\datecontrol\DateControl;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Work */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form bg-white p-3 m-2">

    <div class="row">

        <div class="col-md-12">

            <?php $form = ActiveForm::begin(); ?>

            <h5>
                <?= $form->languageSwitcher($model); ?>
            </h5>

            <?= $form->field($model, 'date')->widget(DateControl::class, [
                'type'=>DateControl::FORMAT_DATE,
                'ajaxConversion'=>false,
                'widgetOptions' => [
                    'pluginOptions' => [
                        'autoclose' => true
                    ]
                ]
            ]); ?>

            <?= $form->field($model, 'category_id')->dropDownList(ArrayHelper::map(WorkCategory::find()->all(), 'id', 'title')); ?>

        </div>

        <div class="col-md-12">

            <?=$form->field($model, 'name')->textInput()?>

            <?=$form->field($model, 'organ')->textInput()?>

        </div>

        <div class="col-md-12">

            <div class="row">
                <div class="col-md-6">
                    <?=$form->field($model, 'section')->textarea(['rows' => 8])?>
                </div>
                <div class="col-md-6">
                    <?=$form->field($model, 'spec')->textarea(['rows' => 8])?>
                </div>
            </div>

        </div>

    </div>

    <?= $form->field($model, 'status')->widget(\kartik\switchinput\SwitchInput::class); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success w-100']) ?>
    </div>


    <?php ActiveForm::end(); ?>

</div>
