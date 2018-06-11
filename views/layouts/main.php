
<?php
/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\jui\AutoComplete;

use app\models\Items;
use yii\web\JsExpression;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/favicon-32x32.png" type="image/x-icon">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    
    <?php $this->head() ?>
    

</head>
<body>
<?php $this->beginBody() ?>
<div class="container-fluid head_menu">
    <div class="row header">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top ">
            <div class="col-lg-2 col-md-11 col-sm-12 navbar-brand">
                <div class="col-lg-12 col-md-12 col-sm-12 logo">
                   <img src="/img/logo.png" alt="logo" >
                </div>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="col-lg-10 col-md-12 col-sm-12  collapse navbar-collapse" id="navbarSupportedContent">
        <div class="col-lg-3 col-md-4 col-sm-12">
            <form action="" class="search-form">

                <div class="form-group has-feedback">
                    <? echo AutoComplete::widget([
                        'name'=>'search',
                        'options'=>[ 'class' => 'form-control','id'=>'search'],
                        'clientOptions' => [
                            'source' => ('search/autocomplete'),
                            'minLength' => '3',
                            'autoFill' => true,

                            'select' =>new JsExpression("function(event, ui) {        
                            window.location.href = ui.item.href;
        }"),
                        ] ]);
                    ?>
<!--            		<label for="search" class="sr-only">Search</label>-->
<!--            		<input type="text" class="form-control" name="search" id="search" placeholder="">-->
              		<span class="glyphicon glyphicon-search form-control-feedback"></span>
            	</div>
            </form>
        </div>
      
                 <div class="col-lg-7 col-md-6 col-sm-12 menu">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a href="/site" class="nav-link">Главная</a>
                    </li>
                    <li class="nav-item ">
                        <a href="/category/index" class="nav-link">Товары</a>
                    </li>
                    <li class="nav-item ">
                        <a href="#author_block" class="nav-link">О магазине</a>
                    </li>
                    <li class="nav-item ">
                        <a href="#works" class="nav-link">Доставка</a>
                    </li>
                    <li class="nav-item ">
                        <a href="#block_up_footer" class="nav-link">Гарантия и сервис</a>
                    </li>
                </ul>     
                 </div>
                <div   class="col-lg-2 col-md-2 col-sm-12">
               
                <div id="tools">
                    <div id="shopCart" class="shop-cart" data-shopcart="1">
                        <div id="basket">
                            <p class="h1"><i class="fa fa-shopping-cart"></i><a href="/cart"> Корзина</a></p>
                            <div class="empty">
                                <span class="clear_basket">
                                    <?php if (isset($_SESSION['products'])) {
                                        $count = 0;
                                        foreach ($_SESSION['products'] as $id => $quantity) {
                                            $count = $count + $quantity;
                                        }
                                        if ($count != 0)
                                            echo $count;
                                        else
                                            echo "Ваша корзина пуста";
                                    } else {
                                        echo "Ваша корзина пуста";
                                    }

                                        ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                 </div>
            </div>

        </nav>
    </div>
</div>


    





        <!--<div class="container">-->
        <?=
        Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ])
        ?>
        <?= Alert::widget() ?>
<?= $content ?>
        <!--</div>-->
        <!--</div>-->

        <footer class="footer">
            <div class="container-fluid">
                <div class="row footer">
                    <div class="col-lg-4 co-md-4 col-sm-12 block_left_footer">
                        
                            <div class="footer-info-wrapper">

                                <span class="glyphicon glyphicon-qrcode"></span>
                                <h5>
                                    Na_Divane.pl – Первый фирменный магазин всячины в Беларуси
                                </h5>
                                <p >
                                    OOO "Новый символ" <br>
                                    УНП 132431 от 21/05/2018 <br>
                                    В Торговом реестре с 02/05/2016 <br>
                                    Юр. Адрес: 2260012, Республика Беларусь <br>
                                    г. Хотимск, ул. Гоголя 10, пом 32.
                                </p>
                                
                                <br>                           
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 block_center_footer">
                        <div class="item item-3"> 
                            <h5>Контакты:</h5>
                            <div class="footer-info-wrapper">             
                                <div class="footer-info-time">
                                    <div id="phone">
                                        <div class="phone_info">
                                            <a href="tel:+375297777777">
                                                <img src="/img/mts.png" width="21" height="21" alt="МТС"> 
                                                <span itemprop="telephone">+375 29 761-71-71</span>
                                            </a>
                                        </div>
                                        <div class="phone_info">
                                            <a href="tel:+375297777777">
                                                <img src="/img/velcom.png" width="21" height="21" alt="Velcom"> 
                                                <span itemprop="telephone">+375 44 761-71-71</span>
                                            </a>
                                        </div>
                                        <div class="phone_info">
                                            <a href="tel:+375297777777">
                                                <img src="/img/life.png" width="21" height="21" alt="Life"> 
                                                <span itemprop="telephone">+375 25 761-71-71</span>
                                            </a>
                                        </div>
                                    </div>
                                    <p><br>Магазин работает ежедневно 
                                        <br>с 9:00 – 21:00
                                    </p></div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 block_right_footer">
                        
                        <img src="/img/internet-magazin.png"/>
                    </div>
                  
                </div>
            </div>
        </footer>
<div id= "toTop" > 
   <img src="/img/pageup.png">
</div>
<?php $this->endBody() ?>
    
</html>
<?php $this->endPage() ?>
