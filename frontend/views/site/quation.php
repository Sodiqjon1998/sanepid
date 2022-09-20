<?php
$this->title = Yii::t('app', 'savol');

use common\models\QuestionCategory;

$categorys = QuestionCategory::find()->where(['status' => QuestionCategory::STATUS_ACTIVE])->all();


?>


<div class="quation-main">
    <div class="my-container">
        <div class="quation-in">
            <p class="top-t txt-20"><?= Yii::t('app', 'connect'); ?> <span> >  <?= Yii::t('app', 'savol'); ?></span></p>
            <h1 class="txt-48">
                <?= Yii::t('app', 'savol'); ?>
            </h1>
            <div class="tabs">

                <ul id="tabs-nav">
                    <?php foreach ($categorys as $key => $category): ?>
                        <li class="<?= $key === 0 ? 'active' : '' ?>">
                            <a class="txt-20" href="#tab<?= $category->id; ?>">
                                <?= $category->title; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <div id="tabs-content">
                    <?php foreach ($categorys as $category): ?>
                        <div id="tab<?= $category->id ?>" class="tab-content">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <?php foreach ($category->quation as $item): ?>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="<?= $item->id ?>">
                                            <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#f<?= $item->id ?>"
                                                    aria-expanded="false" aria-controls="f<?= $item->id ?>">
                                                <p class="txt-18"><?=$item->title;?></p>
                                            </button>
                                        </h2>
                                        <div id="f<?= $item->id ?>" class="accordion-collapse collapse"
                                             aria-labelledby="<?= $item->id ?>" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body txt-16"><?=$item->content;?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>