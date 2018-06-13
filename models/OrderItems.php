<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;


class OrderItems extends ActiveRecord
{

    public static function tableName()
    {
        return 'Order_Items';
    }

    public function getOrder(){
        $this->hasOne(OrderShop::className(),['id' =>'order_id']);
    }

    public function rules()
    {
        return [
            [['id_order', 'id_item', 'Price', 'Count', 'Summa'], 'required'],
            [['id_order', 'id_item', 'Count'], 'integer'],
            [['Price', 'Summa'], 'number'],
        ];
    }

}
