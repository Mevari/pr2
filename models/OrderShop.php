<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Order_shop".
 *
 * @property int $id
 * @property string $Date
 * @property string $Client_name
 * @property int $Phone
 * @property string $Adress
 * @property string $Email
 * @property string $Comment
 */
class OrderShop extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Order_shop';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Date'], 'safe'],
            [['Client_name', 'Phone', 'Adress'], 'required'],
            [['Phone'], 'integer'],
            [['Client_name', 'Adress'], 'string', 'max' => 30],
            [['Email'], 'string', 'max' => 20],
            [['Comment'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Date' => 'Date',
            'Client_name' => 'Client Name',
            'Phone' => 'Phone',
            'Adress' => 'Adress',
            'Email' => 'Email',
            'Comment' => 'Comment',
        ];
    }
}
