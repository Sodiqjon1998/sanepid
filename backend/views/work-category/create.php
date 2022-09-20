<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\WorkCategory */

$this->title = 'Qo\'shish';
$this->params['breadcrumbs'][] = ['label' => 'Ish o\'rinlari kategoriyasi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="work-category-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
