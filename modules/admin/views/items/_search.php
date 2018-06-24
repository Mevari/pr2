<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\ItemsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="items-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

<!--    --><?//= $form->field($model, 'id') ?>

    <?= $form->field($model, 'Name')->textInput()->label('Поиск'); ?>

<!--    --><?//= $form->field($model, 'Description') ?>
<!---->
<!--    --><?//= $form->field($model, 'Img') ?>
<!---->
<!--    --><?//= $form->field($model, 'Price') ?>

    <?php // echo $form->field($model, 'popular') ?>

    <?php // echo $form->field($model, 'id_Category') ?>

    <?php // echo $form->field($model, 'Date') ?>

<!--    <div class="form-group">-->
<!--        --><?//= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
<!--        --><?//= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
<!--    </div>-->

    <?php ActiveForm::end(); ?>

</div>