<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;


$this->title = 'Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<section xmlns="http://www.w3.org/1999/html">
    <div class="container-fluid">
        <div class="row">
            <div class=" col-sm-2">
                <?= app\components\MenuWidget::widget(); ?>
            </div>
            <div class="col-lg-10 col-sm-10 ">
                <?php foreach ($Items as $row): ?>
                     <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="item_catalog animated fadeInUp">
                            <a href=<?= URL::to(['items/index', 'id' => $row['id']]); ?>>
                                <div class="img_cont">
                                    <?= Html::img('/' . $row['Img']) ?>
                                </div>
                            </a>
                            <div class="items_tit">
                               <span class="items_title">
                                   <a href=<?= URL::to(['items/index', 'id' => $row['id']]); ?>>
                                    <p><?= $row['Name'] ?></p>
                                </a></span>
                                <p class="price"><?= $row['Price'] . ' руб' ?></p>
                                <span class="btn btn-warning cart_add"   data-id="<?= $row['id'] ?>">
                                    <i class="fas fa-shopping-cart"></i>
                                    В корзину!
                                </span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 col-lg-offset- col-sm-10  col-sm-offset-2">
                <?php echo LinkPager::widget([
                    'pagination' => $pages,
                ]); ?>
            </div>
        </div>
    </div>
</section>
