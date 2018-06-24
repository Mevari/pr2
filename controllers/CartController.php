<?php

namespace app\controllers;

use Yii;
use yii\data\ActiveDataProvider;
use app\components\Cart;
use app\models\Items;
use app\models\OrderShop;
use app\models\OrderItems;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;


class CartController extends Controller
{
    public function actionIndex()
    {

        $cart_items = null;
        $summa = 0;
        $id_item = array();
        $session = Yii::$app->session;
        $products = $session['products'];
        if (isset($session['products'])) {
            foreach ($session['products'] as $id => $quantity) {
                array_push($id_item, $id);

            }
            $cart_items = Items::find()->where(['id' => $id_item])->asArray()->all();

            foreach ($cart_items as $id => $elem) {
                $cart_items[$id]['count'] = $session['products'][$elem["id"]];
                $count = $session['products'][$elem["id"]];
                $summa += ($elem["Price"] * $count);;
            }
        }
        $order = New OrderShop();
        if ($order->load(Yii::$app->request->post())) {
            if (isset($products) && count($products) > 0) {
                if ($order->save() && $this->AddOrderItems($order->id, $cart_items)) {
                    $session->SetFlash('Success', 'Ваш заказ принят');
                    $session->remove('products');
                    return $this->refresh();
                } else {
                    $session->SetFlash('Erorr', 'Ошибка оформления');
                }
            } else {
                $session->SetFlash('Erorr', 'Ваша корзина пуста');
                return $this->refresh();
            }

        }
        return $this->render('cart', ['cart_items' => $cart_items, 'summa' => $summa, 'order' => $order]);
    }

    public function actionAdd($id){
//        $count = Yii::app()->request->getPost('count');
//        var_dump($count);

        $count = Yii::$app->request->post('count');
        $count = intval($count);
        return Cart::addProduct($id,$count);
    }

// умеьшает количество товара в корзине на 1
    public function actionDelete_product($id)
    {
        return Cart::DeleteProduct($id);
    }


//удаляет полностью из корзины и обновяет страницу. // В одну и без перезагрузки//
    public function actionDelete_cart($id)
    {

        Cart::DeleteProduct($id,true);
        $this->redirect(array('cart/index'));

    }

    // vs add order items
    protected function  AddOrderItems($id_order,$cart){
        $add = true;
       foreach ($cart as $item)
       {
            $Order_items = new OrderItems();
            $Order_items->id_order = $id_order;
            $Order_items->id_item = $item['id'];
            $Order_items->Count = $item['count'];
            $Order_items->Price = $item['Price'];
            $Order_items->Summa = $item['count']*$item['Price'];
            If (!$Order_items->save()){
                $add = false;
            };
       }

        return $add;
    }
}
