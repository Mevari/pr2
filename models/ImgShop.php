<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Img_shop".
 *
 * @property int $id
 * @property string $img
 * @property int $discount
 * @property string $Date
 */
class ImgShop extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Img_shop';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['img'], 'required'],
            [['discount'], 'integer'],
            [['Date'], 'safe'],
            [['img'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'img' => 'Img',
            'discount' => 'Discount',
            'Date' => 'Date',
        ];
    }
}
