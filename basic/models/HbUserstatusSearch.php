<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\HbUserstatusModel;

/**
 * HbUserstatusSearch represents the model behind the search form about `app\models\HbUserstatusModel`.
 */
class HbUserstatusSearch extends HbUserstatusModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uid', 'profileprogress'], 'integer'],
            [['regip', 'lastip'], 'safe'],
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
        $query = HbUserstatusModel::find();

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
            'profileprogress' => $this->profileprogress,
        ]);

        $query->andFilterWhere(['like', 'regip', $this->regip])
            ->andFilterWhere(['like', 'lastip', $this->lastip]);

        return $dataProvider;
    }
}
