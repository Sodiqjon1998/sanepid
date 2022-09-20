<?php

use common\models\Header;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Header */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Headers', 'url' => ['index']];
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

                </p>

                <?= DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        'id',
                        [
                            'attribute' => 'logo',
                            'format' => 'raw',
                            'value' => static function(Header $model){
                                return Html::img($model->getImageUrl(), ['class' => 'image-fluid', 'style' => 'height: 100px']);
                            }
                        ],
                        'title',
                        'address',
                        'location',
                        [
                            'attribute' => 'content',
                            'format' => 'raw',
                        ],
                        'belief_number',
                        'phone',
                        'email:email',
                    ],
                ]) ?>

            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <?=Html::img($model->getImageUrl(), ['class' => 'image-fluid']);?>
            </div>
        </div>
    </div>
</div>
