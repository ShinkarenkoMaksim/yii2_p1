<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Activity;

class ActivityController extends Controller
{
    public function actionIndex(): string
    {
        $model = new Activity();

        return $this->render('index', [
            'model' => $model,
        ]);
    }

    public function actionCreate(): string
    {
        return "Создание активности";
    }

}