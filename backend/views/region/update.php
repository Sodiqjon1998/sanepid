<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Region */

$this->title = 'Tahrirlash: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Xududlar', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Tahrirlash';
?>
<div class="region-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
