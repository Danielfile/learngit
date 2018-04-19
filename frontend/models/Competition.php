<?php

namespace app\models;

use \yii\db\ActiveRecord;

/**
 * This is the model class for table "competition".
 *
 * @property string $id //ID
 * @property string $tid //教师姓名
 * @property string $cname //竞赛题目
 * @property string $when //竞赛时间
 * @property string $prize //获奖详情
 * @property string $auth //获奖身份
 */
class Competition extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'competition';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tid', 'cname', 'when', 'prize', 'auth'], 'required'],
            [['tid'], 'string', 'max' => 12],
            [['cname', 'prize'], 'string', 'max' => 80],
            [['when'], 'string', 'max' => 20],
            [['auth'], 'string', 'max' => 40],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tid' => '教师名称',
            'cname' => '竞赛名称',
            'when' => '竞赛时间',
            'prize' => '获奖详情',
            'auth' => '获奖身份',
        ];
    }
}