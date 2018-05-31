<?php
/**
 * Created by PhpStorm.
 * User: DeadG
 * Date: 5/28/2018
 * Time: 11:55 PM
 */

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;


class CategoryController extends Controller
{
    public function actionIndex()
    {

        return $this->render('index');
    }

}