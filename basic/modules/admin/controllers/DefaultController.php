<?php

namespace app\modules\admin\controllers;

class DefaultController extends \yii\web\Controller
{
    public function actionIndex() :string
    {
        return $this->render('index');
    }
}