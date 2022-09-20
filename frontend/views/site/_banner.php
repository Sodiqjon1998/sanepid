<?php

use common\models\Banner;
use yii\helpers\Url;

$banner = Banner::find()->one();
?>

<div class="glavni">
    <div class="bg-glav" style="background-image: url('<?=$banner->getImageUrl();?>')"></div>
    <div class="my-container">
        <div class="glavni-in">
            <h1 class="txt-30"><?=yii::t('app','toshkent')?></h1>
            <h1 class="txt-60"><?=yii::t('app','sanitariya')?></h1>
            <button class="glavni-btn txt-18">
                <a href="<?=Url::to(['site/about']);?>" style="margin-top: 30px !important; color: #fff" >
                    <?=yii::t('app','batafsil')?>
                </a>
            </button>
        </div>
    </div>
</div>