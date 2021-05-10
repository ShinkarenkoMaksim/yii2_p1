<?php

namespace app\components;

use yii\base\Component;

class PreviousPageComponent extends Component
{
    public static function savePrevPage() :?string
    {
        $session = \Yii::$app->session;

        $session->open();
        $session['previousPage'] = \Yii::$app->request->referrer;
        $session->close();

        return \Yii::$app->request->referrer;
    }
}