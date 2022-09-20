<?php

use common\models\Banner;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\searchs\BannerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Banner';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card">
    <div class="card-body">

        <h1><?= Html::encode($this->title) ?></h1>
        <p>
            <!--        --><? //= Html::a('Create Banner', ['create'], ['class' => 'btn btn-success']) ?>
        </p>

        <?php Pjax::begin(); ?>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                [
                    'attribute' => 'img',
                    'format' => 'raw',
                    'value' => static function (Banner $model) {
                        return Html::img($model->getImageUrl(), ['class' => 'image-fluid', 'style' => 'height: 100px']);
                    }
                ],
                [
                    'attribute' => 'content',
                    'format' => 'raw',
                ],
                [
                    'class' => ActionColumn::class,
                    'template' => '{view}{update}',
                    'contentOptions' => ['style' => 'font-size: 20px;']
                ],
            ],
        ]); ?>

        <?php Pjax::end(); ?>

    </div>
</div>
