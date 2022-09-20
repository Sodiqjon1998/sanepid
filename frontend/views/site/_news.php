<?php


use common\models\News;
use common\models\NewsCategory;
use yii\helpers\StringHelper;
use yii\helpers\Url;

$news = News::find()
    ->where(['status' => News::STATUS_ACTIVE])
    ->all();

$newsCategory = NewsCategory::find()
    ->where(['status' => NewsCategory::STATUS_ACTIVE])
    ->one();
?>


<!-- //yangiliklar     -->

<div class="news">
    <div class="my-container">
        <div class="news-in">
            <div class="top">
                <div class="txt-42">
                    <?=$newsCategory->title;?>
                </div>
                   <a href="<?=Url::to(['news/index']);?>" class="glavni-btn back-btn txt-18">
                       <?=$newsCategory->title;?>
                       <svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M8.4697 1.53033C8.1768 1.23744 8.1768 0.762558 8.4697 0.469668C8.7626 0.176777 9.2374 0.176777 9.5303 0.469668L13.5303 4.4697C13.8232 4.7626 13.8232 5.2374 13.5303 5.5303L9.5303 9.5303C9.2374 9.8232 8.7626 9.8232 8.4697 9.5303C8.1768 9.2374 8.1768 8.7626 8.4697 8.4697L11.1893 5.75H1.5C1.08579 5.75 0.75 5.4142 0.75 5C0.75 4.5858 1.08579 4.25 1.5 4.25H11.1893L8.4697 1.53033Z"
                                 fill="#169FD8"/>
                       </svg>
                   </a>
            </div>
            <div class="main-content">
                <div class="swiper-gallery swiper my-swww">
                    <div class="swiper-wrapper">
                        <?php foreach ($news as $new): ?>
                            <div class="s-card swiper-slide">
                                <img class="top" src="<?=$new->getImageUrl();?>" alt="">
                                <p class="sana ">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M4.00006 0.25C4.41427 0.25 4.75006 0.58579 4.75006 1V2.66763C7.57776 2.4158 10.4224 2.4158 13.2501 2.66763V1C13.2501 0.58579 13.5859 0.25 14.0001 0.25C14.4143 0.25 14.7501 0.58579 14.7501 1V2.81644C16.2431 3.02754 17.4227 4.20847 17.6223 5.71484L17.7089 6.36779C18.0729 9.1141 18.0415 11.8984 17.6155 14.6359C17.4045 15.9919 16.3029 17.0335 14.9371 17.1681L13.7441 17.2858C10.5891 17.5969 7.41106 17.5969 4.25599 17.2858L3.06298 17.1681C1.69724 17.0335 0.595583 15.9919 0.384573 14.6359C-0.0413869 11.8984 -0.0728268 9.1141 0.291213 6.36779L0.377763 5.71484C0.577443 4.20845 1.75699 3.02751 3.25006 2.81643V1C3.25006 0.58579 3.58585 0.25 4.00006 0.25ZM4.44522 4.2028C7.47446 3.90408 10.5257 3.90408 13.5549 4.2028L14.4603 4.2921C15.3271 4.37757 16.0209 5.04854 16.1353 5.91194L16.2219 6.56489C16.2521 6.793 16.2795 7.0214 16.304 7.25H1.69612C1.72061 7.0214 1.74796 6.79301 1.7782 6.5649L1.86475 5.91194C1.9792 5.04854 2.67302 4.37757 3.53977 4.2921L4.44522 4.2028ZM1.57689 8.75C1.47871 10.6381 1.57544 12.5332 1.86673 14.4052C1.97257 15.0854 2.52515 15.6078 3.21019 15.6754L4.4032 15.793C7.46036 16.0945 10.5398 16.0945 13.5969 15.793L14.7899 15.6754C15.4749 15.6078 16.0275 15.0854 16.1334 14.4052C16.4247 12.5332 16.5214 10.6381 16.4232 8.75H1.57689Z"
                                              fill="#BCBCBC"/>
                                    </svg>
                                    <span class="txt-16">
                                        <?=$new->date;?>

                                    </span>
                                </p>
                                <p class="txt-24" style="text-transform: capitalize"><?= StringHelper::truncate($new->title, 100);?>...</p>
                                <a href="<?=Url::to(['news/single', 'id' => $new->id]);?>" class="txt-18"><?=Yii::t('app','btn')?>
                                    <svg width="14" height="10" viewBox="0 0 14 10" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.4697 1.53033C8.1768 1.23744 8.1768 0.762558 8.4697 0.469668C8.7626 0.176777 9.2374 0.176777 9.5303 0.469668L13.5303 4.4697C13.8232 4.7626 13.8232 5.2374 13.5303 5.5303L9.5303 9.5303C9.2374 9.8232 8.7626 9.8232 8.4697 9.5303C8.1768 9.2374 8.1768 8.7626 8.4697 8.4697L11.1893 5.75H1.5C1.08579 5.75 0.75 5.4142 0.75 5C0.75 4.5858 1.08579 4.25 1.5 4.25H11.1893L8.4697 1.53033Z"
                                              fill="#169FD8"/>
                                    </svg>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <button class="glavni-btn btn-prev1">
                    <svg width="10" height="15" viewBox="0 0 10 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M9.58683 0.346844C9.10749 -0.115615 8.33054 -0.115615 7.85125 0.346844L1.30576 6.6627C0.826466 7.12517 0.826466 7.87486 1.30576 8.33734L7.85125 14.6531C8.33054 15.1156 9.10749 15.1156 9.58683 14.6531C10.0661 14.1907 10.0661 13.441 9.58683 12.9785L3.90923 7.50002L9.58683 2.02158C10.0661 1.55912 10.0661 0.809304 9.58683 0.346844Z"
                              fill="white"/>
                    </svg>
                </button>
                <button class="glavni-btn btn-next1">
                    <svg width="10" height="15" viewBox="0 0 10 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M0.413169 0.346844C0.892511 -0.115615 1.66946 -0.115615 2.14875 0.346844L8.69424 6.6627C9.17353 7.12517 9.17353 7.87486 8.69424 8.33734L2.14875 14.6531C1.66946 15.1156 0.892511 15.1156 0.413169 14.6531C-0.0661083 14.1907 -0.0661083 13.441 0.413169 12.9785L6.09077 7.50002L0.413169 2.02158C-0.0661083 1.55912 -0.0661083 0.809304 0.413169 0.346844Z"
                              fill="white"/>
                    </svg>

                </button>

            </div>
        </div>
    </div>
</div>
