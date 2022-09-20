<?php
/* @var $documentCategory \common\models\DocumentCategory */
/* @var $documents \common\models\Document */
/* @var $dataProvider \yii\data\ActiveDataProvider*/

use yii\helpers\Url;
use yii\bootstrap4\LinkPager;


$this->title = $documentCategory->title;

?>


<div class="qonun-main">
    <div class="my-container">
        <div class="qonun-in">
            <p class="top-t txt-20">Hujjatlar <span> > <?= $documentCategory->title; ?></span></p>
            <h1 class="txt-48">
                <?= $documentCategory->title; ?>
            </h1>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide blog-ta">
                        <?php foreach ($documents as $document): ?>
                            <a href="<?=Url::to(['document/single', 'id' => $document->id]);?>" class="card-c">
                                <div class="img">
                                    <img src="<?=$document->getImageUrl();?>" alt="" class="top">
                                </div>
                                <h1 class="txt-18"><?=substr($document->title, 0, 50);?>...</h1>
                                <p class="txt-16"><?=$document->date;?></p>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="swiper-pagination">
                    <?=LinkPager::widget([
                            'pagination' => $dataProvider->pagination
                    ]);?>
                </div>
            </div>
        </div>
    </div>
</div>