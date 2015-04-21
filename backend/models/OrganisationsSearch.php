<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Organisations;

/**
 * OrganisationsSearch represents the model behind the search form about `app\models\Organisations`.
 */
class OrganisationsSearch extends Organisations
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['organisation_id', 'funding_source', 'reporting', 'single_source_indicators'], 'integer'],
            [['organisation_name_short', 'organisation_name_long', 'phone', 'address', 'organisation_email', 'website', 'status'], 'safe'],
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
        $query = Organisations::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'organisation_id' => $this->organisation_id,
            'funding_source' => $this->funding_source,
            'reporting' => $this->reporting,
            'single_source_indicators' => $this->single_source_indicators,
        ]);

        $query->andFilterWhere(['like', 'organisation_name_short', $this->organisation_name_short])
            ->andFilterWhere(['like', 'organisation_name_long', $this->organisation_name_long])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'organisation_email', $this->organisation_email])
            ->andFilterWhere(['like', 'website', $this->website])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
