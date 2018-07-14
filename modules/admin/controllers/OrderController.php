<?php
/**
 * Created by PhpStorm.
 * User: DeadG
 * Date: 6/19/2018
 * Time: 10:40 PM
 */

namespace app\modules\admin\controllers;
use yii\web\Controller;
use yii\data\ActiveDataProvider;
use app\models\OrderShop;
use app\models\OrderItems;

class OrderController extends Controller
{
    public function actionIndex()
    {
//        $res = OrderShop::find()->with('items')->all();
//        var_dump($res[0]);
//        $res=OrderItems::find(1)->with('item')->all();
//        var_dump($res);
        $dataProvider = new ActiveDataProvider([
            'query' => OrderShop::find()->with(['items']),
        ]);
        // var_dump($dataProvider);

        return $this->render('index',[
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionChange_status($id)
    {
        $order = OrderShop::findOne($id);

        $order->Status = '1';
      if ($order->save()) {
          $this->redirect(array('/admin/order'));
      }
      else {

          var_dump($order->errors);
      }
//        return $this->refresh();


    }
    public function actionDelete($id)
    {
        $order = OrderShop::findOne($id);

        $order->Status = '1';
        if ($order->delete()) {
            $this->redirect(array('/admin/order'));
        }
        else {

//          var_dump($order->errors);
        }
//        return $this->refresh();


    }

}