<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\JsExpression;


?>

<?= \nullref\datatable\DataTable::widget([
    'data' => $dataProvider->getModels(),
    'scrollCollapse' => true,
    'dom' =>'Bfrtip',
    'buttons' => ['copy', 'csv', 'excel', 'pdf', 'print'],
    'tableOptions' => [
        'class' => 'table table-info table-bordered table-striped datatable dataTable no-footer',
        'style' => 'width: 100%',

    ],
    'order' =>[1,'desc'],
    'columns' => [
        [ 'className'=>'details-control',
          'orderable'=>false,
          'data' => null,
           'defaultContent'=>'',
        ],
        'id',
        'Date',
        'Client_name',
        'Phone',
        'Adress',
        'Email',
        'Comment',
        [
//            'class' => 'nullref\datatable\LinkColumn',
            'title' =>'Статус',
            'render' => new JsExpression('function render(data, type, row, meta ){
                 if(row["Status"]== "0"){ return "В работе";} else {return "Выполнен";}
            }'),
        ],
            [
                'class' => 'nullref\datatable\LinkColumn',
                'url' => ['/admin/order/change_status/'],
                'options' => ['data-confirm' => 'Вы уверены что хотите подтвердить выполненние данного заказа?', 'data-method' => 'post'],
                'queryParams' => ['id'],
                'label' => 'Подтвердить выполнение',
            ],
        [
            'class' => 'nullref\datatable\LinkColumn',
            'url' => ['/admin/order/delete/'],
            'options' => ['data-confirm' => 'Are you sure you want to delete this item?', 'data-method' => 'post'],
            'queryParams' => ['id'],
            'label' => 'Удалить заказ',
        ],

    ],
])

?>
<?=
$this->registerJsFile('/modules/admin/web/js/admin.js', ['depends' => 'app\modules\admin\assets\admin_Asset']);
$this->registerJsFile('https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js', ['depends' => 'app\modules\admin\assets\admin_Asset']);
$this->registerJsFile('https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js', ['depends' => 'app\modules\admin\assets\admin_Asset']);
$this->registerJsFile('https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js',['depends' => 'app\modules\admin\assets\admin_Asset']);
$this->registerJsFile('https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js', ['depends' => 'app\modules\admin\assets\admin_Asset']);
$this->registerJsFile('https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js', ['depends' => 'app\modules\admin\assets\admin_Asset']);
$this->registerJsFile( 'https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js', ['depends' => 'app\modules\admin\assets\admin_Asset']);
$this->registerJsFile( 'https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js',['depends' => 'app\modules\admin\assets\admin_Asset']);?>

<?//=Html::img('/modules/admin/web/img/details_open.png');?>
<?//=Html::img(Url::to('@admin/img/details_open.png'));?>