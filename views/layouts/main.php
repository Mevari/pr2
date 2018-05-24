<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="container-fluid">
    <div class="row header">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top ">
            <a href="#" class="navbar-brand">
                <div class="col-lg-3 col-md-3 xol-sm-12">
                    <img src="img/logo.png" alt="logo">
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a href="#features" class="nav-link">FEATURES</a>
                    </li>
                    <li class="nav-item ">
                        <a href="#works" class="nav-link">WORKS</a>
                    </li>
                    <li class="nav-item ">
                        <a href="#author_block" class="nav-link">OUR TEAM</a>
                    </li>
                    <li class="nav-item ">
                        <a href="#works" class="nav-link">TESTIMONIALS</a>
                    </li>
                    <li class="nav-item ">
                        <a href="#block_up_footer" class="nav-link">DOWNLOAD</a>
                    </li>
                </ul>

            </div>
        </nav>
    </div>
</div>




    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
<!--</div>-->

<footer class="footer">
    <div class="container-fluid">
        <div class="row footer">
            <div class="col-lg-4 co-md-4 col-sm-12 block_left_footer">
                <h5>LOCATION</h5>
                <p>3481 Melrose Place<br>
                    Beverly Hills, CA 90210</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 block_center_footer">
                <h5>SHARE WITH LOVE</h5>
                <ul class="social-icons icon_footer">
                    <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                    <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 block_right_footer">
                <h5> ABOUT ACTIVEBOX</h5>
                <p> Cras justo odio, dapibus ac facilisis in, egestas eget<br>
                    quam.
                    Donec ullamcorper nulla non metus auctor fringilla.</p>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 text_footer">
                <div class="footer_title">
                    <p>Copyright © 2018 Radmone Company. All Rights Reserved<br>
                        Made with
                        <i class="fa fa-heart pulse"></i> by
                        <a href="http://kamalchaneman.com/">Rodya</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
