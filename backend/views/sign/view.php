<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Sign */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Signs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="sign-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'email:email',
            [
                'attribute' => 'status',
                'format' => 'raw',
                'value' => function($data){
                    if($data->status == '0'){
                        return Html::a( "O'qildi", Url::to(['sign/index']), ['class' => "btn btn-info btn-sm"]);
                    }
                    else{
                        return Html::a("O'qilmadi", Url::to(['sign/view']), ['class' => "btn btn-danger btn-sm"]);
                    }
                },
                'filter' => [
                    0 => "O'qildi",
                    1 => "O'qilmadi",
                ]
            ],
        ],
    ]) ?>

</div>
