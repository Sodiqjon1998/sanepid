<?php

namespace backend\modules\profilemanager\controllers;

use backend\modules\profilemanager\models\ChangePasswordForm;
use backend\modules\profilemanager\models\ProfileUser;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * Default controller for the `profilemanager` module
 */
class DefaultController extends Controller
{

    public function behaviors()
    {
        return [
            'access' => [
                'class' => \yii\filters\AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }


    /**
     * @return string|\yii\web\Response
     * @throws \yii\web\NotFoundHttpException
     */
    public function actionChangeLogin()
    {


        $model = ProfileUser::getUserModel();

        if (!$model) {
            throw new NotFoundHttpException(Yii::t('app', 'Page not found'));
        }
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', Yii::t('app', 'Your username has been changed successfully'));
            return $this->redirect(['index']);
        }
        return $this->render('changeLogin', ['model' => $model]);
    }

    public function actionChangePassword()
    {
        $model = new ChangePasswordForm();

        $id = Yii::$app->request->get('id');

        if ($model->load(Yii::$app->request->post()) && $model->savePassword($id)) {

            Yii::$app->session->setFlash('success', Yii::t('app', 'Your password has been changed successfully'));
            return $this->redirect(['index']);

        }
        return $this->render('changePassword', ['model' => $model]);
    }
}
