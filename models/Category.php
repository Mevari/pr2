<?php

namespace app\models;

use Yii;


/**
 * This is the model class for table "Category".
 *
 * @property int $id
 * @property string $Name
 * @property string $image
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Category';
    }

    /**
     * {@inheritdoc}
     */

    public function rules()
    {
        return [
            [['Name', 'image'], 'required'],
            [['Name', 'image'], 'string', 'max' => 50],
            [['parent_id'], 'integer'],
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
            'image' => 'Image',
             'parent_id' => 'Parent_id',
        ];
    }
    public function getItems()
    {
        return $this->hasMany(Items::className(), ['id' => 'id_Category']);
    }


}
