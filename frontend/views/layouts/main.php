<?php

/** @var \yii\web\View $this */

/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>" class="h-100">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <link rel="icon" type="image/x-icon" href="/img/png/gerb.png">
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>

    <?=

    \diecoding\toastr\ToastrFlash::widget();

    ?>

    <?= $this->render('_modal'); ?>

    <!-- //menu-left -->
    <div class="bg-p"></div>
    <div class="bg-m"></div>


    <?= $this->render('_menu-l'); ?>
    <?= $this->render('_navigation-top'); ?>
    <?= $this->render('_menu-bar'); ?>
    <?= $content ?>
    <?= $this->render('_footer'); ?>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage();
