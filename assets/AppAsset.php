<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.min.css',
        'css/main.css',
        'css/animate.min.css',
        'css/flexslider.css',
        'css/jquery.fancybox.css',

        "https://use.fontawesome.com/releases/v5.0.13/css/all.css",
    ];



    public $js = [
        'js/bootstrap.min.js',
//        'js/jquery-3.3.1.min.js',
        'js/jquery.fancybox.js',
        'js/jquery.fancybox.pack.js',
        'js/jquery.flexslider.js',
        'js/main.js',
        'js/wow.min.js',
        'js/jquery.mask.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
