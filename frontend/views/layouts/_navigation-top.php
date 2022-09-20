<?php

use common\models\Header;
use yii\helpers\Url;

$header = Header::find()->one();


$lang = Yii::$app->language;
?>


<!-- //nsvigation -->

<div class="navigation-top">
    <div class="my-container">
        <div class="top-in">
            <div class="top-in-left">
                <svg class="menu-h" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M19.75 12C19.75 11.5858 19.4142 11.25 19 11.25H5C4.58579 11.25 4.25 11.5858 4.25 12C4.25 12.4142 4.58579 12.75 5 12.75H19C19.4142 12.75 19.75 12.4142 19.75 12Z"
                          fill="black"/>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M19.75 7C19.75 6.58579 19.4142 6.25 19 6.25H5C4.58579 6.25 4.25 6.58579 4.25 7C4.25 7.41421 4.58579 7.75 5 7.75H19C19.4142 7.75 19.75 7.41421 19.75 7Z"
                          fill="black"/>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M19.75 17C19.75 16.5858 19.4142 16.25 19 16.25H5C4.58579 16.25 4.25 16.5858 4.25 17C4.25 17.4142 4.58579 17.75 5 17.75H19C19.4142 17.75 19.75 17.4142 19.75 17Z"
                          fill="black"/>
                </svg>

                <a href="<?= url::home() ?>" class="logos">
                    <img src="/img/png/photo_2022-09-15_18-28-39.jpg" alt="logo" class="logo">
                    <p class="txt-14"><?= $header->title; ?></p>
                </a>
                <div class="main-page ">
                    <div class="main-page-in" style="display: flex !important; justify-content: space-around !important;">
                        <div class="left-in">
                            <svg width="23" height="22" viewBox="0 0 23 22" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M2.96246 8.548C5.30948 13.4392 9.48597 17.328 14.6778 19.4351L14.6942 19.4417L15.6972 19.8696C16.9745 20.4142 18.4757 20.0274 19.2946 18.9427L20.968 16.7261C21.0702 16.5907 21.0438 16.4025 20.908 16.2975L17.9867 14.0418C17.8414 13.9297 17.6278 13.9559 17.5167 14.0993L16.3798 15.5677C16.1036 15.9244 15.6049 16.0483 15.1824 15.8653C11.3002 14.1837 8.18052 11.198 6.42361 7.48244C6.23239 7.07805 6.36187 6.60079 6.73447 6.33651L8.26873 5.24831C8.41866 5.14197 8.44596 4.93759 8.32877 4.79859L5.97161 2.0022C5.86206 1.87222 5.66542 1.84698 5.52396 1.94472L3.19535 3.55361C2.0545 4.34185 1.65274 5.79072 2.23507 7.01665L2.96169 8.54636C2.96195 8.54692 2.96221 8.54746 2.96246 8.548ZM13.9005 21.1673C8.25924 18.8754 3.72182 14.6489 1.17162 9.33292L1.17009 9.32978L0.441945 7.79685C-0.528605 5.75364 0.140997 3.33884 2.04243 2.02511L4.37103 0.416223C5.3613 -0.267983 6.73778 -0.0912667 7.50465 0.818507L9.8618 3.61492C10.682 4.58788 10.4909 6.01859 9.44146 6.76291L8.5623 7.38648C10.0475 10.1443 12.401 12.397 15.2826 13.8183L15.9342 12.9768C16.7119 11.9725 18.2067 11.7897 19.2234 12.5747L22.1448 14.8302C23.0956 15.5644 23.2801 16.8824 22.5646 17.8302L20.8911 20.0468C19.5263 21.8546 17.0243 22.4994 14.8956 21.5916L13.9005 21.1673Z"
                                      fill="#169FD8"/>
                            </svg>
                        </div>
                        <div class="right-in">
                            <p class="txt-14"><?= Yii::t('app', 'ishonch_raqam') ?></p>
                            <p class="txt-14 fw5"><?= $header->belief_number; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top-in-right">
                <div class="blog-k">
                    <a href="tel:<?= $header->phone; ?>" class="phone glavni-btn">
                        <svg width="14" height="22" viewBox="0 0 14 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M13.6304 9.50007L13.6239 9.74287L13.6304 10.0001L13.6243 10.2433L13.6304 10.5001L13.6245 10.745L13.6304 11.0001L13.468 18.1031C13.4295 19.7884 12.1477 21.184 10.4718 21.3655C8.08439 21.624 5.67599 21.624 3.28856 21.3655C1.61265 21.184 0.330883 19.7884 0.292363 18.1031L0.129973 11.0001L0.135843 10.7433L0.129993 10.5001L0.136153 10.2443L0.129943 10.0001L0.136453 9.74397L0.129883 9.50007L0.293893 3.40211C0.296183 3.31703 0.302163 3.23283 0.311683 3.14968L0.315413 3.11452L0.318373 3.08618C0.398983 2.26208 0.855663 1.54332 1.52118 1.11199C1.57084 1.07897 1.62165 1.04752 1.67357 1.01772C1.72435 0.987673 1.77618 0.959172 1.829 0.932282C2.1556 0.759922 2.52009 0.648202 2.90809 0.612482C5.55059 0.369242 8.20979 0.369242 10.8522 0.612492C11.2396 0.648142 11.6036 0.759562 11.9298 0.931462C11.9826 0.958312 12.0344 0.986772 12.0852 1.01678C12.1388 1.04747 12.1912 1.07992 12.2423 1.11403C12.9043 1.5444 13.359 2.25943 13.4413 3.07938L13.4491 3.15368C13.4584 3.23554 13.4642 3.3184 13.4664 3.40211L13.6304 9.50007ZM11.9544 3.32073L12.1114 10.1874L11.9842 14.9177C11.9556 15.981 11.1365 16.8551 10.0772 16.9526C7.95029 17.1484 5.80999 17.1484 3.68311 16.9526C2.62384 16.8551 1.80473 15.981 1.77613 14.9177L1.64893 10.188L1.80592 3.32073C1.80626 3.30595 1.80687 3.29124 1.80776 3.2766C1.86724 2.87432 2.10037 2.52708 2.43092 2.31621C2.55614 2.25093 2.69508 2.20764 2.84288 2.19164C5.52659 1.90101 8.23379 1.90101 10.9175 2.19164C11.0652 2.20764 11.2041 2.2509 11.3293 2.31613C11.66 2.52705 11.8932 2.87446 11.9526 3.27693C11.9535 3.29147 11.9541 3.30607 11.9544 3.32073ZM6.88019 20.7001C7.70859 20.7001 8.38019 20.0285 8.38019 19.2001C8.38019 18.3716 7.70859 17.7001 6.88019 17.7001C6.05179 17.7001 5.38019 18.3716 5.38019 19.2001C5.38019 20.0285 6.05179 20.7001 6.88019 20.7001Z"
                                  fill="white"/>
                        </svg>
                    </a>
                    <div class="language dropdown">
                        <button class="dropdown-toggle language-in" type="button" id="dropdownMenuClickableInside"
                                data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                            <a class="phone glavni-btn">
                                <svg class="rot" width="25" height="25" viewBox="0 0 25 25" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M8.77734 12.2844C8.77734 10.2134 10.4563 8.53442 12.5273 8.53442C14.5984 8.53442 16.2773 10.2134 16.2773 12.2844C16.2773 14.3555 14.5984 16.0344 12.5273 16.0344C10.4563 16.0344 8.77734 14.3555 8.77734 12.2844ZM12.5273 10.0344C11.2847 10.0344 10.2773 11.0418 10.2773 12.2844C10.2773 13.527 11.2847 14.5344 12.5273 14.5344C13.7699 14.5344 14.7773 13.527 14.7773 12.2844C14.7773 11.0418 13.7699 10.0344 12.5273 10.0344Z"
                                          fill="white"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M4.85077 10.9308C4.43165 11.5347 4.27734 12.0071 4.27734 12.2844C4.27734 12.5617 4.43165 13.0341 4.85077 13.638C5.25591 14.2218 5.85812 14.8547 6.62001 15.4394C8.14712 16.6115 10.2408 17.5344 12.5273 17.5344C14.8138 17.5344 16.9075 16.6115 18.4346 15.4394C19.1965 14.8547 19.7987 14.2218 20.2039 13.638C20.623 13.0341 20.7773 12.5617 20.7773 12.2844C20.7773 12.0071 20.623 11.5347 20.2039 10.9308C19.7987 10.347 19.1965 9.71414 18.4346 9.12939C16.9075 7.95734 14.8138 7.03442 12.5273 7.03442C10.2408 7.03442 8.14712 7.95734 6.62001 9.12939C5.85812 9.71414 5.25591 10.347 4.85077 10.9308ZM5.70675 7.93945C7.43699 6.6115 9.84332 5.53442 12.5273 5.53442C15.2113 5.53442 17.6176 6.6115 19.3479 7.93945C20.2147 8.6047 20.9305 9.34686 21.4362 10.0756C21.9279 10.7841 22.2773 11.5617 22.2773 12.2844C22.2773 13.0071 21.9279 13.7847 21.4362 14.4933C20.9305 15.222 20.2147 15.9641 19.3479 16.6294C17.6176 17.9573 15.2113 19.0344 12.5273 19.0344C9.84332 19.0344 7.43699 17.9573 5.70675 16.6294C4.83996 15.9641 4.12415 15.222 3.61844 14.4933C3.12671 13.7847 2.77734 13.0071 2.77734 12.2844C2.77734 11.5617 3.12671 10.7841 3.61844 10.0756C4.12415 9.34686 4.83996 8.6047 5.70675 7.93945Z"
                                          fill="white"/>
                                </svg>
                            </a>
                        </button>
                        <ul class="dropdown-menu menu-in dropdown-menu-end"
                            aria-labelledby="dropdownMenuClickableInside">
                            <p class="txt-16">Ko'rinishi</p>
                            <div class="bottom">
                                <div class="blog-color">
                                    <a id="normal" class="phone glavni-btn">
                                    </a>
                                    <p class="txt-12">Normal</p>
                                </div>
                                <div class="blog-color">
                                    <a id="gray" class="phone glavni-btn">
                                    </a>
                                    <p class="txt-12">Gray</p>
                                </div>
                                <div class="blog-color">
                                    <a id="mode" mode class="phone glavni-btn">
                                    </a>
                                    <p class="txt-12">Dark</p>
                                </div>
                                <div class="blog-color">
                                    <a id="image" class="phone glavni-btn">
                                        <svg width="32" height="31" viewBox="0 0 32 31" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.8242 11.625C18.8242 10.5549 19.6917 9.6875 20.7617 9.6875C21.8317 9.6875 22.6992 10.5549 22.6992 11.625C22.6992 12.6951 21.8317 13.5625 20.7617 13.5625C19.6917 13.5625 18.8242 12.6951 18.8242 11.625Z"
                                                  fill="black"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M24.6773 24.7636L22.904 22.9902L22.1873 23.0525C18.2314 23.3963 14.2531 23.3963 10.2973 23.0525L8.34656 22.8829C7.37222 22.7981 6.58289 22.0567 6.43746 21.0895C6.34117 20.4492 6.26152 19.8072 6.19852 19.1638L11.6799 13.6823L16.164 18.7269C16.4215 19.0165 16.8267 19.1249 17.1945 19.0023L18.4857 18.5719L11.3083 11.3945C11.2083 11.4417 11.1162 11.506 11.0364 11.5858L6.03525 16.5869C5.97074 14.3568 6.10481 12.1225 6.43746 9.91033C6.569 9.0356 7.22726 8.3455 8.07274 8.15895L6.58311 6.66932C5.49897 7.26342 4.71444 8.33914 4.5215 9.62223C3.93554 13.5188 3.93554 17.4811 4.5215 21.3777C4.80011 23.2305 6.31222 24.6508 8.17877 24.8131L10.1295 24.9826C14.197 25.3363 18.2875 25.3363 22.3551 24.9826L24.3057 24.8131C24.4313 24.8022 24.5553 24.7856 24.6773 24.7636ZM11.4833 5.91268C15.1039 5.66803 18.7385 5.70289 22.3551 6.01726L24.3057 6.18683C26.1723 6.34909 27.6845 7.76947 27.9631 9.62223C28.549 13.5188 28.549 17.4811 27.9631 21.3777C27.921 21.6575 27.8508 21.9275 27.7555 22.1848L26.1238 20.5531C26.603 17.0208 26.5774 13.4373 26.047 9.91033C25.9016 8.9432 25.1123 8.20175 24.138 8.11706L22.1873 7.94749C19.2386 7.69116 16.2774 7.6259 13.3224 7.75171L11.4833 5.91268Z"
                                                  fill="black"/>
                                            <path d="M6.24219 3L28.2422 25.5" stroke="black" stroke-width="2"
                                                  stroke-linecap="round"/>
                                        </svg>
                                    </a>
                                    <p class="txt-12">No image</p>
                                </div>
                            </div>
                            <p class="txt-16 katta">Kattalashtirish</p>

                            <p class="txt-12">
                                <output class="txt-12">0</output>
                                %ga kattaroq
                            </p>
                            <input class="none cah" type="range" min="11" max="28" value="11" id="slider">
                        </ul>
                    </div>

                </div>
                <div class="dropdown language">
                    <button class="btn dropdown-toggle language-in" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                        <svg class="glob" width="14" height="16" viewBox="0 0 14 16" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                    d="M12.598 0.167969C12.8267 0.391927 12.8267 0.755044 12.598 0.979002L12.1681 1.3999C14.7369 4.32934 14.6041 8.74738 11.7696 11.5224C10.4316 12.8323 8.71988 13.5528 6.97056 13.6841V14.853H8.3374C8.66091 14.853 8.92319 15.1098 8.92319 15.4265C8.92319 15.7432 8.66091 16 8.3374 16H4.43215C4.10864 16 3.84637 15.7432 3.84637 15.4265C3.84637 15.1098 4.10864 14.853 4.43215 14.853H5.79899V13.6841C4.232 13.5664 2.69505 12.9759 1.42993 11.9126L0.999999 12.3335C0.771237 12.5574 0.400333 12.5574 0.171571 12.3335C-0.0571904 12.1095 -0.0571904 11.7464 0.171571 11.5224L0.723859 10.9818C1.11081 10.6029 1.71212 10.6223 2.08883 10.9528C3.3088 12.0231 4.8455 12.5585 6.38243 12.5591H6.38728C8.03552 12.5584 9.68361 11.9425 10.9411 10.7114C13.3724 8.3311 13.4547 4.52149 11.1877 2.04497C10.8501 1.67617 10.8303 1.08749 11.2173 0.70866L11.7696 0.167969C11.9983 -0.0559896 12.3693 -0.0559896 12.598 0.167969Z"
                                    fill="#B3BEC5"/>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M1.11265 6.25072C1.11265 3.40017 3.47304 1.08934 6.38473 1.08934C9.2964 1.08934 11.6568 3.40017 11.6568 6.25072C11.6568 9.10126 9.2964 11.4121 6.38473 11.4121C3.47304 11.4121 1.11265 9.10126 1.11265 6.25072ZM6.38473 2.23631C4.12008 2.23631 2.28422 4.03362 2.28422 6.25072C2.28422 6.50673 2.30871 6.75715 2.3555 6.99992C2.67676 6.6569 3.13826 6.44188 3.65106 6.44188C4.62162 6.44188 5.40842 7.21219 5.40842 8.16234C5.40842 8.86758 4.97495 9.47379 4.3546 9.73936C4.95316 10.074 5.64617 10.2651 6.38473 10.2651C8.37125 10.2651 10.0278 8.88219 10.4048 7.04611C9.88258 7.83309 8.9768 8.35351 7.94683 8.35351C6.3292 8.35351 5.0179 7.06974 5.0179 5.48607C5.0179 3.90243 6.3292 2.61864 7.94683 2.61864C8.01439 2.61864 8.0814 2.62088 8.14779 2.62528C7.61371 2.37591 7.0159 2.23631 6.38473 2.23631ZM6.18947 5.48607C6.18947 4.53589 6.9763 3.76561 7.94683 3.76561C8.91736 3.76561 9.70419 4.53589 9.70419 5.48607C9.70419 6.43622 8.91736 7.20653 7.94683 7.20653C6.9763 7.20653 6.18947 6.43622 6.18947 5.48607ZM3.65106 7.58886C3.32754 7.58886 3.06527 7.84563 3.06527 8.16234C3.06527 8.47906 3.32754 8.73583 3.65106 8.73583C3.97458 8.73583 4.23685 8.47906 4.23685 8.16234C4.23685 7.84563 3.97458 7.58886 3.65106 7.58886Z"
                                  fill="#B3BEC5"/>
                        </svg>
                        <span class="txt-14">
                                <?php if (Yii::$app->language == 'uz'): ?>
                                    <span class="txt-16"> O'zbek </span>
                                <?php endif; ?>
                            <?php if (Yii::$app->language == 'ru'): ?>
                                <span class="txt-16"> Русский </span>
                            <?php endif; ?>
                            <?php if (Yii::$app->language == 'en'): ?>
                                <span class="txt-16"> English </span>
                            <?php endif; ?>
                            </span>
                        <svg class="chervon" width="10" height="7" viewBox="0 0 10 7" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M9.5303 0.969668C9.8232 1.26256 9.8232 1.73744 9.5303 2.0303L5.5303 6.0303C5.2374 6.3232 4.7626 6.3232 4.4697 6.0303L0.469668 2.0303C0.176777 1.73744 0.176777 1.26256 0.469668 0.969668C0.762558 0.676777 1.23744 0.676777 1.53033 0.969668L5 4.4393L8.4697 0.969668C8.7626 0.676777 9.2374 0.676777 9.5303 0.969668Z"
                                  fill="black"/>
                        </svg>

                    </button>
                    <ul class="dropdown-menu language-menu">

                        <?php if ($lang != 'uz'): ?>
                            <li class="active">
                                <a class="dropdown-item txt-14"
                                   href="<?= Url::current(['lang' => 'uz']) ?>">O'zbek</a>
                            </li>
                        <?php endif ?>
                        <?php if ($lang != 'ru'): ?>
                            <li class="">
                                <a class="dropdown-item txt-14"
                                   href="<?= Url::current(['lang' => 'ru']) ?>">Русский</a>

                            </li>
                        <?php endif; ?>
                        <?php if ($lang != 'en'): ?>
                            <li class="">
                                <a class="dropdown-item txt-14"
                                   href="<?= Url::current(['lang' => 'en']) ?>">English</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>