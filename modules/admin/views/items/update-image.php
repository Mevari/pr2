<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Items */

$this->title = 'Обновление изображения: ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<h1><?= Html::encode($this->title) ?></h1>
<div class="book-reviews-form">
<?php $form=ActiveForm::begin([
//        'enableAjaxValidation'=>true,
       // 'validationUrl'=>'validate'
    ]
);?>
    <?php if($model->Img): ?>
        <?=Html::img('/' . $model->Img, [
            'alt' => 'yii2 - картинка в gridview',
            'style' => 'max-width:80px;max-height:120px'
        ]);?>

    <?php endif;?>
<?= $form->field($model,'Img')->fileInput() ?>

    <div class="form-group">

        <?=Html::submitButton($model->isNewRecord ? 'Create':'Update',['class'=>$model->isNewRecord ? 'btn btn-succes' :'btn btn-primary']);?>

    </div>
    <?php ActiveForm::end(); ?>
</div>
