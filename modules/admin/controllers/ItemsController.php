<?php

namespace app\modules\admin\controllers;

use app\modules\admin\models\Category;
use Yii;
use app\modules\admin\models\Items;
use app\modules\admin\models\ItemsSearch;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use yii\web\Response;
use yii\web\UploadedFile;
use yii\widgets\ActiveForm;

class ItemsController extends Controller
{
    public $mas = array();

    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }


    public function actionIndex()
    {

        $searchModel = new ItemsSearch();
//        $dataProvider = new ActiveDataProvider([
//            'query' => Items::find(),
//            'pagination'=>[
//                'pageSize'=>8,
//            ]
//        ]);
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
    }

    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionCreate()
    {
        $model = new Items();
        $model_cat = new Category();
        $result = $model_cat->get_cat();
        if ($model->load(Yii::$app->request->post())) {


            $image = UploadedFile::getInstance($model, 'Img');
            $model->Img = 'web/img/' . $image->BaseName . '.' . $image->extension;
            if ($model->save()) {
                $image->saveAs('img/' . $image->BaseName . '.' . $image->extension);
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }


        return $this->render('create', [
            'model' => $model,
            'mas' => $result,
        ]);
    }

//    public function actionUpdate($id)
////    {
////        $model = $this->findModel($id);
//////        $model->scenario = 'update-image';
////        if ($model->load(Yii::$app->request->post())) {
////            $image = UploadedFile::getInstance($model, 'Img');
////            if ($image!=Null) {
////                $model->Img = 'web/img/' . $image->BaseName . '.' . $image->extension;
////                if ($model->save()) {
////                    $image->saveAs('img/' . $image->BaseName . '.' . $image->extension);
////                    return $this->redirect(['view', 'id' => $model->id]);
////                }
////            }
////            else
////
////                return $this->redirect(['view', 'id' => $model->id]);
////        }
////else
////        return $this->render('update', [
////            'model' => $model,
////        ]);
////    }
    public function actionUpdate($id)
    {
        $model_cat = new Category();
        $result = $model_cat->get_cat();
        $model = $this->findModel($id);
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }
        return $this->render('update', [
            'model' => $model,
            'mas' => $result,

        ]);
    }

    public function actionUpdate_image($id)
    {
        $model = $this->findModel($id);

        $model->scenario = 'update-image';
        if ($model->load(Yii::$app->request->post())) {

            $image = UploadedFile::getInstance($model, 'Img');
            $model->Img = 'web/img/' . $image->BaseName . '.' . $image->extension;
            if ($model->save()) {
                $image->saveAs('img/' . $image->BaseName . '.' . $image->extension);
                return $this->redirect(['view', 'id' => $model->id]);
            }

        } else {

            return $this->render('update-image', [
                'model' => $model,
            ]);
        }
    }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    protected function findModel($id)
    {
        if (($model = Items::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionValidate()
    {
        $model = new Items();
        if (Yii::$app->request->isAjax && $model->load(Yii::$app->request->post())) {
            Yii::$app->response->format = Response::FORMAT_JSON;
            return ActiveForm::validate($model);

        }
    }
}
