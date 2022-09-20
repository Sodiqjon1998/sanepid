<?php

use gofuroov\multilingual\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Banner */
/* @var $form yii\widgets\ActiveForm */
?>


<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($model, 'img')->widget(\kartik\file\FileInput::class, [
                    'pluginOptions' => [
                        'initialPreview' => Html::img($model->getImageUrl(), ['style' => 'width: 150px;']),
                        'initialCaption' => "The Moon and the Earth",
                        'initialPreviewConfig' => [
                            ['caption' => 'Moon.jpg', 'size' => '873727'],
                            ['caption' => 'Earth.jpg', 'size' => '1287883'],
                        ],
                        'overwriteInitial' => false,
                        'maxFileSize' => 2800
                    ]
                ]); ?>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h3>
                    <?= $form->languageSwitcher($model); ?>
                </h3>

                <?= $form->field($model, 'content')->widget(CKEditor::className(), [
                    'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder', [
                        'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
                        'inline' => false, //по
                    ]),
                ]); ?>

                <div class="form-group">
                    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>

