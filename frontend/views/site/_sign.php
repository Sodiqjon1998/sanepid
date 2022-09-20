<?php


use common\models\Sign;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$model = new Sign();
?>

<div class="obuna">
    <div class="obuna-l">
        <h1 class="txt-32"><?=Yii::t('app', 'sign');?></h1>
        <h1 class="txt-16"><?=Yii::t('app', 'con');?></h1>
        <form action="<?=Url::to(['site/sign']);?>">
            <input placeholder="<?=Yii::t('app', 'your_email');?>" style="color: #000" type="email" name="email" class="input txt-16" required>
            <button class="glavni-btn"><?=Yii::t('app', 'submit');?></button>
        </form>
    </div>
    <img src="/img/png/portrait-friendly-male-doctor 1.png" alt="" class="obuna-r">
</div>