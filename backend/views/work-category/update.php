<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\WorkCategory */

$this->title = 'Tahrirlash: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Ish o\'rinlari kategoriyasi', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Tahrirlash';
?>
<div class="work-category-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
