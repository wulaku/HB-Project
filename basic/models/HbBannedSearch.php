<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\HbBannedModel;

/**
 * HbBannedSearch represents the model behind the search form about `app\models\HbBannedModel`.
 */
class HbBannedSearch extends HbBannedModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['banid', 'admin'], 'integer'],
            [['ip', 'dateline', 'expiration'], 'safe'],
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
        $query = HbBannedModel::find();

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
            'banid' => $this->banid,
            'admin' => $this->admin,
            'dateline' => $this->dateline,
            'expiration' => $this->expiration,
        ]);

        $query->andFilterWhere(['like', 'ip', $this->ip]);

        return $dataProvider;
    }
}
