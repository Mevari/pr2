<?php
/* @var $this yii\web\View */

$this->title = 'ActiveBox';
?>
<div class="container">
    <div class="FEATURES" id="features">
        <div class="row title">
            <div class="col-lg-6 text_title">
                <h1>Na_Divane.pl</h1>
                <p>Вам необходим  велосипед , мотоцикл, чайник или любая другая электроника по очень доступной  цене?<br>
                    Все эти товары и не только  вы можете выбрать и приобрести в нашем  интернет-магазине, при этом сэкономите  много  времени  !
                    <br><br>Интернет-магазин <b><i>Na_Divane.pl</i></b> это ваш помощник в мире покупок .
                    <br>У нас в магазине вы можете удобно выбрать  и сравнить любой товар,  а наша служба доставки точно и в срок  доставит ваш  заказ в удобное для вас место.
                    <br> Доставка товаров осуществляется по всей территории <b>Республике Беларусь</b>.</p>
            </div>
        </div>
    </div>
</div>
<section class="section">
    <div class="container">

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 text_title2">Наши преимущества</div>
        </div>
        <div class="panel panel-primary">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-4 col-sm-6 features text-center">
                        <img src="web/img/adventage-6.jpg"  alt="выгодные_покупки">
                        <h5>Выгодные покупки</h5>
                        <p>Наш онлайн-гипермаркет предлагает вам выгодные акции, скидки и собственную бонусную программу.</p>
                    </div>
                    <div class="col-md-4 col-sm-6 features text-center">
                        <img src="web/img/adventage-4.jpg"  alt="кредит">
                        <h5>КРЕДИТ\РАССРОЧКА</h5>
                        <p>Любой товар можно приобрести в кредит или рассрочку!</p>
                    </div>
                    <div class="col-md-4 col-sm-6 features text-center">
                        <img src="web/img/adventage-2.jpg"  alt="честные цены">
                        <h5>Честные цены</h5>
                        <p>Все цены, указанные на сайте, действительны, актуальны 
                            и не зависят от выбранной вами формы оплаты.</p>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 features text-center">
                        <img src="web/img/adventage-1.jpg"  alt="Гарантия качества">
                        <h5>Гарантия качества</h5>
                        <p>Мы продаем только сертифицированный товар с гарантией сервисных центров, чек прилагается.</p>
                    </div>
                    <div class="col-md-4 col-sm-6  features text-center">
                        <img src="web/img/adventage-3.jpg"  alt="доставка рб">
                        <h5>Доставка по всей Беларуси</h5>
                        <p>Мы доставляем заказы в Минск, Брест, Витебск, Гомель, Гродно, Могилев и в любую другую точку Беларуси!</p>
                    </div>
                    <div class="col-md-4 col-sm-6 features text-center">
                        <img src="web/img/adventage-5.jpg"  alt="сервис">
                        <h5>Надежный сервис</h5>
                        <p>Мы предлагаем услуги по сборке, установке, настройке, гарантийному и послегарантийному обслуживанию товаров.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="works" class="section">
    <div class="text_title2">Популярные товары</div>
    <div class="container-fluid">
        <div class="row photo_gallery">  
            <?php
            foreach ($popular_items as $items) {
                echo '<div class="col-lg-3 fadeIn animated shrink"><a href="#"  >';
                echo '<div class="imgCenter"><img src="' . $items->Img . '" alt="" class="img_p"></div>';
                echo '<div class="items_opis">';
                echo '<h5>' . $items->Name . '</h5>';
                echo ' <p>' . $items->Price . ' BYN</p>';
                echo '</div>
                </a></div>';
            }
            ?>      
        </div>
    </div>
</section>
<!--<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 author_block" id="author_block">
                <div class="author_block_title">
                    <div class="photo_author">
                        <img src="img/team-1.jpg" alt="photo">
                    </div>
                    <div class="author_text">
                        <h4>Ruth Wood </h4>
                        <h5>FOUNDER, CEO</h5>
                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa
                            justo sit amet risus.
                            Maecenas sed diam eget risus varius blandit sit amet non magna.
                            Nullam quis risus eget urna mollis ornare vel eu leo.</p>
                    </div>
                    <ul class="social-icons clearfix">
                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                        <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                        <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 author_block">
                <div class="author_block_title">
                    <div class="photo_author">
                        <img src="img/team-1.jpg" alt="photo">
                    </div>
                    <div class="author_text">
                        <h4>Ruth Wood </h4>
                        <h5>FOUNDER, CEO</h5>
                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa
                            justo sit amet risus.
                            Maecenas sed diam eget risus varius blandit sit amet non magna.
                            Nullam quis risus eget urna mollis ornare vel eu leo.</p>
                    </div>
                    <ul class="social-icons clearfix">
                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                        <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                        <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 author_block">
                <div class="author_block_title">
                    <div class="photo_author">
                        <img src="img/team-1.jpg" alt="photo">
                    </div>
                    <div class="author_text">
                        <h4>Ruth Wood </h4>
                        <h5>FOUNDER, CEO</h5>
                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa
                            justo sit amet risus.
                            Maecenas sed diam eget risus varius blandit sit amet non magna.
                            Nullam quis risus eget urna mollis ornare vel eu leo.</p>
                    </div>
                    <ul class="social-icons clearfix">
                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                        <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                        <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 author_block">
                <div class="author_block_title">
                    <div class="photo_author">
                        <img src="img/team-1.jpg" alt="photo">
                    </div>
                    <div class="author_text">
                        <h4>Ruth Wood </h4>
                        <h5>FOUNDER, CEO</h5>
                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa
                            justo sit amet risus.
                            Maecenas sed diam eget risus varius blandit sit amet non magna.
                            Nullam quis risus eget urna mollis ornare vel eu leo.</p>
                    </div>
                    <ul class="social-icons clearfix">
                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                        <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                        <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                    </ul>
                </div>
            </div>
            <div></div>
        </div>
    </div>

</section>-->

<div class="flexslider">
    <ul class="slides">
        <li>
            <img src="img/testimonial-2.jpg"/>
        </li>
        <li>
            <img src="img/testimonial-2.jpg"/>
        </li>
    </ul>
</div>
<div class="container">
    <div class="row block_up_footer" id="block_up_footer">
        <div class="col-md-12  text_center_footer">           
            <h5>Вы можете оставить свой номер и мы с вами свяжемся в ближайшее время!</h5>
            <button type="button" class="btn buttom_red buttom_red_footer">Обратная связь</button>
        </div>
    </div>
</div>