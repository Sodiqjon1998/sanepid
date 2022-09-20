<?php

use common\models\Banner;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Banner */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Banner', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
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
                    'attribute' => 'img',
                    'format' => 'raw',
                    'value' => static function(Banner $model){
                        return Html::img($model->getImageUrl(), ['class' => 'image-fluid', 'style' => 'height: 100px']);
                    }
                ],
                [
                    'attribute' => 'content',
                    'format' => 'raw',
                ],
            ],
        ]) ?>

    </div>
</div>
