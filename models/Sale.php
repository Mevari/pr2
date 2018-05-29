<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Sale".
 *
 * @property int $id
 * @property int $id_good
 * @property string $Description
 * @property double $New_price
 */
class Sale extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Sale';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_good', 'Description', 'New_price'], 'required'],
            [['id_good'], 'integer'],
            [['New_price'], 'number'],
            [['Description'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_good' => 'Id Good',
            'Description' => 'Description',
            'New_price' => 'New Price',
        ];
    }
}
