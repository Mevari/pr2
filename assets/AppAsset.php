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
        'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'
    ];
    public $js = [
        'js/jquery-3.3.1.min.js',
        'js/jquery.fancybox.js',
        'js/jquery.fancybox.pack.js',
        'js/jquery.flexslider-min.js',
        'js/main.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}