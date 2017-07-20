<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\HbOnlinetime;

/**
 * HbOnlinetimeSearch represents the model behind the search form about `common\models\HbOnlinetime`.
 */
class HbOnlinetimeSearch extends HbOnlinetime
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uid', 'thismonth', 'total'], 'integer'],
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
        $query = HbOnlinetime::find();

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
            'uid' => $this->uid,
            'thismonth' => $this->thismonth,
            'total' => $this->total,
        ]);

        return $dataProvider;
    }
}
