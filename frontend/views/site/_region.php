<?php


use common\models\Region;
use yii\helpers\Url;
use yii\helpers\StringHelper;

$regions = Region::find()
    ->where(['status' => Region::STATUS_ACTIVE])
    ->orderBy(['id' => SORT_DESC])
    ->all();
?>


<!-- //xududiy     -->

<div class="xudud">
    <div class="my-container">
        <div class="xudud-in">
            <div class="top">
                <div class="txt-42">
                    <?=Yii::t('app', 'region');?>
                </div>
                    <a href="<?=Url::to(['region/index']);?>" class="glavni-btn back-btn txt-18">
                        <?=Yii::t('app','btn');?>
                        <svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.4697 1.53033C8.1768 1.23744 8.1768 0.762558 8.4697 0.469668C8.7626 0.176777 9.2374 0.176777 9.5303 0.469668L13.5303 4.4697C13.8232 4.7626 13.8232 5.2374 13.5303 5.5303L9.5303 9.5303C9.2374 9.8232 8.7626 9.8232 8.4697 9.5303C8.1768 9.2374 8.1768 8.7626 8.4697 8.4697L11.1893 5.75H1.5C1.08579 5.75 0.75 5.4142 0.75 5C0.75 4.5858 1.08579 4.25 1.5 4.25H11.1893L8.4697 1.53033Z"
                                  fill="#169FD8"/>
                        </svg>
                    </a>
            </div>
            <div class="main-content">
                <?php foreach ($regions as $key => $region): ?>
                    <?php if ($key % 2 == 0): ?>
                        <div class="cards">
                            <div class="card-l">
                                <img src="<?= $region->getImageUrl(); ?>" alt="img">
                                <div class="card-l-in">
                                    <p class="txt-20"><?= StringHelper::truncate($region->title, 40); ?>...</p>
                                    <p class="card-blog">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M7.75 7.5C7.75 5.15279 9.65279 3.25 12 3.25C14.3472 3.25 16.25 5.15279 16.25 7.5C16.25 9.84721 14.3472 11.75 12 11.75C9.65279 11.75 7.75 9.84721 7.75 7.5ZM12 4.75C10.4812 4.75 9.25 5.98122 9.25 7.5C9.25 9.01878 10.4812 10.25 12 10.25C13.5188 10.25 14.75 9.01878 14.75 7.5C14.75 5.98122 13.5188 4.75 12 4.75Z"
                                                  fill="#169FD8"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M8 14.75C6.75736 14.75 5.75 15.7574 5.75 17V18.1883C5.75 18.2064 5.76311 18.2218 5.78097 18.2247C9.89972 18.8972 14.1003 18.8972 18.219 18.2247C18.2369 18.2218 18.25 18.2064 18.25 18.1883V17C18.25 15.7574 17.2426 14.75 16 14.75H15.6591C15.6328 14.75 15.6066 14.7542 15.5815 14.7623L14.716 15.045C12.9512 15.6212 11.0488 15.6212 9.28398 15.045L8.41847 14.7623C8.39342 14.7542 8.36722 14.75 8.34087 14.75H8ZM4.25 17C4.25 14.9289 5.92893 13.25 8 13.25H8.34087C8.52536 13.25 8.70869 13.2792 8.88407 13.3364L9.74959 13.6191C11.2119 14.0965 12.7881 14.0965 14.2504 13.6191L15.1159 13.3364C15.2913 13.2792 15.4746 13.25 15.6591 13.25H16C18.0711 13.25 19.75 14.9289 19.75 17V18.1883C19.75 18.9415 19.2041 19.5837 18.4607 19.7051C14.1819 20.4037 9.8181 20.4037 5.53927 19.7051C4.79588 19.5837 4.25 18.9415 4.25 18.1883V17Z"
                                                  fill="#169FD8"/>
                                        </svg>
                                        <span class="txt-16">
                                    <?= $region->name; ?>
                                </span>
                                    </p>
                                    <p class="card-blog">
                                        <svg width="17" height="17" viewBox="0 0 23 22" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M2.96246 8.548C5.30948 13.4392 9.48597 17.328 14.6778 19.4351L14.6942 19.4417L15.6972 19.8696C16.9745 20.4142 18.4757 20.0274 19.2946 18.9427L20.968 16.7261C21.0702 16.5907 21.0438 16.4025 20.908 16.2975L17.9867 14.0418C17.8414 13.9297 17.6278 13.9559 17.5167 14.0993L16.3798 15.5677C16.1036 15.9244 15.6049 16.0483 15.1824 15.8653C11.3002 14.1837 8.18052 11.198 6.42361 7.48244C6.23239 7.07805 6.36187 6.60079 6.73447 6.33651L8.26873 5.24831C8.41866 5.14197 8.44596 4.93759 8.32877 4.79859L5.97161 2.0022C5.86206 1.87222 5.66542 1.84698 5.52396 1.94472L3.19535 3.55361C2.0545 4.34185 1.65274 5.79072 2.23507 7.01665L2.96169 8.54636C2.96195 8.54692 2.96221 8.54746 2.96246 8.548ZM13.9005 21.1673C8.25924 18.8754 3.72182 14.6489 1.17162 9.33292L1.17009 9.32978L0.441945 7.79685C-0.528605 5.75364 0.140997 3.33884 2.04243 2.02511L4.37103 0.416223C5.3613 -0.267983 6.73778 -0.0912667 7.50465 0.818507L9.8618 3.61492C10.682 4.58788 10.4909 6.01859 9.44146 6.76291L8.5623 7.38648C10.0475 10.1443 12.401 12.397 15.2826 13.8183L15.9342 12.9768C16.7119 11.9725 18.2067 11.7897 19.2234 12.5747L22.1448 14.8302C23.0956 15.5644 23.2801 16.8824 22.5646 17.8302L20.8911 20.0468C19.5263 21.8546 17.0243 22.4994 14.8956 21.5916L13.9005 21.1673Z"
                                                  fill="#169FD8"/>
                                        </svg>
                                        <span class="txt-16">
                                            <?= $region->phone; ?>
                                        </span>
                                    </p>
                                    <p class="card-blog">
                                        <svg width="17" height="20" viewBox="0 0 28 28" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M8.45825 11.6667C8.45825 8.60609 10.9393 6.125 13.9999 6.125C17.0604 6.125 19.5416 8.60609 19.5416 11.6667C19.5416 14.7273 17.0604 17.2083 13.9999 17.2083C10.9393 17.2083 8.45825 14.7273 8.45825 11.6667ZM13.9999 7.875C11.9059 7.875 10.2083 9.57258 10.2083 11.6667C10.2083 13.7607 11.9059 15.4583 13.9999 15.4583C16.094 15.4583 17.7916 13.7607 17.7916 11.6667C17.7916 9.57258 16.094 7.875 13.9999 7.875Z"
                                                  fill="#169FD8"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M4.11171 10.333C4.52509 5.31793 8.71593 1.45831 13.748 1.45831H14.252C19.284 1.45831 23.4748 5.31793 23.8882 10.333C24.1103 13.027 23.2781 15.702 21.567 17.7947L15.9751 24.6334C14.9543 25.8819 13.0456 25.8819 12.0248 24.6334L6.43291 17.7947C4.7218 15.702 3.88964 13.027 4.11171 10.333ZM13.748 3.20831C9.62669 3.20831 6.19435 6.36937 5.85579 10.4767C5.67097 12.7189 6.36356 14.9452 7.78766 16.6869L13.3795 23.5257C13.7002 23.9178 14.2997 23.9178 14.6204 23.5257L20.2122 16.6869C21.6364 14.9452 22.3289 12.7189 22.1441 10.4767C21.8055 6.36937 18.3732 3.20831 14.252 3.20831H13.748Z"
                                                  fill="#169FD8"/>
                                        </svg>

                                        <span class="txt-16">
                                            <?= StringHelper::truncate(strip_tags($region->content), 99); ?>
                                </span>
                                    </p>
                                </div>
                            </div>
                            <div class="card-r">
                                <p class="txt-20"><?= StringHelper::truncate($region->title, 40); ?>...</p>
                                <p class="card-blog">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M7.75 7.5C7.75 5.15279 9.65279 3.25 12 3.25C14.3472 3.25 16.25 5.15279 16.25 7.5C16.25 9.84721 14.3472 11.75 12 11.75C9.65279 11.75 7.75 9.84721 7.75 7.5ZM12 4.75C10.4812 4.75 9.25 5.98122 9.25 7.5C9.25 9.01878 10.4812 10.25 12 10.25C13.5188 10.25 14.75 9.01878 14.75 7.5C14.75 5.98122 13.5188 4.75 12 4.75Z"
                                              fill="#169FD8"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M8 14.75C6.75736 14.75 5.75 15.7574 5.75 17V18.1883C5.75 18.2064 5.76311 18.2218 5.78097 18.2247C9.89972 18.8972 14.1003 18.8972 18.219 18.2247C18.2369 18.2218 18.25 18.2064 18.25 18.1883V17C18.25 15.7574 17.2426 14.75 16 14.75H15.6591C15.6328 14.75 15.6066 14.7542 15.5815 14.7623L14.716 15.045C12.9512 15.6212 11.0488 15.6212 9.28398 15.045L8.41847 14.7623C8.39342 14.7542 8.36722 14.75 8.34087 14.75H8ZM4.25 17C4.25 14.9289 5.92893 13.25 8 13.25H8.34087C8.52536 13.25 8.70869 13.2792 8.88407 13.3364L9.74959 13.6191C11.2119 14.0965 12.7881 14.0965 14.2504 13.6191L15.1159 13.3364C15.2913 13.2792 15.4746 13.25 15.6591 13.25H16C18.0711 13.25 19.75 14.9289 19.75 17V18.1883C19.75 18.9415 19.2041 19.5837 18.4607 19.7051C14.1819 20.4037 9.8181 20.4037 5.53927 19.7051C4.79588 19.5837 4.25 18.9415 4.25 18.1883V17Z"
                                              fill="#169FD8"/>
                                    </svg>
                                    <span class="txt-16">
                                    <?= $region->name; ?>
                                </span>
                                </p>
                                <p class="card-blog">
                                    <svg width="17" height="17" viewBox="0 0 23 22" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M2.96246 8.548C5.30948 13.4392 9.48597 17.328 14.6778 19.4351L14.6942 19.4417L15.6972 19.8696C16.9745 20.4142 18.4757 20.0274 19.2946 18.9427L20.968 16.7261C21.0702 16.5907 21.0438 16.4025 20.908 16.2975L17.9867 14.0418C17.8414 13.9297 17.6278 13.9559 17.5167 14.0993L16.3798 15.5677C16.1036 15.9244 15.6049 16.0483 15.1824 15.8653C11.3002 14.1837 8.18052 11.198 6.42361 7.48244C6.23239 7.07805 6.36187 6.60079 6.73447 6.33651L8.26873 5.24831C8.41866 5.14197 8.44596 4.93759 8.32877 4.79859L5.97161 2.0022C5.86206 1.87222 5.66542 1.84698 5.52396 1.94472L3.19535 3.55361C2.0545 4.34185 1.65274 5.79072 2.23507 7.01665L2.96169 8.54636C2.96195 8.54692 2.96221 8.54746 2.96246 8.548ZM13.9005 21.1673C8.25924 18.8754 3.72182 14.6489 1.17162 9.33292L1.17009 9.32978L0.441945 7.79685C-0.528605 5.75364 0.140997 3.33884 2.04243 2.02511L4.37103 0.416223C5.3613 -0.267983 6.73778 -0.0912667 7.50465 0.818507L9.8618 3.61492C10.682 4.58788 10.4909 6.01859 9.44146 6.76291L8.5623 7.38648C10.0475 10.1443 12.401 12.397 15.2826 13.8183L15.9342 12.9768C16.7119 11.9725 18.2067 11.7897 19.2234 12.5747L22.1448 14.8302C23.0956 15.5644 23.2801 16.8824 22.5646 17.8302L20.8911 20.0468C19.5263 21.8546 17.0243 22.4994 14.8956 21.5916L13.9005 21.1673Z"
                                              fill="#169FD8"/>
                                    </svg>
                                    <span class="txt-16">
                                    <?= $region->phone; ?>
                                </span>
                                </p>
                                <p class="card-blog">
                                    <svg width="17" height="20" viewBox="0 0 28 28" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M8.45825 11.6667C8.45825 8.60609 10.9393 6.125 13.9999 6.125C17.0604 6.125 19.5416 8.60609 19.5416 11.6667C19.5416 14.7273 17.0604 17.2083 13.9999 17.2083C10.9393 17.2083 8.45825 14.7273 8.45825 11.6667ZM13.9999 7.875C11.9059 7.875 10.2083 9.57258 10.2083 11.6667C10.2083 13.7607 11.9059 15.4583 13.9999 15.4583C16.094 15.4583 17.7916 13.7607 17.7916 11.6667C17.7916 9.57258 16.094 7.875 13.9999 7.875Z"
                                              fill="#169FD8"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M4.11171 10.333C4.52509 5.31793 8.71593 1.45831 13.748 1.45831H14.252C19.284 1.45831 23.4748 5.31793 23.8882 10.333C24.1103 13.027 23.2781 15.702 21.567 17.7947L15.9751 24.6334C14.9543 25.8819 13.0456 25.8819 12.0248 24.6334L6.43291 17.7947C4.7218 15.702 3.88964 13.027 4.11171 10.333ZM13.748 3.20831C9.62669 3.20831 6.19435 6.36937 5.85579 10.4767C5.67097 12.7189 6.36356 14.9452 7.78766 16.6869L13.3795 23.5257C13.7002 23.9178 14.2997 23.9178 14.6204 23.5257L20.2122 16.6869C21.6364 14.9452 22.3289 12.7189 22.1441 10.4767C21.8055 6.36937 18.3732 3.20831 14.252 3.20831H13.748Z"
                                              fill="#169FD8"/>
                                    </svg>

                                    <span class="txt-16">
                                            <?= StringHelper::truncate(strip_tags($region->content), 99); ?>
                                </span>
                                </p>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if ($key % 2 == 1): ?>
                        <div class="cards">
                            <div class="card-r">
                                <p class="txt-20"><?= StringHelper::truncate($region->title, 40); ?>...</p>
                                <p class="card-blog">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M7.75 7.5C7.75 5.15279 9.65279 3.25 12 3.25C14.3472 3.25 16.25 5.15279 16.25 7.5C16.25 9.84721 14.3472 11.75 12 11.75C9.65279 11.75 7.75 9.84721 7.75 7.5ZM12 4.75C10.4812 4.75 9.25 5.98122 9.25 7.5C9.25 9.01878 10.4812 10.25 12 10.25C13.5188 10.25 14.75 9.01878 14.75 7.5C14.75 5.98122 13.5188 4.75 12 4.75Z"
                                              fill="#169FD8"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M8 14.75C6.75736 14.75 5.75 15.7574 5.75 17V18.1883C5.75 18.2064 5.76311 18.2218 5.78097 18.2247C9.89972 18.8972 14.1003 18.8972 18.219 18.2247C18.2369 18.2218 18.25 18.2064 18.25 18.1883V17C18.25 15.7574 17.2426 14.75 16 14.75H15.6591C15.6328 14.75 15.6066 14.7542 15.5815 14.7623L14.716 15.045C12.9512 15.6212 11.0488 15.6212 9.28398 15.045L8.41847 14.7623C8.39342 14.7542 8.36722 14.75 8.34087 14.75H8ZM4.25 17C4.25 14.9289 5.92893 13.25 8 13.25H8.34087C8.52536 13.25 8.70869 13.2792 8.88407 13.3364L9.74959 13.6191C11.2119 14.0965 12.7881 14.0965 14.2504 13.6191L15.1159 13.3364C15.2913 13.2792 15.4746 13.25 15.6591 13.25H16C18.0711 13.25 19.75 14.9289 19.75 17V18.1883C19.75 18.9415 19.2041 19.5837 18.4607 19.7051C14.1819 20.4037 9.8181 20.4037 5.53927 19.7051C4.79588 19.5837 4.25 18.9415 4.25 18.1883V17Z"
                                              fill="#169FD8"/>
                                    </svg>
                                    <span class="txt-16">
                                    <?= $region->name; ?>
                                </span>
                                </p>
                                <p class="card-blog">
                                    <svg width="17" height="17" viewBox="0 0 23 22" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M2.96246 8.548C5.30948 13.4392 9.48597 17.328 14.6778 19.4351L14.6942 19.4417L15.6972 19.8696C16.9745 20.4142 18.4757 20.0274 19.2946 18.9427L20.968 16.7261C21.0702 16.5907 21.0438 16.4025 20.908 16.2975L17.9867 14.0418C17.8414 13.9297 17.6278 13.9559 17.5167 14.0993L16.3798 15.5677C16.1036 15.9244 15.6049 16.0483 15.1824 15.8653C11.3002 14.1837 8.18052 11.198 6.42361 7.48244C6.23239 7.07805 6.36187 6.60079 6.73447 6.33651L8.26873 5.24831C8.41866 5.14197 8.44596 4.93759 8.32877 4.79859L5.97161 2.0022C5.86206 1.87222 5.66542 1.84698 5.52396 1.94472L3.19535 3.55361C2.0545 4.34185 1.65274 5.79072 2.23507 7.01665L2.96169 8.54636C2.96195 8.54692 2.96221 8.54746 2.96246 8.548ZM13.9005 21.1673C8.25924 18.8754 3.72182 14.6489 1.17162 9.33292L1.17009 9.32978L0.441945 7.79685C-0.528605 5.75364 0.140997 3.33884 2.04243 2.02511L4.37103 0.416223C5.3613 -0.267983 6.73778 -0.0912667 7.50465 0.818507L9.8618 3.61492C10.682 4.58788 10.4909 6.01859 9.44146 6.76291L8.5623 7.38648C10.0475 10.1443 12.401 12.397 15.2826 13.8183L15.9342 12.9768C16.7119 11.9725 18.2067 11.7897 19.2234 12.5747L22.1448 14.8302C23.0956 15.5644 23.2801 16.8824 22.5646 17.8302L20.8911 20.0468C19.5263 21.8546 17.0243 22.4994 14.8956 21.5916L13.9005 21.1673Z"
                                              fill="#169FD8"/>
                                    </svg>
                                    <span class="txt-16">
                                    <?= $region->phone; ?>
                                </span>
                                </p>
                                <p class="card-blog">
                                    <svg width="17" height="20" viewBox="0 0 28 28" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M8.45825 11.6667C8.45825 8.60609 10.9393 6.125 13.9999 6.125C17.0604 6.125 19.5416 8.60609 19.5416 11.6667C19.5416 14.7273 17.0604 17.2083 13.9999 17.2083C10.9393 17.2083 8.45825 14.7273 8.45825 11.6667ZM13.9999 7.875C11.9059 7.875 10.2083 9.57258 10.2083 11.6667C10.2083 13.7607 11.9059 15.4583 13.9999 15.4583C16.094 15.4583 17.7916 13.7607 17.7916 11.6667C17.7916 9.57258 16.094 7.875 13.9999 7.875Z"
                                              fill="#169FD8"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M4.11171 10.333C4.52509 5.31793 8.71593 1.45831 13.748 1.45831H14.252C19.284 1.45831 23.4748 5.31793 23.8882 10.333C24.1103 13.027 23.2781 15.702 21.567 17.7947L15.9751 24.6334C14.9543 25.8819 13.0456 25.8819 12.0248 24.6334L6.43291 17.7947C4.7218 15.702 3.88964 13.027 4.11171 10.333ZM13.748 3.20831C9.62669 3.20831 6.19435 6.36937 5.85579 10.4767C5.67097 12.7189 6.36356 14.9452 7.78766 16.6869L13.3795 23.5257C13.7002 23.9178 14.2997 23.9178 14.6204 23.5257L20.2122 16.6869C21.6364 14.9452 22.3289 12.7189 22.1441 10.4767C21.8055 6.36937 18.3732 3.20831 14.252 3.20831H13.748Z"
                                              fill="#169FD8"/>
                                    </svg>

                                    <span class="txt-16">
                                            <?= StringHelper::truncate(strip_tags($region->content), 99); ?>
                                </span>
                                </p>
                            </div>
                            <div class="card-l">
                                <img src="<?= $region->getImageUrl(); ?>" alt="img">
                                <div class="card-l-in">
                                    <p class="txt-20"><?=StringHelper::truncate($region->title, 40); ?>...</p>
                                    <p class="card-blog">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M7.75 7.5C7.75 5.15279 9.65279 3.25 12 3.25C14.3472 3.25 16.25 5.15279 16.25 7.5C16.25 9.84721 14.3472 11.75 12 11.75C9.65279 11.75 7.75 9.84721 7.75 7.5ZM12 4.75C10.4812 4.75 9.25 5.98122 9.25 7.5C9.25 9.01878 10.4812 10.25 12 10.25C13.5188 10.25 14.75 9.01878 14.75 7.5C14.75 5.98122 13.5188 4.75 12 4.75Z"
                                                  fill="#169FD8"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M8 14.75C6.75736 14.75 5.75 15.7574 5.75 17V18.1883C5.75 18.2064 5.76311 18.2218 5.78097 18.2247C9.89972 18.8972 14.1003 18.8972 18.219 18.2247C18.2369 18.2218 18.25 18.2064 18.25 18.1883V17C18.25 15.7574 17.2426 14.75 16 14.75H15.6591C15.6328 14.75 15.6066 14.7542 15.5815 14.7623L14.716 15.045C12.9512 15.6212 11.0488 15.6212 9.28398 15.045L8.41847 14.7623C8.39342 14.7542 8.36722 14.75 8.34087 14.75H8ZM4.25 17C4.25 14.9289 5.92893 13.25 8 13.25H8.34087C8.52536 13.25 8.70869 13.2792 8.88407 13.3364L9.74959 13.6191C11.2119 14.0965 12.7881 14.0965 14.2504 13.6191L15.1159 13.3364C15.2913 13.2792 15.4746 13.25 15.6591 13.25H16C18.0711 13.25 19.75 14.9289 19.75 17V18.1883C19.75 18.9415 19.2041 19.5837 18.4607 19.7051C14.1819 20.4037 9.8181 20.4037 5.53927 19.7051C4.79588 19.5837 4.25 18.9415 4.25 18.1883V17Z"
                                                  fill="#169FD8"/>
                                        </svg>
                                        <span class="txt-16">
                                    <?= $region->name; ?>
                                </span>
                                    </p>
                                    <p class="card-blog">
                                        <svg width="17" height="17" viewBox="0 0 23 22" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M2.96246 8.548C5.30948 13.4392 9.48597 17.328 14.6778 19.4351L14.6942 19.4417L15.6972 19.8696C16.9745 20.4142 18.4757 20.0274 19.2946 18.9427L20.968 16.7261C21.0702 16.5907 21.0438 16.4025 20.908 16.2975L17.9867 14.0418C17.8414 13.9297 17.6278 13.9559 17.5167 14.0993L16.3798 15.5677C16.1036 15.9244 15.6049 16.0483 15.1824 15.8653C11.3002 14.1837 8.18052 11.198 6.42361 7.48244C6.23239 7.07805 6.36187 6.60079 6.73447 6.33651L8.26873 5.24831C8.41866 5.14197 8.44596 4.93759 8.32877 4.79859L5.97161 2.0022C5.86206 1.87222 5.66542 1.84698 5.52396 1.94472L3.19535 3.55361C2.0545 4.34185 1.65274 5.79072 2.23507 7.01665L2.96169 8.54636C2.96195 8.54692 2.96221 8.54746 2.96246 8.548ZM13.9005 21.1673C8.25924 18.8754 3.72182 14.6489 1.17162 9.33292L1.17009 9.32978L0.441945 7.79685C-0.528605 5.75364 0.140997 3.33884 2.04243 2.02511L4.37103 0.416223C5.3613 -0.267983 6.73778 -0.0912667 7.50465 0.818507L9.8618 3.61492C10.682 4.58788 10.4909 6.01859 9.44146 6.76291L8.5623 7.38648C10.0475 10.1443 12.401 12.397 15.2826 13.8183L15.9342 12.9768C16.7119 11.9725 18.2067 11.7897 19.2234 12.5747L22.1448 14.8302C23.0956 15.5644 23.2801 16.8824 22.5646 17.8302L20.8911 20.0468C19.5263 21.8546 17.0243 22.4994 14.8956 21.5916L13.9005 21.1673Z"
                                                  fill="#169FD8"/>
                                        </svg>
                                        <span class="txt-16">
                                    <?= $region->phone; ?>
                                </span>
                                    </p>
                                    <p class="card-blog">
                                        <svg width="17" height="20" viewBox="0 0 28 28" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M8.45825 11.6667C8.45825 8.60609 10.9393 6.125 13.9999 6.125C17.0604 6.125 19.5416 8.60609 19.5416 11.6667C19.5416 14.7273 17.0604 17.2083 13.9999 17.2083C10.9393 17.2083 8.45825 14.7273 8.45825 11.6667ZM13.9999 7.875C11.9059 7.875 10.2083 9.57258 10.2083 11.6667C10.2083 13.7607 11.9059 15.4583 13.9999 15.4583C16.094 15.4583 17.7916 13.7607 17.7916 11.6667C17.7916 9.57258 16.094 7.875 13.9999 7.875Z"
                                                  fill="#169FD8"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M4.11171 10.333C4.52509 5.31793 8.71593 1.45831 13.748 1.45831H14.252C19.284 1.45831 23.4748 5.31793 23.8882 10.333C24.1103 13.027 23.2781 15.702 21.567 17.7947L15.9751 24.6334C14.9543 25.8819 13.0456 25.8819 12.0248 24.6334L6.43291 17.7947C4.7218 15.702 3.88964 13.027 4.11171 10.333ZM13.748 3.20831C9.62669 3.20831 6.19435 6.36937 5.85579 10.4767C5.67097 12.7189 6.36356 14.9452 7.78766 16.6869L13.3795 23.5257C13.7002 23.9178 14.2997 23.9178 14.6204 23.5257L20.2122 16.6869C21.6364 14.9452 22.3289 12.7189 22.1441 10.4767C21.8055 6.36937 18.3732 3.20831 14.252 3.20831H13.748Z"
                                                  fill="#169FD8"/>
                                        </svg>

                                        <span class="txt-16">
                                            <?= StringHelper::truncate(strip_tags($region->content), 99); ?>
                                </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>