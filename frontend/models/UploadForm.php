<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/17
 * Time: 15:26
 */
namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;

?>
<?php
class UploadForm extends Model
{
    /**
     * @var UploadedFile file attribute
     */
    public $file;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['file'], 'file'],
            [['file'], 'file', 'skipOnEmpty' => false],  //上传文件不能为空
            [['file'], 'file', 'extensions' => 'jpg, png,txt,doc,docx,zip'],  //上传文件类型
        ];
    }

    public function upload()
    {
        if (!$this->validate()) {
            return null;
        }

        $uploadFile = new UploadFile();

        return $uploadFile->save() ? $uploadFile : null;
    }
}
?>
