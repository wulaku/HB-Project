<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\HbTagitem;

/**
 * HbTagitemSearch represents the model behind the search form about `app\models\HbTagitem`.
 */
class HbTagitemSearch extends HbTagitem
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tagid', 'aid', 'idtype'], 'integer'],
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
        $query = HbTagitem::find();

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
            'aid' => $this->aid,
            'idtype' => $this->idtype,
        ]);

        return $dataProvider;
    }
}
