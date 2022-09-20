<?php

use common\models\Region;
use gofuroov\multilingual\widgets\ActiveForm;
use kartik\select2\Select2;
use mihaildev\ckeditor\CKEditor;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Region */
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
                <?= $form->field($model, 'title')->textInput() ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <?= $form->field($model, 'category_id')->widget(Select2::classname(), [
                    'data' => Region::getList(),
                    'options' => ['placeholder' => 'Select a state ...'],
                    'pluginOptions' => [
                        'allowClear' => true
                    ],
                ]); ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'phone')->textInput(); ?>
            </div>
            <div class="col-md-2 text-center">
                <?= $form->field($model, 'status')->widget(\kartik\switchinput\SwitchInput::class, []); ?>
            </div>
        </div>

        <?= $form->field($model, 'content')->widget(CKEditor::className(),[
            'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder',[
                'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
                'inline' => false, //по
            ]),
        ]);?>
        

        <?= $form->field($model, 'name')->textInput();?>




        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>