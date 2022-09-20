<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;


/* @var $this \yii\web\View */
/* @var $model \backend\modules\profilemanager\models\ChangePasswordForm */

$this->title = Yii::t('app', 'Change login');
$this->params['breadcrumbs'][] = ['url' => ['index'], 'label' => Yii::t('app', 'Personal cabinet')];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="row">
    <div class="col-md-6">
        <h1 align="center"><?= $this->title ?></h1>
        <?php $form = ActiveForm::begin() ?>
        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-primary']) ?>
        <?php ActiveForm::end() ?>
    </div>
</div>
