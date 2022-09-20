<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Blocks */

$this->title = 'Qo\'shish';
$this->params['breadcrumbs'][] = ['label' => 'Bloklar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blocks-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
