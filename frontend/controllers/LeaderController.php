<?php

namespace frontend\controllers;

use common\models\Leader;
use common\models\LeaderCategory;
use yii\data\ActiveDataProvider;
use yii\web\Controller;

class LeaderController extends Controller
{
    public function actionIndex()
    {
        $id = \Yii::$app->request->get('id');

        $query = Leader::find()->where(['status' => Leader::STATUS_ACTIVE, 'category_id' => $id]);
        $leaderCategory = LeaderCategory::findOne(['id' => $id]);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 9,
            ],
        ]);


        $leaders = $dataProvider->models;

        if ($leaders) {

            return $this->render('index', [
                'leaders' => $leaders,
                'dataProvider' => $dataProvider,
                'leaderCategory' => $leaderCategory
            ]);
        }


        return $this->render('@frontend/views/site/404');
    }
}