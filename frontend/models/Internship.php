<?php

namespace app\models;

use \yii\db\ActiveRecord;

/**
 * This is the model class for table "internship".
 *
 * @property string $sid 学生学号
 * @property string $gintention 毕业意向
 * @property string $iten_sch 意向学校
 * @property string $iten_busi 意向企业
 */
class Internship extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'internship';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sid', 'gintention', 'iten_sch', 'iten_busi'], 'required'],
            [['sid', 'gintention', 'iten_sch', 'iten_busi'], 'string', 'max' => 14],
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
            'gintention' => '毕业意向',
            'iten_sch' => '意向学校',
            'iten_busi' => '意向企业',
        ];
    }
}