<?php

namespace frontend\controllers;

use common\models\News;
use common\models\NewsCategory;
use yii\data\ActiveDataProvider;
use yii\web\Controller;

class NewsController extends Controller
{


    public function actionIndex(){
        return $this->render('index');
    }

    public function actionNews()
    {
        $id = \Yii::$app->request->get('id');

        if ($id) {
            return $this->render('index');
        }


        return $this->render('@frontend/views/site/404');

    }


    public function actionSingle($id){
        if(News::findOne($id)){
            $newOne = News::findOne($id);

            return $this->render('single', [
                'newOne' => $newOne,
            ]);
        }

        return $this->render('@frontend/views/site/404');
    }


}