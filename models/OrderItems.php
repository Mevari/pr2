<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Order_Items".
 *
 * @property int $id
 * @property int $id_order
 * @property int $id_good
 * @property double $Price
 * @property int $Count
 * @property double $Summa
 */
class OrderItems extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Order_Items';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_order', 'id_good', 'Price', 'Count', 'Summa'], 'required'],
            [['id_order', 'id_good', 'Count'], 'integer'],
            [['Price', 'Summa'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_order' => 'Id Order',
            'id_good' => 'Id Good',
            'Price' => 'Price',
            'Count' => 'Count',
            'Summa' => 'Summa',
        ];
    }
}
