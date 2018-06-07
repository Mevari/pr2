<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Discount".
 *
 * @property int $id
 * @property string $img
 * @property string $Date
 */
class Discount extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Discount';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['img'], 'required'],
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
            'Date' => 'Date',
        ];
    }
}
