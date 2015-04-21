<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\FpLists;

/**
 * FpListsSearch represents the model behind the search form about `backend\models\FpLists`.
 */
class FpListsSearch extends FpLists {

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['id', 'configurable', 'the_order'], 'integer'],
            [['item_id', 'item', 'in_list_of', 'status'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios() {
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
    public function search($params, $type) {
        $query = FpLists::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

//        if (!($this->load($params) && $this->validate())) {
//            return $dataProvider;
//        }

        $query->andFilterWhere([
            'id' => $this->id,
            'configurable' => $this->configurable,
            'the_order' => $this->the_order,
            'in_list_of' => $type,
            
        ]);

        $query->andFilterWhere(['like', 'item_id', $this->item_id])
                ->andFilterWhere(['like', 'item', $this->item])
//                ->andFilterWhere(['like', 'in_list_of', $this->in_list_of])
                ->andFilterWhere(['like', 'status', $this->status]);
        
//        if ($condition !== NULL) {
//            //$query->andWhere($condition);
//            $query->andFilterWhere(['like', 'in_list_of', 'currencies']);
//        }

        return $dataProvider;
    }

}
