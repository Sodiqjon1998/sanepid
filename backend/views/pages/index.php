<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\searchs\PagesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sahifalar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card">
    <div class="card-body">

        <h1><?= Html::encode($this->title) ?></h1>

        <p>
            <?= Html::a('Qo\'shish', ['create'], ['class' => 'btn btn-success']) ?>
        </p>

        <?php Pjax::begin(); ?>
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'title',
                [
                    'attribute' => 'status',
                    'value' => function($model){
                        return $model->getStatusLabel();
                    },
                    'filter' => [
                        1 => 'Faol',
                        0 => 'No faol'
                    ]
                ],
                [
                    'class' => ActionColumn::class
                ],
            ],
        ]); ?>

        <?php Pjax::end(); ?>

    </div>
</div>
