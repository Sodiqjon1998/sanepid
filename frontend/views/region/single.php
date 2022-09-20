<?php
/* @var $regionOne \common\models\Region*/
$this->title = Yii::t('app', 'region');
?>



<div class="batafsil-page">
    <div class="my-container">
        <div class="batafsil-in">
            <div class="main">
                <div class="main-left">
                    <p class="top-t txt-20"><?=Yii::t('app', 'region')?> <span>> <?=Yii::t('app', 'title');?></span></p>
                    <img src="<?= $regionOne->imageUrl;?>" alt="" class="img">
                    <h1 class="txt-48">
                        <?=$regionOne->title;?>
                    </h1>
                    <p class="txt-24">
                        <?=$regionOne->content;?>
                    </p>
                </div>
                <?=$this->render('@frontend/views/news/_other-news');?>
            </div>
        </div>
    </div>
</div>