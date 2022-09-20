<?php

use common\models\Leader;
use gofuroov\multilingual\widgets\ActiveForm;
use kartik\datecontrol\DateControl;
use kartik\select2\Select2;
use mihaildev\ckeditor\CKEditor;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Leader */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="card">
    <div class="card-body">

        <?php $form = ActiveForm::begin(); ?>
        <div class="row">
            <div class="col-md-12">
                <h4>
                    <?= $form->languageSwitcher($model); ?>
                </h4>
            </div>
        </div>

        <div class="row">
            <div class="col-md-2">
                <?= $form->field($model, 'img')->fileInput() ?>
            </div>
            <div class="col-md-10">
                <?= $form->field($model, 'job')->textInput() ?>
            </div>
            <div class="col-md-12">
                <?= $form->field($model, 'days')->textInput() ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <?= $form->field($model, 'category_id')->widget(Select2::classname(), [
                    'data' => Leader::getList(),
                    'options' => ['placeholder' => 'Select a state ...'],
                    'pluginOptions' => [
                        'allowClear' => true
                    ],
                ]); ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'phone')->textInput(); ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <?= $form->field($model, 'bio_info')->widget(CKEditor::className(), [
                    'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder', [
                        'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
                        'inline' => false, //по
                    ]),
                ]); ?>
            </div>
            <div class="col-md-12">
                <?= $form->field($model, 'authority')->widget(CKEditor::className(), [
                    'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder', [
                        'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
                        'inline' => false, //по
                    ]),
                ]); ?>
            </div>
        </div>

        <?= $form->field($model, 'name')->textInput(); ?>

        <?= $form->field($model, 'status')->widget(\kartik\switchinput\SwitchInput::class, []); ?>

        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success w-100']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>

