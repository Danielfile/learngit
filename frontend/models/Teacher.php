<?php

namespace app\models;

use \yii\db\ActiveRecord;

/**
 * This is the model class for table "teacher".
 *
 * @property string $number //教师编号
 * @property string $name //教师姓名
 * @property string $job //教师职位
 * @property string $graduate //毕业院校
 * @property string $direction //研究方向
 */
class Teacher extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'teacher';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['number', 'name', 'job', 'graduate', 'direction'], 'required'],
            [['number'], 'string', 'max' => 12],
            [['name'], 'string', 'max' => 20],
            [['job'], 'string', 'max' => 16],
            [['graduate', 'direction'], 'string', 'max' => 40],
            [['number'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name' => '教师姓名',
            'job' => '教师职位',
            'graduate' => '毕业院校',
            'direction' => '研究方向',
        ];
    }
}

?>