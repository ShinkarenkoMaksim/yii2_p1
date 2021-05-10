<?php

namespace app\modules\admin\controllers;

class SuperController extends \yii\web\Controller
{
    public function actionAsdadfs()
    {
        return $this->render('asdadfs');
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionSuperAction()
    {
        return $this->render('super-action');
    }

}
