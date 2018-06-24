<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use app\widgets;
use yii\widgets\LinkPager;
use app\widgets\GridPageSize;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Товары';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="items-index">

    <div class="row">
        <div class="col-lg-3 col-md-5 col-sm-12  title_centr"><h1><?= Html::encode($this->title) ?></h1></div>
        <div class="col-lg-6 col-md-4 col-sm-12 admin_items_img">
            <?= Html::img('/web/img/papka.png')?>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12  add_items">
            <div>
                <?= Html::a('Добавить товар', ['create'], ['class' => 'btn btn-success add_items']) ?>
            </p>
            </div>

        <div class="search_items">
            <?= $this->render('_search', ['model' => $searchModel]) ?>
        </div>
            <div class="page_size">
                <?= GridPageSize::widget(['label' => 'Количество']); ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12" style="width: 100%;">

            <?= LinkPager::widget(['pagination' => $dataProvider->pagination

            ]); ?>
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
                'filterSelector' => 'select[name="per-page"]',

                'tableOptions' => [
                    'class' => 'table items_table'
                ],
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    'Name',
                    'Description',
                    ['attribute' => 'Img',
                        'value' => function ($data) {
                            return Html::img('/' . $data->Img, [
                                'alt' => 'yii2 - картинка в gridview',
                                'style' => 'max-width:80px;max-height:120px'
                            ]);
                        },
                        'format' => 'html',
                    ],
                    'Price',
                    [
                        'attribute' => 'popular',
                        'value' => function ($data) {
                            return $data->popular ? '<span class="text-success">Популярен</span>' : '<span class="text-danger">Не популярен</span>';

                        },
                        'format' => 'html',
                    ],
                    [
                        'attribute' => 'id_Category',
                        'value' => function ($data) {
                            return $data->parent_categoty();

                        },

                    ],
//            'id_Category',
//            'Date',

                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?>
        </div>
    </div>

