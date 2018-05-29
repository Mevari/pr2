<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Items".
 *
 * @property int $id
 * @property string $Name
 * @property string $Description
 * @property string $Img
 * @property int $Count
 * @property double $Price
 * @property int $id_Category
 * @property string $Date
 */
class Items extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Items';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Name', 'Description', 'Img', 'Count', 'Price', 'id_Category'], 'required'],
            [['Count', 'id_Category'], 'integer'],
            [['Price'], 'number'],
            [['Date'], 'safe'],
            [['Name', 'Img'], 'string', 'max' => 50],
            [['Description'], 'string', 'max' => 120],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Name' => 'Name',
            'Description' => 'Description',
            'Img' => 'Img',
            'Count' => 'Count',
            'Price' => 'Price',
            'id_Category' => 'Id  Category',
            'Date' => 'Date',
        ];
    }
}
