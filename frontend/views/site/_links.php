<?php

use common\models\Links;

$links = Links::find()
    ->where(['status' => Links::STATUS_ACTIVE])
    ->orderBy(['id' => SORT_DESC])
    ->all();
?>


<!-- //havolalar     -->

<div class="link">
    <div class="my-container">
        <div class="link-in">
            <div class="top">
                <div class="txt-42">
                    <?=Yii::t('app','links');?>
                </div>
                <div class="buttons-c">
                    <button class="glavni-btn btn-prev3">
                        <svg width="10" height="15" viewBox="0 0 10 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M9.58683 0.346844C9.10749 -0.115615 8.33054 -0.115615 7.85125 0.346844L1.30576 6.6627C0.826466 7.12517 0.826466 7.87486 1.30576 8.33734L7.85125 14.6531C8.33054 15.1156 9.10749 15.1156 9.58683 14.6531C10.0661 14.1907 10.0661 13.441 9.58683 12.9785L3.90923 7.50002L9.58683 2.02158C10.0661 1.55912 10.0661 0.809304 9.58683 0.346844Z"
                                  fill="white"/>
                        </svg>
                    </button>
                    <button class="glavni-btn btn-next3">
                        <svg width="10" height="15" viewBox="0 0 10 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M0.413169 0.346844C0.892511 -0.115615 1.66946 -0.115615 2.14875 0.346844L8.69424 6.6627C9.17353 7.12517 9.17353 7.87486 8.69424 8.33734L2.14875 14.6531C1.66946 15.1156 0.892511 15.1156 0.413169 14.6531C-0.0661083 14.1907 -0.0661083 13.441 0.413169 12.9785L6.09077 7.50002L0.413169 2.02158C-0.0661083 1.55912 -0.0661083 0.809304 0.413169 0.346844Z"
                                  fill="white"/>
                        </svg>

                    </button>
                </div>
            </div>
            <div class="main-content">
                <div class="swiper-fikr swiper my-swwwww">
                    <div class="swiper-wrapper">
                        <?php foreach ($links as $link): ?>
                            <a href="<?=$link->url;?>" class="card-bg swiper-slide">
                                <img src="<?=$link->getImageUrl();?>" alt="">
                                <p class="txt-18">
                                    <?=substr($link->title, 0, 60);?>
                                </p>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>


            </div>
            <?= $this->render('_sign'); ?>
        </div>
    </div>
</div>
