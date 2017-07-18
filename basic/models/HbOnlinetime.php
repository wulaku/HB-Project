<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hb_onlinetime_comment".
 *
 * @property integer $uid
 * @property integer $thismonth
 * @property integer $total
 */
class HbOnlinetime extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hb_onlinetime_comment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uid'], 'required'],
            [['uid', 'thismonth', 'total'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'uid' => 'Uid',
            'thismonth' => 'Thismonth',
            'total' => 'Total',
        ];
    }
}
