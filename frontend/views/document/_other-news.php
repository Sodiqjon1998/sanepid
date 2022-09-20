<?php


use common\models\Document;
use common\models\News;
use yii\helpers\StringHelper;
use yii\helpers\Url;
// use Yii;

$otherLaws = Document::find()
    ->where(['status' => Document::STATUS_ACTIVE])
    ->orderBy(['id' => SORT_DESC])
    ->limit(5)
    ->all();
?>


    <p class="top txt-20"><?=Yii::t('app', 'other_law');?></p>
    <div class="cards">
        <?php foreach ($otherLaws as $law): ?>
            <a href="<?=Url::to(['document/single', 'id' => $law->id]);?>" class="card-c">
                <div class="img">
                    <img src="<?=$law->imageUrl;?>" alt="" class="top">
                </div>
                <h1 class="txt-18"><?=StringHelper::truncate($law->title, 50);?> </h1>
                <p class="txt-16"><?=$law->date;?></p>
            </a>
        <?php endforeach; ?>
    </div>