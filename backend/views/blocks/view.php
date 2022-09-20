<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\YiiAsset;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Blocks */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Bloklar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
YiiAsset::register($this);
?>
<div class="card">
    <div class="card-body">

        <h1><?= Html::encode($this->title) ?></h1>

        <p>
            <?= Html::a('Tahrirlash', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Qo\'shish', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ]) ?>
        </p>

        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'id',
                'icon',
                'title',
                'number',
                [
                    'attribute' => 'status',
                    'value' => function ($model) {
                        return $model->getStatusLabel();
                    },
                    'filter' => [
                        1 => 'Faol',
                        0 => 'No faol'
                    ]
                ],
            ],
        ]) ?>

    </div>
</div>
