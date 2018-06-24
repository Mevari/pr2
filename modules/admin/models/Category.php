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

    public function get_cat()
    {
        $mas_gl = array();


        $parent_category = Category::find()->where(['parent_id' => 0])->all();
        foreach ($parent_category as $value_parent) {
            $mas = array();
            $key = array();
            $value = array();
            $children_cat = Category::find()->where(['parent_id' => $value_parent['id']])->all();
            foreach ($children_cat as $value_children) {
                array_push($key, $value_children['id']);
                array_push($value,  $value_children['Name']);
            }
            for ($i = 0; $i < count($key); $i++) {
                $mas[$key[$i]] = $value[$i];
            }
            $mas_gl[$value_parent['Name']] = $mas;

        }

        return $mas_gl;

    }
}
