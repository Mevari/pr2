<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\modules\admin\assets;

use yii\web\AssetBundle;
use Yii;


/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class admin_Asset extends AssetBundle
{

    public $basePath = '/modules/admin';
    public $baseUrl = '/modules/admin/web';
    public $css = [
    'css/admin.css',
    ];

    public $js = [
//        'js/admin.js',
//
//    //вынести в виджет..
//        'https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js',
//        'https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js',
//        'https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js',
//        'https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js',
//        'https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js',
//        'https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js',
//        'https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js',

    ];
    public $depends = [
        'dmstr\web\AdminLteAsset',
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
    
}
