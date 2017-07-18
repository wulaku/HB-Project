<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hb_banned_comment".
 *
 * @property integer $banid
 * @property string $ip
 * @property integer $admin
 * @property string $dateline
 * @property string $expiration
 */
class HbBanned extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hb_banned_comment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['banid'], 'required'],
            [['banid', 'admin'], 'integer'],
            [['dateline', 'expiration'], 'safe'],
            [['ip'], 'string', 'max' => 16],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'banid' => 'Banid',
            'ip' => 'Ip',
            'admin' => 'Admin',
            'dateline' => 'Dateline',
            'expiration' => 'Expiration',
        ];
    }
}
