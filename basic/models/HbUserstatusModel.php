<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hb_userstatus_comment".
 *
 * @property integer $uid
 * @property string $regip
 * @property string $lastip
 * @property integer $profileprogress
 */
class HbUserstatusModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hb_userstatus_comment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uid'], 'required'],
            [['uid', 'profileprogress'], 'integer'],
            [['regip', 'lastip'], 'string', 'max' => 16],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'uid' => 'Uid',
            'regip' => 'Regip',
            'lastip' => 'Lastip',
            'profileprogress' => 'Profileprogress',
        ];
    }
}
