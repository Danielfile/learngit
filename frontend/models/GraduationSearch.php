<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Graduation;

/**
 * GraduationSearch represents the model behind the search form of `app\models\Graduation`.
 */
class GraduationSearch extends Graduation
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sid', 'gdestination', 'sch_way', 'work_way', 'std_field'], 'safe'],
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
        $query = Graduation::find();

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
        $query->andFilterWhere(['like', 'sid', $this->sid])
            ->andFilterWhere(['like', 'gdestination', $this->gdestination])
            ->andFilterWhere(['like', 'sch_way', $this->sch_way])
            ->andFilterWhere(['like', 'work_way', $this->work_way])
            ->andFilterWhere(['like', 'std_field', $this->std_field]);

        return $dataProvider;
    }
}