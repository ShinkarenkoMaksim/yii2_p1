<?php

namespace app\controllers;

class FancyController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
