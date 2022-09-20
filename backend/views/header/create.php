<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Header */

$this->title = 'Qo\'shish';
$this->params['breadcrumbs'][] = ['label' => 'Headers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="header-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
