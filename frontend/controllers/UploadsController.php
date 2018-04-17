<?php
namespace frontend\controllers;

use yii\web\Controller;

?>
<?php
/**
 * Class UploadsController 上传文件 执行操作控制器
 * @package frontend\controllers
 */
class UploadsController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}

?>

