<?php

namespace app\controllers;

use Yii;
use app\models\Category;
use yii\data\ActiveDataProvider;
use app\components\Cart;
use app\models\Items;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class CartController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $cart_items = null;

        $id_item = array();
        if (isset($_SESSION['products'])) {
            foreach ($_SESSION['products'] as $id => $quantity) {
                array_push($id_item, $id);
            }

            $cart_items = Items::find()->where(['id' => $id_item])->all();
//            foreach ( $cart_items as $item) {
//                $summa=$summa+$item->Price
//            }
        }

        return $this->render('cart', ['cart_items' => $cart_items]);
    }

    public function actionAdd($id = 0)
    {

//        echo "http://pr2/cart/add/1";
        return Cart::addProduct($id);
//      return true;
    }

    public function actionDelete_cart($id)
    {
        if (isset($_SESSION['products'])) {
            foreach ($_SESSION['products'] as $id_items => $product) {
                if ($id_items == $id) {
                    unset($_SESSION['products'][$id]);
//                    echo "<pre>";
//                    print_r($_SESSION['products']);
//                    echo "</pre>";
                    $this->redirect(array('cart/index'));


                }
            }

        } else
            return 0;
    }

}
