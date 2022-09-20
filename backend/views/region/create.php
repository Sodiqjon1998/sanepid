<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Region */

$this->title = 'Qo\'shish';
$this->params['breadcrumbs'][] = ['label' => 'Xududlar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="region-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
