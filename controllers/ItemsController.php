<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Items;


class ItemsController extends Controller
{

    public function actionIndex($id)
    {
        $item = Items::findOne($id);


        return $this->render('index', ['item' => $item,]);
    }

}