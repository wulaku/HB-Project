<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hb_regip_comment".
 *
 * @property string $ip
 * @property string $dateline
 * @property integer $count
 */
class HbRegip extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hb_regip_comment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ip'], 'required'],
            [['dateline'], 'safe'],
            [['count'], 'integer'],
            [['ip'], 'string', 'max' => 16],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ip' => 'Ip',
            'dateline' => 'Dateline',
            'count' => 'Count',
        ];
    }
}
