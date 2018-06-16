<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class OrderShop extends ActiveRecord
{

    public static function tableName()
    {
        return 'Order_shop';
    }
    public function getOrderItems(){
        $this->hasMany(OrderItems::className(),['order_id' =>'id']);
    }
    public function rules()
    {
        return [
            [['Date'], 'safe'],
            [['Client_name', 'Phone', 'Adress'], 'required'],
            [['Status'],'boolean'],
            ['Phone', 'match', 'pattern' => '/^\+375\s\([0-9]{2}\)\s[0-9]{3}\-[0-9]{2}\-[0-9]{2}$/', 'message' => 'Вы ввели неверный формат номера' ],
            [['Client_name'], 'string', 'max' => 30],
            [['Email'], 'email'],
            [['Comment', 'Adress'], 'string', 'max' => 255],
        ];
    }


    public function attributeLabels()
    {
        return [
            'Client_name' => 'ФИО',
            'Phone' => 'Телефон',
            'Adress' => 'Адрес',
            'Email' => 'Email',
            'Comment' => 'Комментарий',
        ];
    }
}
