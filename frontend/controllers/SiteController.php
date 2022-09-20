<?php

namespace frontend\controllers;

use common\models\About;
use common\models\Contact;
use common\models\Document;
use common\models\News;
use common\models\Pages;
use common\models\Region;
use common\models\Sign;
use common\models\Work;
use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\web\NotFoundHttpException;

/**
 * Site controller
 */
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
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
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


    public function init()
    {
        $lang = yii::$app->request->get('lang', 'uz');
        Yii::$app->language = $lang;

        parent::init();
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }


    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new Contact();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

            $model->status = 1;

            if ($model->save()) {

                Yii::$app->session->setFlash('success', 'Xabaringiz Yuborildi');

                return $this->redirect(Yii::$app->request->referrer);

            } else {

                Yii::$app->session->set('danger', 'Xabaringiz Yuborilmadi');

            }
        }

        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        $abouts = About::find()->all();
        return $this->render('about', [
            'abouts' => $abouts
        ]);
    }

    public function actionPage($id)
    {
        $page = Pages::findOne(['id' => $id]);

        if (!empty($page)) {
            return $this->render('page', [
                'page' => $page
            ]);
        }

        return $this->render('@frontend/views/site/404');
    }


    public function actionQuation()
    {
        return $this->render('quation');
    }



    public function actionSign()
    {
        $sign = new Sign();
        $email = $_REQUEST['email'];

        $sign->email = $email;
        $sign->status = 1;
        if ($sign->save()) {

            Yii::$app->session->setFlash('success', 'Obuna bo\'ldingiz');

            return $this->redirect(Yii::$app->request->referrer);

        } else {

            Yii::$app->session->setFlash('error', 'Bu email avvalroq band qilingan');

        }

        return $this->redirect(Yii::$app->request->referrer);
    }



    public function actionWork()
    {
        $work = Work::find()->all();
        if ($work) {
            return $this->render('work', [
                'vacanies' => $work
            ]);
        }

        return $this->render('@frontend/views/site/404');
    }


    public function actionSearch()
    {
        $search = Yii::$app->request->get('search');

        
            $news = News::find()->joinWith('translations')->where(['like', 'title', $search])->orWhere(['like', 'content', $search])->one();
            $region = Region::find()->joinWith('translations')->where(['like', 'title', $search])->orWhere(['like', 'content', $search])->one();
            $document = Document::find()->joinWith('translations')->where(['like', 'title', $search])->orWhere(['like', 'content', $search])->one();

                return $this->render('search', [
                    'newsOne' => $news,
                    'document' => $document,
                    'region' => $region
                ]);
            
            
    }

}
