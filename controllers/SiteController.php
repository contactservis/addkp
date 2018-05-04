<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\ItemTable;
use app\models\Categorytable;
use app\models\Block;

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
        // если пользователь не гость то редеректим его на страницу
        if (!Yii::$app->user->isGuest) {
            return $this->render('user');
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('index', [
            'model' => $model,
        ]);
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
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }


    // Пользовательская страница
    public function actionUser()
    {
        return $this->render('user');
    }

    // новое комм предложение
    public function actionNewkp()
    {
        
        $arrBlock       = Block::find()->all() ;       
        // упакуем все в массив        
        $arrItem     = array();
        foreach($arrBlock as $itemBlock){
            //echo "<br>".$itemBlock->id;
            $arCategorys = array();
            $arrCategory    = 	Categorytable::find()->where(['id_block'=>$itemBlock->id])->all();           
            foreach($arrCategory as $itemCategory){
                //echo "<br>".$itemCategory->name;
                $arCategory['id']       = $itemCategory->id;
                $arCategory['id_block'] = $itemCategory->id_block;
                $arCategory['name']     = $itemCategory->name;
                $arCategory['item']     = Itemtable::find()->where(['id_block'=>$itemCategory->id])->all();
                $arCategorys[]          = $arCategory;
            }
            //print_r($arCategorys);
            //echo "<br>==========================";
            $arrItem[$itemBlock->id] = $arCategorys;
        }
            
        return $this->render('user_tpl/new_kp',
        [
            'arItem' => $arCategorys,
            'arrItemsBlock' => $arrItem
        ]);
    }

    // новый клиент
    public function actionNew_klient()
    {
        return $this->render('user_tpl/new_kp');
    }

    // новый клиент
    public function actionList_all()
    {
        return $this->render('user_tpl/new_kp');
    }
    ///////////////////////////////////////////////////////////////////////////////////////////
    // админ панель
    public function actionAdmin()
    {
        return $this->render('admin_tpl/main');
    }

    public function actionEdit_block()
    {
        return $this->render('admin_tpl/edit_block');
    }

}
