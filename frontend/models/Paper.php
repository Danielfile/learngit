<?php

namespace app\models;

use \yii\db\ActiveRecord;

/**
 * This is the model class for table "paper".
 *
 * @property string $id //ID
 * @property string $tid //教师编号
 * @property string $pname //论文姓名
 * @property string $where //发表情况
 * @property string $author //作者身份
 */
class Paper extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'paper';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tid', 'pname', 'where', 'author'], 'required'],
            [['tid'], 'string', 'max' => 12],
            [['pname'], 'string', 'max' => 20],
            [['where'], 'string', 'max' => 80],
            [['author'], 'string', 'max' => 40],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tid' => '教师编号',
            'pname' => '论文姓名',
            'where' => '发表情况',
            'author' => '作者身份',
        ];
    }
}