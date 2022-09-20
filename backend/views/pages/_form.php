<?php

use mihaildev\ckeditor\CKEditor;
use yii\helpers\Html;
use gofuroov\multilingual\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Pages */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form bg-white p-3 m-2">

    <?php $form = ActiveForm::begin(); ?>


    <h5>
        <?= $form->languageSwitcher($model); ?>
    </h5>
    <?= $form->field($model, 'title')->textInput() ?>

    <?= $form->field($model, 'content')->widget(CKEditor::className(),[
        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder',[
            'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
            'inline' => false, //по
        ]),
    ]);?>

    <?= $form->field($model, 'status')->widget(\kartik\switchinput\SwitchInput::class, []); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
