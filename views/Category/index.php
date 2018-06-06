<?php
use yii\helpers\Html;

$this->title = 'Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="hidden-xs col-sm-2">
                <? echo app\components\MenuWidget::widget(); ?>
            </div>
            <div class="col-lg-10 col-sm-10 ">
            <?php foreach ($Items as $row): ?>

                <div class="col-lg-2 col-sm-2">
                    <div class="item">
                        <div class="img_cont">
                            <?= Html::img('/' . $row['Img'], ['style' => 'width:auto;height:inherit;max-width:100%;']) ?>
                        </div>
                        <a href="#">
                            <p><?= $row['Name'] ?></p>
                        </a>
                        <p><?= $row['Price'] ?></p>
                    </div>
                </div>

                <?php endforeach; ?>
            </div>

        </div>
    </div>
</section>
</div>