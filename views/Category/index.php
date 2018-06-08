<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;

$this->title = 'Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<section>
    <div class="container-fluid">
        <div class="row">
            <div class=" col-sm-2">
                <? echo app\components\MenuWidget::widget(); ?>

            </div>
            <div class="col-lg-10 col-sm-10 ">
                <?php foreach ($Items as $row): ?>

                    <div class="col-lg-2 col-sm-2">
                        <div class="item_catalog">

                            <a href=<?= URL::to(['article/index', 'id' => $row['id']]); ?>>
                                <div class="img_cont">
                                    <?= Html::img('/' . $row['Img']) ?>
                                </div>
                            </a>

                            <a href="#">
                                <p><?= $row['Name'] ?></p>
                            </a>
                            <p class="price"><?= $row['Price'] . ' руб' ?></p>
                            <i class="far fa-address-book"></i>
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
</div>