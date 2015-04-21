<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\IndDisagg;

/**
 * IndDisaggSearch represents the model behind the search form about `backend\models\IndDisagg`.
 */
class IndDisaggSearch extends IndDisagg
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['disagg_group_id', 'disagg_id', 'disagg', 'status'], 'safe'],
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
        $query = IndDisagg::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'disagg_group_id', $this->disagg_group_id])
            ->andFilterWhere(['like', 'disagg_id', $this->disagg_id])
            ->andFilterWhere(['like', 'disagg', $this->disagg])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
