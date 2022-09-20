<?php

use common\models\Region;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Region */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Xududlar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">

                <h1><?= Html::encode($this->title) ?></h1>

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
                        [
                            'attribute' => 'img',
                            'format' => 'raw',
                            'value' => static function(Region $model){
                                return Html::img($model->getImageUrl(), ['class' => 'image-fluid', 'style' => 'height: 100px']);
                            }
                        ],
                        'title',
                        [
                            'attribute' => 'content',
                            'format' => 'raw'
                        ],
                        [
                            'attribute' => 'category_id',
                            'format' => 'raw',
                            'value' => static function(Region $model){
                                return $model->category->title ?? '-';
                            }
                        ],
                        'address',
                        'name',
                        'phone',
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

    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <?= Html::img($model->getImageUrl(), ['class' => 'image-fluid image-thumbnail w-100']); ?>
            </div>
        </div>
    </div>
</div>