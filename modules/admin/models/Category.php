<?php

namespace app\modules\admin\models;

use Yii;
use app\modules\admin\models\Items;
/**
 * This is the model class for table "Category".
 *
 * @property int $id
 * @property int $parent_id
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
    public function getItems()
    {
        return $this->hasMany(Items::className(), ['id_Category' => 'id']);
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['parent_id', 'Name', 'image'], 'required'],
            [['parent_id'], 'integer'],
            [['Name', 'image'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent_id' => 'Parent ID',
            'Name' => 'Name',
            'image' => 'Image',
        ];
    }
}
