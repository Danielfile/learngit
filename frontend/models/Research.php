<?php

namespace app\models;

use \yii\db\ActiveRecord;

/**
 * This is the model class for table "research".
 *
 * @property string $id //ID
 * @property string $tid //老师编号
 * @property string $rname //科研题目
 * @property string $type //类型
 * @property string $from //支持来源
 */
class Research extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'research';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tid', 'rname', 'type', 'from'], 'required'],
            [['tid'], 'string', 'max' => 12],
            [['rname', 'from'], 'string', 'max' => 80],
            [['type'], 'string', 'max' => 4],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tid' => '教师名称',
            'rname' => '科研题目',
            'type' => '科研类型',
            'from' => '支持来源',
        ];
    }
}

?>