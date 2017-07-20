<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hb_user_comment".
 *
 * @property integer $uid
 * @property string $email
 * @property string $username
 * @property string $password
 * @property integer $status
 * @property integer $emailstatus
 * @property string $regdate
 * @property integer $credits
 * @property string $profile
 */
class HbUser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hb_user_comment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uid'], 'required'],
            [['uid', 'status', 'emailstatus', 'credits'], 'integer'],
            [['regdate'], 'safe'],
            [['profile'], 'string'],
            [['email'], 'string', 'max' => 40],
            [['username', 'password'], 'string', 'max' => 16],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'uid' => 'Uid',
            'email' => 'Email',
            'username' => 'Username',
            'password' => 'Password',
            'status' => 'Status',
            'emailstatus' => 'Emailstatus',
            'regdate' => 'Regdate',
            'credits' => 'Credits',
            'profile' => 'Profile',
        ];
    }
}
