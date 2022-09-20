<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Document */

$this->title = 'Qo\'shish';
$this->params['breadcrumbs'][] = ['label' => 'Xujjatlar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="document-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
