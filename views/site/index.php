<?php
/* @var $this yii\web\View */


$this->title = 'Na_Divane';


use yii\helpers\Html;
use yii\helpers\Url;


use yii\helpers\Html;
use yii\helpers\Url;

use yii\bootstrap\Modal;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use app\components\FBFWidget;
?>

<section>
    <div class="container">
                <div id ="slider_index" class="flexslider">
            <ul class="slides">
                <?php foreach ($discount_img as $elem):?>
                    <li>
                    <div class="row nopadding">
                        <div class ="col-12 nopadding">

                               <?= Html::img('/' . $elem['img']) ?>

                        </div>
                    </div>                
                </li>
                 <?php endforeach; ?>
             </ul>
        </div>
    </div>
</section>
<?= FBFWidget::widget([]) ?>
<div class="container">
    <div class="FEATURES" id="features">
        <div class="row title wow slideInLeft">
            <div class="col-lg-6 text_title">
                <h1>Na_Divane.pl</h1>

                <p>Вам необходим велосипед , мотоцикл, чайник или любая другая электроника по очень доступной цене?<br>
                    Все эти товары и не только вы можете выбрать и приобрести в нашем интернет-магазине, при этом
                    сэкономите много времени !
                    <br><br>Интернет-магазин <b><i>Na_Divane.pl</i></b> это ваш помощник в мире покупок .
                    <br>У нас в магазине вы можете удобно выбрать  и сравнить любой товар,  а наша служба доставки точно и в срок  доставит ваш  заказ в удобное для вас место.
                    <br> Доставка товаров осуществляется по всей территории <b>Республике Беларусь</b>.</p>

            </div>
        </div>
    </div>
</div>
<section id="works" class="section">
    <div class="text_title2 wow fadeOut">Популярные товары</div>
    <div class="container">
        <?php foreach ($popular_items as $row): ?>
            <div class="col-lg-3 col-sm-3">
                <div class="item_catalog">
                    <a href=<?= URL::to(['items/index', 'id' => $row['id']]); ?>>
                        <div class="img_cont">
                            <?= Html::img(URL::to([$row['Img']])) ?>
                        </div>
                    </a>
                    <div class="items_tit">
                               <span class="items_title">
                                   <a href=<?=URL::to(['items/index', 'id' => $row['id']])?>>
                                    <p><?= $row['Name'] ?></p>
                                </a></span>
                        <p class="price"><?= $row['Price'] . ' руб' ?></p>
                        <span class="btn btn-warning cart_add" data-id="<?= $row['id'] ?>">
                           <i class="fas fa-shopping-cart"></i>
                            В корзину!
                        </span>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<section class="section">
  
    <div class="container">

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 text_title2">Наши преимущества</div>
        </div>
        <div class="panel panel-primary">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-4 col-sm-6 features text-center wow fadeInRight">
                        <img src="web/img/adventage-6.jpg"  alt="выгодные_покупки">
                        <h5>Выгодные покупки</h5>
                        <p>Наш онлайн-гипермаркет предлагает вам выгодные акции, скидки и собственную бонусную программу.</p>
                    </div>
                    <div class="col-md-4 col-sm-6 features text-center wow fadeInRight">
                        <img src="web/img/adventage-4.jpg"  alt="кредит">
                        <h5>КРЕДИТ\РАССРОЧКА</h5>
                        <p>Любой товар можно приобрести в кредит или рассрочку!</p>
                    </div>
                    <div class="col-md-4 col-sm-6 features text-center wow fadeInRight">
                        <img src="web/img/adventage-2.jpg"  alt="честные цены">
                        <h5>Честные цены</h5>
                        <p>Все цены, указанные на сайте, действительны, актуальны 
                            и не зависят от выбранной вами формы оплаты.</p>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 features text-center wow fadeInRight">
                        <img src="web/img/adventage-1.jpg"  alt="Гарантия качества">
                        <h5>Гарантия качества</h5>
                        <p>Мы продаем только сертифицированный товар с гарантией сервисных центров, чек прилагается.</p>
                    </div>
                    <div class="col-md-4 col-sm-6  features text-center wow fadeInRight">
                        <img src="web/img/adventage-3.jpg"  alt="доставка рб">
                        <h5>Доставка по всей Беларуси</h5>
                        <p>Мы доставляем заказы в Минск, Брест, Витебск, Гомель, Гродно, Могилев и в любую другую точку Беларуси!</p>
                    </div>
                    <div class="col-md-4 col-sm-6 features text-center wow fadeInRight">
                        <img src="web/img/adventage-5.jpg"  alt="сервис">
                        <h5>Надежный сервис</h5>
                        <p>Мы предлагаем услуги по сборке, установке, настройке, гарантийному и послегарантийному обслуживанию товаров.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row block_up_footer" id="block_up_footer">
        <div class="col-md-12  text_center_footer">           
            <h5>Вы можете оставить свой номер и мы с вами свяжемся в ближайшее время!</h5>
            <button type="button" class="btn buttom_red buttom_red_footer" data-toggle="modal" data-target="#myModal">Обратная связь</button>
        </div>
    </div>

</div>
