<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Header */

$this->title = 'Tahrirlash: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Headers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Tahrirlash';
?>
<div class="header-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
