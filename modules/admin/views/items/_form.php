<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Items */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="items-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?= $form->field($model, 'Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Description')->textarea(['maxlength' => true]) ?>
    <?php if($model->Img): ?>
    <?=Html::img('/' . $model->Img, [
    'alt' => 'yii2 - картинка в gridview',
    'style' => 'max-width:80px;max-height:120px'
    ]);?>
      <?php else:?>
        <?= $form->field($model,'Img')->fileInput() ?>
    <?php endif;?>
<!--    --><?//= $form->field($model, 'Img')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'Price')->textInput() ?>

<!--    --><?//= $form->field($model, 'popular')->textInput() ?>
    <?=$form->field($model, 'popular')->dropDownList([
    '0' => 'Не популярный',
    '1' => 'Популярный',

    ]);?>

<!--    --><?//= $form->field($model, 'id_Category')->textInput() ?>
    <?php
    $items=array('1'=>'1','2'=>'2');
    $params = [
    'prompt' => 'Выберите категорию'
    ];?>
    <?= $form->field($model, 'id_Category')->dropDownList($mas,$params);?>
<!--    --><?//= $form->field($model, 'Date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>

    </div>

    <?php ActiveForm::end(); ?>

    <?= Html::a('Back', ['/admin/items'], ['class' => 'btn btn-primary']) ?>

    <?= Html::a('Update Images', ['update_image', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>

</div>
