<?php


namespace app\controllers;


use Yii;

use yii\filters\AccessControl;

use yii\web\Controller;

use yii\web\Response;

use yii\filters\VerbFilter;

use app\models\LoginForm;

use app\models\ContactForm;

use app\models\Items;

use app\models\ImgShop;

class SiteController extends Controller

{

    /**
     * {@inheritdoc}
     */

    public function behaviors()

    {

        return [

            'access' => [

                'class' => AccessControl::className(),

                'only' => ['logout'],

                'rules' => [

                    [

                        'actions' => ['logout'],

                        'allow' => true,

                        'roles' => ['@'],

                    ],

                ],

            ],

            'verbs' => [

                'class' => VerbFilter::className(),

                'actions' => [

                    'logout' => ['post'],

                ],

            ],

        ];

    }


    /**
     * {@inheritdoc}
     */

    public function actions()

    {

        return [

            'error' => [

                'class' => 'yii\web\ErrorAction',

            ],

            'captcha' => [

                'class' => 'yii\captcha\CaptchaAction',

                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,

            ],

        ];

    }


    /**
     * Displays homepage.
     *
     * @return string
     */

    public function actionIndex()

    {

        // session_start();


        $model = new ContactForm();

        if ($model->load(Yii::$app->request->post()) && ($model->contact(Yii::$app->params['adminEmail']))) {

            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();

        }


//        If(Yii::$app->request->post('ContactForm'))

//        {   Yii::$app->session->setFlash('contactFormSubmitted');

//            $this->refresh();

//        }

//        var_dump(Yii::$app->request->post('ContactForm'));

        $get = Yii::$app->request->get('search');

        if (isset($get)) {

            $term = addcslashes(Yii::$app->request->get('search'), '%_'); //экранировать LIKE специальные символы

            $model = Items::find()->where(['like', 'name', $term])->all();

            return $this->render('search', ['search_items' => $model, 'search' => $term]);

        } else {

            $popular_items = Items::find()->where(['popular' => 1])->all();

            $discount_img = ImgShop::find()->indexBy('id')->where(['discount' => 1])->all();

            return $this->render('index', ['popular_items' => $popular_items, 'discount_img' => $discount_img, 'model' => $model]);

        }

//

//

///

///


    }


    /**
     * Login action.
     *
     * @return Response|string
     */

    public function actionLogin()

    {

        if (!Yii::$app->user->isGuest) {

            return $this->goHome();

        }


        $model = new LoginForm();

        if ($model->load(Yii::$app->request->post()) && $model->login()) {

            return $this->goBack();

        }


        $model->password = '';

        return $this->render('login', [

            'model' => $model,

        ]);

    }


    /**
     * Logout action.
     *
     * @return Response
     */

    public function actionLogout()

    {

        Yii::$app->user->logout();


        return $this->goHome();

    }


    /**
     * Displays contact page.
     *
     * @return Response|string
     */

    public function actionContact()

    {


        $model = new ContactForm();

        $elem = new FBFWidget();


        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {

            Yii::$app->session->setFlash('contactFormSubmitted');


        }

        return $this->render('/widget/fbfWidget.php', [

            'model' => $model,

        ]);

    }

    public function actionShop()

    {

        $shop_img = ImgShop::find()->indexBy('id')->where(['discount' => 0])->all();

        return $this->render('shop', ['shop_imge' => $shop_img]);

    }


}

