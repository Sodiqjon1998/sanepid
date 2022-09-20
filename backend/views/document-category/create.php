<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\DocumentCategory */

$this->title = 'Qo\'shish';
$this->params['breadcrumbs'][] = ['label' => 'Xujjat kategoriyasi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="document-category-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
