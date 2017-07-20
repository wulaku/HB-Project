<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "hb_article_comment".
 *
 * @property integer $aid
 * @property string $content
 * @property integer $author
 * @property string $pubdate
 *
 * @property HbTagitemComment[] $hbTagitemComments
 */
class HbArticle extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hb_article_comment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['author'], 'integer'],
            [['pubdate'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'aid' => 'Aid',
            'content' => 'Content',
            'author' => 'Author',
            'pubdate' => 'Pubdate',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHbTagitemComments()
    {
        return $this->hasMany(HbTagitemComment::className(), ['aid' => 'aid']);
    }
}
