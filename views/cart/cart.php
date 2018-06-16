<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$this->title = 'Корзина';

?>

<div class="container">
    <div class="row cart_title">
        <?php if(Yii::$app->session->hasFlash('Success')): ?>
        <div class="alert alert-success col-sm-12 " role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <p><?=Yii::$app->session->getFlash('Success')?></p>
           </div>
        </div>
        <?php endif; ?>

        <?php if(Yii::$app->session->hasFlash('Erorr')): ?>
            <div class="alert alert-danger col-sm-12 " role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <p>  <?=Yii::$app->session->getFlash('Erorr')?></p>

            </div>

        <?php endif; ?>

        <div class="col-sm-12"><h5>Оформление заказа:</h5></div>

    </div>

<?php if (isset($cart_items)) {
    foreach ($cart_items as $value) { ?>
        <div class="row order_row" item-id= <?= $value['id'] ?>>

            <div class="col-lg-3 col-md-3 col-sm-4 photo_order_items">
                <a href=<?= URL::to(['items/index', 'id' => $value['id']]); ?>>
                    <?= Html::img(Url::to([$value['Img']])); ?>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 items_order">
                <a href=<?= URL::to(['items/index', 'id' => $value['id']]); ?>>

                    <p><?= $value['Name']; ?></p>
                </a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 items_order">
                <p>Количество:<br><br>
                    <a href="#" class="target_plus">
                    <span class="glyphicon glyphicon-plus">
                    </span>
                    </a>
                    <span class="count_items"> <?= $value['count']; ?> </span>

                    <a href="#" class="target_minus">
                    <span class="glyphicon glyphicon-minus">
                    </span>
                    </a>
                </p>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-4 items_price">
                <p>Стоимость:<br><br><span class="items_pric"
                                           data-id="<?php echo $value['Price'] ?>"><?php echo $value['Price'] * $value['count']; ?></span>
                    BYN</p>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-4 col-xs-12">
                <a href="/cart/delete_cart/<?php echo $value['id']; ?>">
                    <span class="glyphicon glyphicon-remove" id="<?= $value['id']; ?>"></span>
                </a>
            </div>
        </div>
    <?php }
} ?>
<div class="row">
    <div class="col-sm-12 line_summa">
        <h5>Сумма: <span id="id_summa"><?= $summa ?></span> BYN</h5>
    </div>
</div>
</div>
<div class="container info_user">
    <div class="cart_info">
        <?php $form = ActiveForm::begin() ?>
        <?= $form->field($order, 'Client_name')->textInput(array('placeholder' => 'Ваше имя')) ?>
        <?= $form->field($order, 'Phone')->widget(\yii\widgets\MaskedInput::className(), [
            'mask' => '+375 (99) 999-99-99',
        ]) ?>
        <?= $form->field($order, 'Adress') ?>
        <?= $form->field($order, 'Email') ?>
        <?= $form->field($order, 'Comment') ?>
        <?= Html::submitButton('Оформить заказ', ['class' => 'btn btn-primary']); ?>
        <?php ActiveForm::end() ?>
    </div>
</div>




