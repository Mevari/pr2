<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\modules\admin\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class admin_Asset extends AssetBundle
{
//    public $sourcePath = '@vendor/almasaeed2010/adminlte/bower_components/datatables.net-bs';
    public $sourcePath = '@app/modules/admin/web';
//    public $baseUrl = '@web';
    public $css = [
    'css/admin.css'

    ];

    public $js = [


    ];
    public $depends = [
        'dmstr\web\AdminLteAsset',
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
