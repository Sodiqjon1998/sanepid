<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Contact */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Contacts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="card">
    <div class="card-body">

        <p>
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
                'name',
                'email:email',
                'phone',
                'content:ntext',
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
            ],
        ]) ?>

    </div>
</div>
