<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "hb_tagitem_comment".
 *
 * @property integer $tagid
 * @property integer $aid
 * @property integer $idtype
 *
 * @property HbArticleComment $a
 * @property HbTagComment $tag
 */
class HbTagitem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hb_tagitem_comment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tagid'], 'required'],
            [['tagid', 'aid', 'idtype'], 'integer'],
            [['aid'], 'exist', 'skipOnError' => true, 'targetClass' => HbArticle::className(), 'targetAttribute' => ['aid' => 'aid']],
            [['tagid'], 'exist', 'skipOnError' => true, 'targetClass' => HbTag::className(), 'targetAttribute' => ['tagid' => 'tagid']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tagid' => 'Tagid',
            'aid' => 'Aid',
            'idtype' => 'Idtype',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getA()
    {
        return $this->hasOne(HbArticle::className(), ['aid' => 'aid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTag()
    {
        return $this->hasOne(HbTag::className(), ['tagid' => 'tagid']);
    }
}
