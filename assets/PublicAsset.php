<?php


namespace app\assets;

use yii\web\AssetBundle;

// подключаем стили и скрипты для нашего сайта
class PublicAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "public/css/responsive.css",
        "public/css/bootstrap.min.css",
        "public/css/font-awesome.min.css",
        "public/css/animate.min.css",
        "public/css/owl.carousel.css",
        "public/css/owl.theme.css",
        "public/css/owl.transitions.css",
        "public/css/style.css",
    ];
    public $js = [
        "public/js/jquery-3.2.1.min.js",
        "public/js/owl.carousel.min.js",
        "public/js/menu.js",
        "public/js/scripts.js",
        "public/js/jquery.stickit.min.js",
        "public/js/bootstrap.min.js",
    ];
    public $depends = [
       
    ];
}
