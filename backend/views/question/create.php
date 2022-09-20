<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Question */

$this->title = 'Qo\'shish';
$this->params['breadcrumbs'][] = ['label' => 'Savollar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="question-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
