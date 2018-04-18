<?php
namespace app\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "upload".
 *
 * @property string $id //用户的ID
 * @property string $name //上传者
 * @property string $filename //文件名
 * @property string $remarks //备注
 * @property string $upload_date //上传时间
 */
class Upload extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'upload';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uid', 'name', 'remarks'], 'required'],
            [['uid'], 'string', 'max' => 12],
            [['name'], 'string', 'max' => 52],
            [['remarks'], 'string', 'max' => 200],
            //[['filename'], 'file'],
            //[['filename'], 'file', 'skipOnEmpty' => false],  //上传文件不能为空
            //[['filename'], 'file', 'extensions' => 'jpg, png,txt,doc,docx,zip,ppt,pptx'],  //上传文件类型
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'uid' => '认证号',
            'name' => '姓名',
            'filename' => '文件名',
            'remarks' => '备注',
            'upload_date' => '上传日期',
        ];
    }
}