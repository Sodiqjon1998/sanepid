<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\searchs\ContactSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bog\'lanish';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card">
    <div class="card-body">

        <?php Pjax::begin(); ?>
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'name',
                'email:email',
                'phone',
                [
                    'attribute' => 'status',
                    'format' => 'raw',
                    'value' => function($data){
                        if($data->status == '0'){
                            return Html::a( "O'qildi", Url::to(['contact/view', 'id' => $data->id]), ['class' => "btn btn-info btn-sm"]);
                        }
                        else{
                            return Html::a("O'qilmadi", Url::to(['contact/view', 'id' => $data->id]), ['class' => "btn btn-danger btn-sm"]);
                        }
                    },
                    'filter' => [
                        0 => "O'qildi",
                        1 => "O'qilmadi",
                    ]
                ],
                //'created_at',
                //'updated_at',
                [
                    'class' => ActionColumn::class,
                    "template" => "{view}{delete}"
                ],
            ],
        ]); ?>

        <?php Pjax::end(); ?>

    </div>
</div>
