<?php

namespace frontend\controllers;

use common\models\Document;
use common\models\DocumentCategory;
use yii\data\ActiveDataProvider;
use yii\web\Controller;

class DocumentController extends Controller
{


    public function actionIndex()
    {
        $query = Document::find()->where(['status' => Document::STATUS_ACTIVE,]);
        $documentCategory = DocumentCategory::find()->where(['status' => DocumentCategory::STATUS_ACTIVE])->one();
        
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 3,
            ],
        ]);
        
        
        $documents = $dataProvider->models;
        
        return $this->render('all', [
            'documents' => $documents,
            'dataProvider' => $dataProvider,
            'documentCategory' => $documentCategory
        ]);
    }


    public function actionDocument()
    {
        $id = \Yii::$app->request->get('id');

        $query = Document::find()->where(['status' => Document::STATUS_ACTIVE, 'category_id' => $id]);
        $documentcategory = DocumentCategory::findOne(['status' => DocumentCategory::STATUS_ACTIVE, 'id' => $id]);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 9,
            ],
        ]);


        $documents = $dataProvider->models;

        if ($documents && $documentcategory) {

            return $this->render('index', [
                'documents' => $documents,
                'dataProvider' => $dataProvider,
                'documentCategory' => $documentcategory,
            ]);
        }


        return $this->render('@frontend/views/site/404');
    }


    public function actionSingle($id)
    {
        if (Document::findOne($id)) {
            $documentOne = Document::findOne($id);

            return $this->render('single', [
                'documentOne' => $documentOne
            ]);
        }


        return $this->render('@frontend/views/site/404');
    }
}