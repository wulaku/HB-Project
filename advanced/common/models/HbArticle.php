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

     public function getUrl()
    {
        return Yii::$app->urlManager->createUrl(
            [
                'hb-article/detail',
                'id'=>$this->aid,
                'title'=>$this->title,
            ]);
    }

    public function getBeginning($length=200)
    {
        $tmpStr = strip_tags($this->content);
        $tmplen = mb_strlen($tmpStr);
        $tmpStr = mb_substr($tmpStr,0,$length,'utf-8');
        return $tmpStr.($tmplen>$length?'...':''); 
    }
    
     public function getAuthori()
    {
        return $this->hasOne(User::className(), ['id'=>'author']);
    }
}
