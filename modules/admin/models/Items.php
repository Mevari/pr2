<?php

namespace app\modules\admin\models;

use Yii;
use app\modules\admin\models\Category;

/**
 * This is the model class for table "Items".
 *
 * @property int $id
 * @property string $Name
 * @property string $Description
 * @property string $Img
 * @property double $Price
 * @property int $popular
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
    public function getCategorys()
    {
        return $this->hasOne(Category::className(), ['id' => 'id_Category']);
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Name', 'Description', 'Img', 'Price', 'id_Category'], 'required'],
            [['Price'], 'number'],
            [['popular', 'id_Category'], 'integer'],
            [['Date'], 'safe'],
            [['Name'], 'string', 'max' => 50],
//            [['Name', 'Img'], 'string', 'max' => 50],
            [['Img'],'required','on'=>'update-image'],
          [['Img'],'file','extensions'=>'png,jpg,gif'],
            [['Description'], 'string', 'max' => 120],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
//            'id' => 'ID',
//            'Name' => 'Name',
//            'Description' => 'Description',
//            'Img' => 'Img',
//            'Price' => 'Price',
//            'popular' => 'Popular',
//            'id_Category' => 'Id  Category',
//            'Date' => 'Date',
            'id' => 'ID',
            'Name' => 'Наименование',
            'Description' => 'Описание',
            'Img' => 'фото',
            'Price' => 'цена',
            'popular' => 'статус',
            'id_Category' => 'Категории',
            'Date' => 'Дата',
        ];
    }

    public function parent_categoty()
    {
        $parent_id=$this->categorys;
        $id_cat=Category::findOne([
        'id' => $parent_id->parent_id,
    ]);
        $string=$id_cat->Name.'-'.$parent_id->Name;
        return $string;

    }
}
