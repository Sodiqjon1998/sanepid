<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\NewsCategory */

$this->title = 'Qo\'shish';
$this->params['breadcrumbs'][] = ['label' => 'Yangiliklar kategoriyasi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-category-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
