<?php

use common\models\Document;
use common\models\DocumentCategory;
use yii\helpers\Url;

$document = Document::find()
    ->where(['status' => Document::STATUS_ACTIVE])
    ->orderBy(['id' => SORT_DESC])
    ->limit(8)
    ->all();

$documentCategory = DocumentCategory::find()
    ->where(['status' => DocumentCategory::STATUS_ACTIVE])
    ->one();
?>


<!-- //xujjatlar     -->

<div class="work">
    <div class="my-container">
        <div class="work-in">
            <div class="top">
                <div class="txt-42">
                    <?=Yii::t('app', 'doc_title');?>
                </div>
                   <a href="<?=Url::to(['document/index']);?>" class="glavni-btn back-btn txt-18">
                       <?=Yii::t('app','btn');?>
                       <svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M8.4697 1.53033C8.1768 1.23744 8.1768 0.762558 8.4697 0.469668C8.7626 0.176777 9.2374 0.176777 9.5303 0.469668L13.5303 4.4697C13.8232 4.7626 13.8232 5.2374 13.5303 5.5303L9.5303 9.5303C9.2374 9.8232 8.7626 9.8232 8.4697 9.5303C8.1768 9.2374 8.1768 8.7626 8.4697 8.4697L11.1893 5.75H1.5C1.08579 5.75 0.75 5.4142 0.75 5C0.75 4.5858 1.08579 4.25 1.5 4.25H11.1893L8.4697 1.53033Z"
                                 fill="#169FD8"/>
                       </svg>
                   </a>
            </div>
            <div class="main-content">
                <?php foreach ($document as $value): ?>
                    <a href="<?=Url::to(['document/single', 'id' => $value->id]);?>" class="card-c">
                        <div class="img">
                            <img src="<?=$value->getImageUrl();?>" alt="" class="top img-fluid">
                        </div>
                        <h1 class="txt-18"><?=substr($value->title, 0, 50);?> </h1>
                        <p class="txt-16"><?=$value->date;?></p>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
