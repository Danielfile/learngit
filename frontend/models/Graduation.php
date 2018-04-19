<?php

namespace app\models;

use \yii\db\ActiveRecord;

/**
 * This is the model class for table "graduation".
 *
 * @property string $sid 学生学号
 * @property string $gdestination 毕业去向
 * @property string $sch_way 入学方式
 * @property string $work_way 入职方式
 * @property string $std_field 所在领域研究方向
 */
class Graduation extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'graduation';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sid', 'gdestination', 'sch_way', 'work_way', 'std_field'], 'required'],
            [['sid', 'gdestination', 'sch_way', 'work_way', 'std_field'], 'string', 'max' => 14],
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
            'gdestination' => '毕业去向',
            'sch_way' => '入学方式',
            'work_way' => '入职方式',
            'std_field' => '所在领域研究方向',
        ];
    }
}