<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'О магазине';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container" >
    <div class="row "><div class="col-lg-12 shop_title">О магазине</div></div>
    <div class="row">

        <div class="col-lg-12 col-md-12 col-sm-12">
           <div  id ="slider_shop" class="flexslider pull-left" >
                <ul class="slides">
                    <?php foreach ($shop_imge as $row): ?>
                    <li data-thumb='<?=$row->img?>'>
                        <?= Html::img('/' . $row['img']) ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
<span class="shop_info">
            <p><h2>Здравствуй уважаемый покупатель.</h2><br>
            <strong>Интернет-магазин электроники</strong>&nbsp;
            <a href="/site"><strong>Na_Divane.pl</strong></a>- это ваш надежный и верный друг в мире покупок.
            На рынке Могилева мы успешно работаем уже более 10 лет и заслужили доверие, как розничных покупателей, так и ведущих дистрибьюторов и
            импортеров Республики Беларусь, что подтверждено множеством благодарственных писем и различных сертификатов.
            Наш <strong>электронный магазин </strong>один из лучших в Республике Беларусь.
    <br><br> <strong>Удобное расположение магазина</strong><br>
            Наш магазин находится в самом центре города Могилева возле знаменитой площади “Звездочет”.
            <br> <br><strong>“Железная” гарантия и собственный сервисный центр</strong>
            <br> На весь купленный у нас товар распространяется гарантия производителя.
            Для вашего удобства у нас есть собственный сервис центр, в котором вы можете проверить любой купленный у нас товар,
            а также произвести пост-гарантийный ремонт. Наш сервис центр всегда на вашей стороне.<br> <br><strong>Качественная и вежливая доставка
            </strong><br> Бесплатная доставка по городу Могилеву. Выгодная доставка по всей территории Республики Беларусь.
            Наши курьеры подстраиваются под любые требования клиентов. Пункты выдачи в каждом областном центре РБ.<br>
            <br><strong>Огромный выбор товаров</strong><br> Ассортимент нашего интернет-магазина обновляется ежедневно.
            На&nbsp; данный момент у нас более 50&nbsp; тысяч различных товаров по очень выгодным ценам.
            <br><br> <strong>Грамотные консультации</strong><br> Большое внимание мы уделяем культуре обслуживания клиентов.
            У наших консультантов за плечами огромный опыт работы, который позволит сделать вам правильный и безошибочный выбор.
            Для вашего удобства на сайте работает онлайн-консультант. Не стесняйтесь задавайте ему любые вопросы, касающиеся работы магазина.
            <br><br> <strong>Заказы через корзину оформляются круглосуточно</strong></p

</span>
        </div>


    </div>


    <div class="row">
        <div class="col-lg-12">
            <h5 style="text-align: center">Наш адрес</h5>
            <div id="map" style="height: 300px;">
            </div>


        </div>
    </div>
</div>
<script>
    var map;
    function initMap() {
        var myLatLng = {lat: 28.405, lng: 69.36};

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 4,
            center: myLatLng
        });

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            animation: google.maps.Animation.DROP,
            title: 'тута магазине!'
        });
    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDBvPvFiBwEnxElL99gVzb2GuxC18Utztk&callback=initMap"
        async defer></script>

