<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * CompetitionSearch represents the model behind the search form of `app\models\Competition`.
 */
class CompetitionSearch extends Competition
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['tid', 'cname', 'when', 'prize', 'auth'], 'safe'],
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
        $query = Competition::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $dataProvider->pagination->defaultPageSize =10;

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'tid', $this->tid])
            ->andFilterWhere(['like', 'cname', $this->cname])
            ->andFilterWhere(['like', 'when', $this->when])
            ->andFilterWhere(['like', 'prize', $this->prize])
            ->andFilterWhere(['like', 'auth', $this->auth]);

        return $dataProvider;
    }
}

?>