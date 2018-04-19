<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * InternshipSearch represents the model behind the search form of `app\models\Internship`.
 */
class InternshipSearch extends Internship
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sid', 'gintention', 'iten_sch', 'iten_busi'], 'safe'],
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
        $query = Internship::find();

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
        $query->andFilterWhere(['like', 'sid', $this->sid])
            ->andFilterWhere(['like', 'gintention', $this->gintention])
            ->andFilterWhere(['like', 'iten_sch', $this->iten_sch])
            ->andFilterWhere(['like', 'iten_busi', $this->iten_busi]);

        return $dataProvider;
    }
}