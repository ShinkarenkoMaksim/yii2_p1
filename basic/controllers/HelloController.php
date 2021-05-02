<?php


namespace app\controllers;


use yii\web\Controller;

class HelloController extends Controller
{
    public function actionWorld() :string
    {
        return $this->render('world');
    }
}