<?php

namespace backend\modules\api\controllers;

class UserController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	echo 'nihao'; exit;
        return $this->render('index');
    }

}
