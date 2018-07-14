<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;


$this->title = 'Поиск';

?>
<div  class="container">
    <div class="text_title2 wow fadeOut">Поиск  <?=$search?></div>
      <div class="col-lg-12 col-sm-12 ">
                    <?php foreach ($search_items as $row): ?>
                        <div class="col-lg-3 col-sm-3">
                            <div class="item_catalog">
                                <a href=<?= URL::to(['items/index', 'id' => $row['id']]); ?>>
                                    <div class="img_cont">
                                        <?= Html::img('/' . $row['Img']) ?>
                                    </div>
                                </a>
                                <div class="items_tit">
                                   <span class="items_title">
                                       <a href="#">
                                        <p><?= $row['Name'] ?></p>
                                    </a></span>
                                    <p class="price"><?= $row['Price'] . ' руб' ?></p>
                                    <i class="far fa-address-book"></i>
                                    <span class="btn btn-warning cart_add" data-id="<?= $row['id'] ?>">В корзину!</span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
</div>