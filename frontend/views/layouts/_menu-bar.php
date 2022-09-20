<?php

use backend\modules\menumanager\models\Menu;
use yii\helpers\Url;


$main_menu = Menu::getMenu('menus');
$menus = $main_menu->activeSubMenus;
?>


<div class="menu-bar">
    <div class="my-container">
        <div class="bar-in">
            <ul class="menu">
                <?php foreach ($menus as $menu): ?>
                    <li class="dropdown menu-in">
                        <?php $subMenus = $menu->activeSubMenus; ?>
                        <a class="txt-18 m-in dropdown-toggle menu-in-in"
                           type="button" <?php if (!empty($subMenus)): ?> data-bs-toggle="dropdown" <?php else: ?> href="<?= $menu->url ?>" <?php endif; ?>
                           aria-expanded="false">
                            <?php if (!empty($subMenus)): ?>
                                <svg class="chervon" width="10" height="6" viewBox="0 0 10 6" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M9.5303 0.469668C9.8232 0.762558 9.8232 1.23744 9.5303 1.5303L5.5303 5.5303C5.2374 5.8232 4.7626 5.8232 4.4697 5.5303L0.469668 1.5303C0.176777 1.23744 0.176777 0.762558 0.469668 0.469668C0.762558 0.176777 1.23744 0.176777 1.53033 0.469668L5 3.9393L8.4697 0.469668C8.7626 0.176777 9.2374 0.176777 9.5303 0.469668Z"
                                          fill="white"/>
                                </svg>
                            <?php else: ?>

                            <?php endif; ?>

                            <span class="txt-18">
                            <?= $menu->title; ?>
                        </span>

                        </a>
                        <ul class="dropdown-menu menu-in-menu">
                            <?php foreach ($subMenus as $subMenu): ?>
                                <li><a class="dropdown-item txt-16"
                                       href="<?= $subMenu->url; ?>"><?= $subMenu->title; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                <?php endforeach; ?>
            </ul>
            <a href="#">
                <svg class="poisk mod" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M15.1801 16.5942C11.6463 19.4245 6.47377 19.2017 3.19805 15.926C-0.316668 12.4113 -0.316668 6.71283 3.19805 3.19811C6.71277 -0.316607 12.4113 -0.316607 15.9259 3.19811C19.2017 6.47382 19.4245 11.6464 16.5942 15.1801L23.4685 22.0542C23.859 22.4448 23.859 23.078 23.4685 23.4685C23.0779 23.859 22.4447 23.859 22.0542 23.4685L15.1801 16.5942ZM4.61226 14.5118C1.8786 11.7781 1.8786 7.34599 4.61226 4.61233C7.34594 1.87866 11.7781 1.87866 14.5118 4.61233C17.2434 7.34399 17.2454 11.7716 14.5178 14.5058C14.5158 14.5078 14.5138 14.5097 14.5117 14.5118C14.5097 14.5138 14.5077 14.5158 14.5058 14.5178C11.7715 17.2454 7.34393 17.2434 4.61226 14.5118Z"
                          fill="white"/>
                </svg>
            </a>
        </div>
    </div>
</div>
