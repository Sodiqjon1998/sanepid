<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "css/sign/bootstrap.min.css",
        "./css/sign/swiper-bundle.min.css",
        "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css",
        "css/main.css",
    ];
    public $js = [
        "js/jquery.min.js",
        "js/bootstrap.bundle.min.js",
        "js/scrollreveal.js",
        "js/gsap.min.js",
        "js/ScrollTrigger.min.js",
        "js/swiper-bundle.min.js",
        "js/jsPlumb.min.js",
        "js/index.js",
        "js/404.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
