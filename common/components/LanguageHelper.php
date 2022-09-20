<?php

namespace common\components;

use Yii;

class LanguageHelper
{

    public static function setLanguage()
    {
        $params = Yii::$app->params;
        $lang = Yii::$app->request->get($params['languageParam'], $params['defaultLanguage']);
        if (!array_key_exists($lang, $params['languages'])) {
            $lang = $params['defaultLanguage'];
        }
        Yii::$app->language = $lang;
    }
}