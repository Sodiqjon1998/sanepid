<?php


namespace backend\modules\menumanager\controllers;

use common\models\DocumentCategory;
use common\models\LeaderCategory;
use common\models\NewsCategory;
use common\models\Pages;
use common\models\RegionCategory;
use Yii;
use yii\filters\AccessControl;
use yii\helpers\Html;

use yii\web\Controller;

class MenuController extends Controller
{

    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'access' => [
                    'class' => AccessControl::className(),
                    'rules' => [
                        [
                            'allow' => true,
                            'roles' => ['@'],
                        ],
                    ],
                ],
            ]
        );
    }

    public function actionGetValue()
    {

        $options = '';
        $type = $_GET['type'];
        if ($type == 'document') {
            $options = $this->document();
        }
        if ($type == 'leader') {
            $options = $this->leaders();
        }
        if ($type == 'departments') {
            $options = $this->departments();
        }
        if ($type == 'organization') {
            $options = $this->organization();
        }
        if ($type == 'portfolios') {
            $options = $this->portfolios();
        }

        if ($type == 'page') {
            $options = $this->pages();
        }
        if ($type == 'interactive_services') {
            $options = $this->newscategory();
        }

        if ($type == 'c-action') {
            $options = $this->sections();
        }

        return Html::tag('select', $options, [
            'id' => 'tree-url_value',
            'class' => 'form-control',
            'name' => 'Menu[url_value]'
        ]);

    }

    private function document()
    {

        $categories = DocumentCategory::find()->all();
        $options = Html::tag('option', "Xujjat turini tanlang");
        foreach ($categories as $category) {
            $options .= Html::tag('option', $category->title, ['value' => $category->id]);
        }

        return $options;
    }

    private function portfolios()
    {

        $categories = PortfoliCategory::find()->all();
        $options = Html::tag('option', "Kategoriyani tanlang");
        foreach ($categories as $category) {
            $options .= Html::tag('option', $category->title_uz, ['value' => $category->slug]);
        }

        return $options;
    }

    private function leaders()
    {

        $categories = LeaderCategory::find()->all();
        $options = Html::tag('option', "Rahbariyat turini tanlang");
        foreach ($categories as $category) {
            $options .= Html::tag('option', $category->title, ['value' => $category->id]);
        }
        return $options;
    }

    private function departments()
    {

        $categories = RegionCategory::find()->all();
        $options = Html::tag('option', "Xudud kategoriylari");
        foreach ($categories as $category) {
            $options .= Html::tag('option', $category->title, ['value' => $category->id]);
        }
        return $options;
    }

    private function organization()
    {

        $categories = OrganizationCategory::find()->all();
        $options = Html::tag('option', "Ochiq malumotlar");
        foreach ($categories as $category) {
            $options .= Html::tag('option', $category->title, ['value' => $category->id]);
        }
        return $options;
    }

    private function pages()
    {
        $pages = Pages::find()->all();
        $options = Html::tag('option', "Sahifani tanlang...");
        foreach ($pages as $page) {
            $options .= Html::tag('option', $page->title, ['value' => $page->id]);
        }
        return $options;
    }

    private function newscategory()
    {
        $interactives = NewsCategory::find()->all();
        $options = Html::tag('option', "Yagliliklar kategoryasini tanlang...");
        foreach ($interactives as $page) {
            $options .= Html::tag('option', $page->title, ['value' => $page->id]);
        }
        return $options;
    }

    private function sections()
    {
        $sections = Yii::$app->getModule('menumanager')->sections();
        $options = Html::tag('option', "Sahifani tanlang ... ");
        foreach ($sections as $route => $label) {
            $options .= Html::tag('option', $label, ['value' => $route]);
        }
        return $options;
    }

}