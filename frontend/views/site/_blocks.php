<?php

use common\models\Blocks;

$blocks = Blocks::find()
    ->where(['status' => Blocks::STATUS_ACTIVE])
    ->orderBy(['id' => SORT_DESC])
    ->limit(5)
    ->all();
?>







<!-- //glavni-bottom -->

<div class="counterr">
    <div class="my-container">
        <div class="counter-in">
            <?php foreach ($blocks as $block): ?>
                <div class="card-c" id="counter-box">
                    <img src="<?=$block->icon;?>" alt="" class="top">
                    <h1 class="txt-30 counter" data-number="<?=$block->number;?>"></h1>
                    <p class="txt-16"><?=$block->title;?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
