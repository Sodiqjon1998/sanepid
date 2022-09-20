<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Leader */

$this->title = 'Tahrirlash: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Rahbariyat', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Tahrirlash';
?>
<div class="leader-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
