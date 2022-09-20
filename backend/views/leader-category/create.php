<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\LeaderCategory */

$this->title = 'Qo\'shish';
$this->params['breadcrumbs'][] = ['label' => 'Rahbariyat kategoriyasi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="leader-category-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
