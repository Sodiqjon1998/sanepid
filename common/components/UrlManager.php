<?php

namespace common\components;


use Yii;
use yii\helpers\Url;

class UrlManager extends \yii\web\UrlManager
{

//    bunda url managerlar yozilga
    public $isMultilingual = true;


    public function createUrl($params = [], $addLanguageParam = true)
    {
        $params = (array)$params;

        if ($this->isMultilingual && $addLanguageParam) {
            $yiiParams = Yii::$app->params;
            $languageParam = $yiiParams['languageParam'];
            if (!isset($params[$languageParam])) {
                $language = Yii::$app->request->get($languageParam, $yiiParams['defaultLanguage']);
                if (!array_key_exists($language, $yiiParams['languages'])) {
                    $language = $yiiParams['defaultLanguage'];
                }
                $params[$languageParam] = $language;
            }
        }
        return parent::createUrl($params);
    }

    /**
     * @inheritDoc
     * @param array|string $params
     * @param null $scheme
     * @param bool $addLanguageParam
     * @return string
     * @throws yii\base\InvalidConfigException
     */
    public function createAbsoluteUrl($params, $scheme = null, $addLanguageParam = false)
    {
        $url = $this->createUrl($params, $addLanguageParam);
        if (strpos($url, '://') === false) {
            $hostInfo = $this->getHostInfo();
            if (strncmp($url, '//', 2) === 0) {
                $url = substr($hostInfo, 0, strpos($hostInfo, '://')) . ':' . $url;
            } else {
                $url = $hostInfo . $url;
            }
        }

        return Url::ensureScheme($url, $scheme);
    }


}