<?php

namespace app\models;

use \yii\db\ActiveRecord;

/**
 * This is the model class for table "student".
 *
 * @property string $sid
 * @property string $sname
 * @property string $s_position 班级职务
 * @property string $s_itship_inten 实习意向
 */
class Student extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sid', 'sname', 's_position', 's_itship_inten'], 'required'],
            [['sid', 'sname', 's_position', 's_itship_inten'], 'string', 'max' => 14],
            [['sid'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sid' => '学生学号',
            'sname' => '学生姓名',
            's_position' => '班级职务',
            's_itship_inten' => '实习意向',
        ];
    }
}