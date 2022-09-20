<?php

use common\models\Header;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\searchs\HeaderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Headers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card">
    <div class="card-body">

        <h1><?= Html::encode($this->title) ?></h1>

        <?php Pjax::begin(); ?>
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                [
                    'attribute' => 'logo',
                    'format' => 'raw',
                    'value' => static function(Header $model){
                        return Html::img($model->getImageUrl(), ['class' => 'image-fluid', 'style' => 'height: 100px']);
                    }
                ],
                'title',
                'address',
                'phone',
                'email:email',
                [
                    'class' => ActionColumn::class,
                    'template' => '{view}{update}'
                ],
            ],
        ]); ?>

        <?php Pjax::end(); ?>

    </div>
</div>
