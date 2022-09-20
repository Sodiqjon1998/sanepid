<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\QuestionCategory */

$this->title = 'Qo\'shish';
$this->params['breadcrumbs'][] = ['label' => 'Savol kategoriyasi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="question-category-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
