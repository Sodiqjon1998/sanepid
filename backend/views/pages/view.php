<?php

use common\models\Pages;use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Pages */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sahifalar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">

                <p>
                    <?= Html::a('Tahrirlash', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('O\'chirish', ['delete', 'id' => $model->id], [
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
                        'title',
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
    </div>

    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h2>
                    Matin
                </h2>
            </div>
            <div class="card-body mt-1">
                <?= Html::tag('p', $model->content);?>
            </div>
        </div>
    </div>

</div>
