<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hb_friendlink_comment".
 *
 * @property integer $linkid
 * @property integer $displayorder
 * @property string $name
 * @property string $url
 * @property string $description
 * @property string $logo
 * @property integer $type
 */
class HbFriendlink extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hb_friendlink_comment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['linkid'], 'required'],
            [['linkid', 'displayorder', 'type'], 'integer'],
            [['description'], 'string'],
            [['name'], 'string', 'max' => 100],
            [['url', 'logo'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'linkid' => 'Linkid',
            'displayorder' => 'Displayorder',
            'name' => 'Name',
            'url' => 'Url',
            'description' => 'Description',
            'logo' => 'Logo',
            'type' => 'Type',
        ];
    }
}
