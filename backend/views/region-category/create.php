<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\RegionCategory */

$this->title = 'Qo\'shish';
$this->params['breadcrumbs'][] = ['label' => 'Xudud kategoriyalari', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="region-category-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
