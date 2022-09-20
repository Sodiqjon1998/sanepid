<?php

/* @var $news News */

use common\models\News;
use common\models\NewsCategory;
use yii\bootstrap4\LinkPager;
use yii\helpers\Url;

$this->title = Yii::t('app', 'mat');
$newsCategories = NewsCategory::find()->where(['status' => NewsCategory::STATUS_ACTIVE])->all();

?>


<!-- //main-tab -->

<div class="tabs-page">
    <div class="my-container">
        <div class="tabs-page-in">
            <h1 class="txt-48"><?= Yii::t('app', 'mat') ?></h1>
            <div class="tabs">
                <ul id="tabs-nav">
                    <?php foreach ($newsCategories as $key => $category): ?>
                        <li class="<?= $key === 0 ? 'active' : '' ?>"><a class="txt-18" href="#<?= $category->id; ?>">
                                <?= $category->title; ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <div id="tabs-content">
                    <?php foreach ($newsCategories as $category): ?>
                        <div id="<?= $category->id; ?>" class="tab-content">

                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide blog"  style="display: flex !important; justify-content: space-around !important;">
                                        <?
                                        $query = News::find()->andWhere(['category_id' => $category->id])->orderBy('id DESC');
                                        $daprovider = new \yii\data\ActiveDataProvider([
                                            'query' => $query,
                                            'pagination' => [
                                                'pageSize' => 20
                                            ]
                                        ]);
                                        ?>
                                        <?php foreach ($daprovider->getModels() as $news): ?>
                                            <div class="s-card">
                                                <img class="top" src="<?= $news->getImageUrl(); ?>" alt="">
                                                <p class="sana ">
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M4.00006 0.25C4.41427 0.25 4.75006 0.58579 4.75006 1V2.66763C7.57776 2.4158 10.4224 2.4158 13.2501 2.66763V1C13.2501 0.58579 13.5859 0.25 14.0001 0.25C14.4143 0.25 14.7501 0.58579 14.7501 1V2.81644C16.2431 3.02754 17.4227 4.20847 17.6223 5.71484L17.7089 6.36779C18.0729 9.1141 18.0415 11.8984 17.6155 14.6359C17.4045 15.9919 16.3029 17.0335 14.9371 17.1681L13.7441 17.2858C10.5891 17.5969 7.41106 17.5969 4.25599 17.2858L3.06298 17.1681C1.69724 17.0335 0.595583 15.9919 0.384573 14.6359C-0.0413869 11.8984 -0.0728268 9.1141 0.291213 6.36779L0.377763 5.71484C0.577443 4.20845 1.75699 3.02751 3.25006 2.81643V1C3.25006 0.58579 3.58585 0.25 4.00006 0.25ZM4.44522 4.2028C7.47446 3.90408 10.5257 3.90408 13.5549 4.2028L14.4603 4.2921C15.3271 4.37757 16.0209 5.04854 16.1353 5.91194L16.2219 6.56489C16.2521 6.793 16.2795 7.0214 16.304 7.25H1.69612C1.72061 7.0214 1.74796 6.79301 1.7782 6.5649L1.86475 5.91194C1.9792 5.04854 2.67302 4.37757 3.53977 4.2921L4.44522 4.2028ZM1.57689 8.75C1.47871 10.6381 1.57544 12.5332 1.86673 14.4052C1.97257 15.0854 2.52515 15.6078 3.21019 15.6754L4.4032 15.793C7.46036 16.0945 10.5398 16.0945 13.5969 15.793L14.7899 15.6754C15.4749 15.6078 16.0275 15.0854 16.1334 14.4052C16.4247 12.5332 16.5214 10.6381 16.4232 8.75H1.57689Z"
                                                              fill="#BCBCBC"/>
                                                    </svg>
                                                    <span class="txt-16">
                                                    <?= $news->date; ?>

                                                </span>
                                                </p>
                                                <p class="txt-24"><?= mb_substr(strip_tags($news->title), 0, 65); ?></p>
                                                <a href="<?= Url::to(['news/single', 'id' => $news->id]); ?>"
                                                   class="txt-18"><?=Yii::t('app', 'btn');?>
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
                                <div class="swiper-pagination">
                                    <?=LinkPager::widget([
                                            'pagination' => $daprovider->pagination
                                    ]);?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>