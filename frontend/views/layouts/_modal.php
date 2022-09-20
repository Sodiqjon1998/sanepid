<?php
use yii\helpers\Url;
?>

<!-- //modal -->

<div class="modal-p">
    <svg class="back" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M8.46436 15.5354L15.5354 8.46436" stroke="black" stroke-width="1.5" stroke-linecap="round"/>
        <path d="M8.46436 8.46436L15.5354 15.5354" stroke="black" stroke-width="1.5" stroke-linecap="round"/>
    </svg>

    <h1 class="txt-24"><?=Yii::t('app','service');?></h1>
    <form action="<?=Url::to(['site/search']);?>" name="search" method="get">
        <input type="text" placeholder="&#xF002; <?=Yii::t('app','kalit');?>" id="inp" name="search" style="font-family: FontAwesome,'Inter',
            sans-serif;" class="input txt-18">
        <button class="glavni-btn"><?=Yii::t('app','service');?></button>
    </form>
</div>