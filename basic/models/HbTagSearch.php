<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\HbTag;

/**
 * HbTagSearch represents the model behind the search form about `app\models\HbTag`.
 */
class HbTagSearch extends HbTag
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tagid', 'status'], 'integer'],
            [['tagname'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = HbTag::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'tagid' => $this->tagid,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'tagname', $this->tagname]);

        return $dataProvider;
    }
}
