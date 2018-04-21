<?php

namespace api\modules\v1\controllers;

use \yii\rest\ActiveController;

class UserController extends ActiveController
{	
    public $modelClass = 'api\modules\v1\models\User';

    //数据序列化 yii\rest\Serializer 负责转换资源的中间件 对象或集合到数组。
    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items',
    ];

    public function actions() {  
        return [   
            'index' => [   
                'class' => 'api\modules\v1\controllers\user\UpdateAction',  
                'modelClass' => $this->modelClass,   
            ],  
            //'update' =>'', 
        ];  
    }  
      
    protected function verbs(){  
        return [  
            'index'=>['GET','HEAD'],  
        ];  
    }  
}
