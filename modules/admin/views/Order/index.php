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
    'order' =>[1,'asc'],
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
<?//=Html::img('/modules/admin/web/img/details_open.png');?>
<?//=Html::img(Url::to('@admin/img/details_open.png'));?>