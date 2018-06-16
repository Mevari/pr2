<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;
//var_dump($item);
$this->title = $item->Name;
?>
<div class="container">
<div class="single_product">

        <div class="row">
<!---->
<!--            <!-- Images -->
<!--            <div class="col-lg-2 order-lg-1 order-2">-->
<!--                <ul class="image_list">-->
<!--                    <li data-image="images/single_4.jpg"><img src="images/single_4.jpg" alt=""></li>-->
<!--                    <li data-image="images/single_2.jpg"><img src="images/single_2.jpg" alt=""></li>-->
<!--                    <li data-image="images/single_3.jpg"><img src="images/single_3.jpg" alt=""></li>-->
<!--                </ul>-->
<!--            </div>-->

            <!-- Selected Image -->
            <div class="col-lg-5 order-lg-2 order-1">
                <div class="image_selected">
                    <?= Html::img(Url::to([$item->Img])) ?>
                </div>
            </div>

            <!-- Description -->
            <div class="col-lg-5 order-3">
                <div class="product_description">
                    <div class="product_category"><?=mb_convert_case($item->category->Name, MB_CASE_TITLE, "UTF-8");?></div>
                    <div class="product_name"><?=$item->Name?></div>
                    <div class="product_text"><p><?=$item->Description?></p></div>
                    <div class="product_price"><?=$item->Price?></div>
                    <div class="order_info d-flex flex-row">
                        <form action="#">
                            <div class="clearfix" style="z-index: 1000;">

                                <!-- Product Quantity -->
                                <div class="product_quantity clearfix">
                                    <span>Quantity: </span>
                                    <input id="quantity_input" type="text" pattern="[0-9]*" value="1">
                                    <div class="quantity_buttons">
                                        <div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fas fa-chevron-up"></i></div>
                                        <div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fas fa-chevron-down"></i></div>
                                    </div>
                                </div>


                            </div>

                            <div class="button_container">

                                <button type="button" class="button cart_button cart_add" data-id = <?=$item->id?>
                                    <i class="fas fa-shopping-cart"></i>
                                    Add to Cart
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
