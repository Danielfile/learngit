<?php
namespace frontend\controllers;

use app\models\UploadLook;
use Yii;
use yii\web\Controller;
use app\models\UploadForm;
use yii\web\UploadedFile;
use yii\data\Pagination;

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
        $model = new UploadForm();

        if (Yii::$app->request->isPost) {
            $model->file = UploadedFile::getInstance($model, 'file');

            if ($model->file && $model->validate()) {
                $fileName = $model->file->baseName . '.' . $model->file->extension;
                $model->file->saveAs('/' .$fileName );
            }
        }

        return $this->render('index', ['model' => $model]);
    }

    public function actionLook()
    {
        $query = UploadLook::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $uploadlooks = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('look', [
            'uploadlooks' => $uploadlooks,
            'pagination' => $pagination,
        ]);
    }
}

?>

