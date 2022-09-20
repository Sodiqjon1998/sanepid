<?php

use common\models\About;
use yii\helpers\Html;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\StringHelper;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\searchs\AboutSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Biz haqimizda';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card">
    <div class="card-body">

        <h1><?= Html::encode($this->title) ?></h1>

        <?php Pjax::begin(); ?>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                [
                    'attribute' => 'img',
                    'format' => 'raw',
                    'value' => static function (About $model) {
                        return Html::img($model->img, ['style' => 'width: 200px']);
                    }
                ],
                [
                    'class' => ActionColumn::class,
                    'template' => '{view} {update}',
                    'contentOptions' => ['style' => 'font-size: 20px;']
                ],
            ],
        ]); ?>

        <?php Pjax::end(); ?>

    </div>
</div>
