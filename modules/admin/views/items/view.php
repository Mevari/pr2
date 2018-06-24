<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Items */

$this->title = $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="items-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
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
            'Date',
        ],
    ]) ?>

</div>
