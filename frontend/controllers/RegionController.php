<?php

namespace frontend\controllers;

use common\models\Region;
use common\models\RegionCategory;
use yii\data\ActiveDataProvider;
use yii\web\Controller;

class RegionController extends Controller
{


    public function actionIndex(){

        $regions = Region::find()->where(['status' => Region::STATUS_ACTIVE,])->all();
        $regionCategory = RegionCategory::find()->where(['status' => RegionCategory::STATUS_ACTIVE,])->one();
        return $this->render('index',[
            'regions' => $regions,
            'regionCategory' => $regionCategory
        ]);
    }



    public function actionRegion(){
        $id = \Yii::$app->request->get('id');
        $query = Region::find()->where(['status' => Region::STATUS_ACTIVE, 'category_id' => $id]);
        $regionCategory = RegionCategory::findOne(['status' => RegionCategory::STATUS_ACTIVE, 'id' => $id]);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 9,
            ],
        ]);

        $regions = $dataProvider->models;

        if ($regions && $regionCategory) {
            return $this->render('index', [
                'regions' => $regions,
                'dataProvider' => $dataProvider,
                'regionCategory' => $regionCategory,
            ]);
        }

        return $this->render('@frontend/views/site/404');
    }


    public function actionSingle($id){
        $regionOne = Region::findOne(['id' => $id, 'status' => Region::STATUS_ACTIVE]);
        if($regionOne){
            return $this->render('single', [
                'regionOne' => $regionOne
            ]);
        }


        return $this->render('@frontend/views/site/404');
    }
}