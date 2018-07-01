<?php

namespace app\modules\admin\controllers;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
class SiteController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');

    }

    public function actionLogin()
    {
        $model=new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->render('index');
        }
        return $this->render('login',['model'=>$model]);
    }
    

}
