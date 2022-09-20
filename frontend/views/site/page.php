<?php

$this->title = Yii::t('app','vazir');
?>


<div class="batafsil-page">
    <div class="my-container">
        <div class="batafsil-in">
            <div class="main">
                <div class="main-left">
                    <p class="top-t txt-20"><?=Yii::t('app','organization_about');?> <span>> <?=Yii::t('app','vazir');?></span></p>
                    <h1 class="txt-48">
                        <?=/** @var TYPE_NAME $page */
                        $page->title;?>
                    </h1>
                    <p class="txt-18">
                        <?=$page->content;?>
                    </p>
                </div>
                <?=$this->render('@frontend/views/news/_other-news');?>
            </div>
        </div>
    </div>
</div>