<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\searchs\SignSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Obunalar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card">
    <div class="card-body">

        <h1><?= Html::encode($this->title) ?></h1>

        <?php Pjax::begin(); ?>
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
//            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'email:email',
                [
                    'attribute' => 'status',
                    'format' => 'raw',
                    'value' => function($data){
                        if($data->status == '0'){
                            return Html::a( "O'qildi", Url::to(['sign/view', 'id' => $data->id]), ['class' => "btn btn-info btn-sm"]);
                        }
                        else{
                            return Html::a("O'qilmadi", Url::to(['sign/view', 'id' => $data->id]), ['class' => "btn btn-danger btn-sm"]);
                        }
                    },
                    'filter' => [
                        0 => "O'qildi",
                        1 => "O'qilmadi",
                    ]
                ],
                [
                    'class' => ActionColumn::class,
                    'template' => "{view} {delete}",
                    'contentOptions' => ['style' => 'font-size: 20px;']
                ],
            ],
        ]); ?>

        <?php Pjax::end(); ?>

    </div>
</div>
