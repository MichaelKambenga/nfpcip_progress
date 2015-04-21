<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\ExchangeRates;

/**
 * ExchangeRatesSearch represents the model behind the search form about `backend\models\ExchangeRates`.
 */
class ExchangeRatesSearch extends ExchangeRates
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'tsh_per_currency'], 'integer'],
            [['report_period_end', 'currency_id'], 'safe'],
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
        $query = ExchangeRates::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'report_period_end' => $this->report_period_end,
            'tsh_per_currency' => $this->tsh_per_currency,
        ]);

        $query->andFilterWhere(['like', 'currency_id', $this->currency_id]);

        return $dataProvider;
    }
}
