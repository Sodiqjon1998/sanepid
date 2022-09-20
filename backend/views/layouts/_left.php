<?php


use yii\helpers\Url;

$menuItems = [
    ['label' => "Bosh sahifa", 'url' => ['/site/index'], 'icon' => 'home',],
    ['label' => "Headers", 'url' => ['/header'], 'icon' => 'diagnoses,fas',],
    ['label' => "Biz haqimizda", 'url' => ['/about'], 'icon' => 'recycle,fas',],
    ['label' => "Menu", 'url' => ['/menumanager'], 'icon' => 'tree,fas',],
    ['label' => "Banner", 'url' => ['/banner'], 'icon' => 'user-md,fas',],
    ['label' => "Sahifalar", 'url' => ['/pages'], 'icon' => 'list',],
    ['label' => "Havolalar", 'url' => ['/links'], 'icon' => 'wind,fas',],
    ['label' => "Bloklar", 'url' => ['/blocks'], 'icon' => 'circle,fas',],
    [
        'label' => "Savollar bo'limi",
        'icon' => 'cogs',
        'items' => [
            ['label' => 'Savol kategoriyasi', 'url' => ['/question-category'], 'icon' => 'list,fas'],
            ['label' => 'Savollar', 'url' => ['/question'], 'icon' => 'list,fas'],
        ]
    ],
    [
        'label' => "Xududlar bo'limi",
        'icon' => 'cogs',
        'items' => [
            ['label' => 'Xudud kategoriyasi', 'url' => ['/region-category'], 'icon' => 'list,fas'],
            ['label' => 'Xududlar', 'url' => ['/region'], 'icon' => 'list,fas'],
        ]
    ],
    [
        'label' => "Yangiliklar bo'limi",
        'icon' => 'cogs',
        'items' => [
            ['label' => 'Yangiliklar kategoriyasi', 'url' => ['/news-category'], 'icon' => 'list,fas'],
            ['label' => 'Yangiliklar', 'url' => ['/news'], 'icon' => 'list,fas'],
        ]
    ],
    [
        'label' => "Rahbariyat bo'limi",
        'icon' => 'cogs',
        'items' => [
            ['label' => 'Rahbariyat kategoriyasi', 'url' => ['/leader-category'], 'icon' => 'user-md,fas'],
            ['label' => 'Rahbariyat', 'url' => ['/leader'], 'icon' => 'users,fas'],
        ]
    ],
    [
        'label' => "Xujjatlar bo'limi",
        'icon' => 'folder',
        'items' => [
            ['label' => 'Xujjat kategoriyasi', 'url' => ['/document-category'], 'icon' => 'copy,fas'],
            ['label' => 'Xujjatlar', 'url' => ['/document'], 'icon' => 'copy,fas'],
        ]
    ],
    ['label' => "Bo'sh ish o'rinlar", 'url' => ['/work'], 'icon' => 'code,fas'],
    ['label' => "Contact", 'url' => ['/contact'], 'icon' => 'phone,fas'],
    ['label' => "Obunalar", 'url' => ['/sign'], 'icon' => 'sign,fas'],
    ['label' => "Bazi o'zgarishlar", 'url' => ['/translate-manager'], 'icon' => 'globe,fas'],
];

?>



<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=Url::home();?>" class="brand-link">
        <img src="<?=Url::base();?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Sanitariya-epidemiologik
osoyishtalik markazi</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?=Url::base();?>/dist/img/sl-b1.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="<?=Url::home()?>" class="d-block">Sanitariya-epidemiologik</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <?php
                echo \backend\widgets\AdminLte3Menu::widget([
                    'items' => $menuItems,
                ]);
            ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
