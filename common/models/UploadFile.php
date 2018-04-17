<?php

namespace common\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "uploadfile".
 *
 * @property string $id //用户的ID
 * @property string $name //上传者
 * @property string $filename //文件名
 * @property string $remarks //备注
 * @property string $upload_date //上传时间
 */
class UploadFile extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'uploadfile';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'name', 'filename', 'remarks', 'upload_date'], 'required'],
            [['upload_date'], 'safe'],
            [['id'], 'string', 'max' => 12],
            [['name'], 'string', 'max' => 52],
            [['filename'], 'string', 'max' => 100],
            [['remarks'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'filename' => 'Filename',
            'remarks' => 'Remarks',
            'upload_date' => 'Upload Date',
        ];
    }
}
?>