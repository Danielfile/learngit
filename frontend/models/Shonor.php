<?php

namespace app\models;

use \yii\db\ActiveRecord;

/**
 * This is the model class for table "shonor".
 *
 * @property string $id id自动增加
 * @property string $snum 学生获奖信息编号
 * @property string $stime 获奖时间
 * @property string $sname 获奖名称
 * @property string $sid 学生学号
 */
class Shonor extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shonor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['snum', 'stime', 'sname', 'sid'], 'required'],
            [['snum', 'stime', 'sname', 'sid'], 'string', 'max' => 14],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'snum' => '获奖编号',
            'stime' => '获奖时间',
            'sname' => '获奖名称',
            'sid' => '学生学号',
        ];
    }
}