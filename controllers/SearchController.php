<?php

namespace app\controllers;

use Yii;
use app\models\Category;
use yii\data\ActiveDataProvider;
use yii\web\Response;
use app\models\Items;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Json;
use yii\helpers\Url;

class SearchController extends \yii\web\Controller
{
    public function actionIndex()
    {


        return $this->render('seacrh', ['cart_items' => $model]);
    }

    public function actionAutocomplete()
    {
        $term = addcslashes(Yii::$app->request->get('term'), '%_'); //экранировать LIKE специальные символы
//        if (Yii::$app->request->isAjax && $term) {
        $model = Items::find()->where(['like', 'name', $term])->all();

        $result = array();
        foreach ($model as $value) {
            $label = $value['Name'];

            $result[] = array('id' => $value['id'], 'label' => $label, 'value' => $label, 'href' => Url::to(['items/index', 'id' => $value['id']]));
        }

        return Json::encode($result);
        Yii::app()->end();
    }

//        }


}
