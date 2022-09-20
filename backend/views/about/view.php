<?php

use common\models\About;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\About */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Biz haqimizda', 'url' => ['index']];
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
                            'value' => static function (About $model) {
                                return Html::img($model->img, ['style' => 'width: 200px']);
                            }
                        ],
                        [
                            'attribute' => 'content_uz',
                            'format' => 'raw',
                        ],
                        [
                            'attribute' => 'content_ru',
                            'format' => 'raw',
                        ],
                        [
                            'attribute' => 'content_en',
                            'format' => 'raw',
                        ],
                    ],
                ]) ?>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <?= Html::img($model->img, ['class' => 'image-fluid image-thumbnail w-100']); ?>
            </div>
        </div>
    </div>
</div>
