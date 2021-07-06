<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\FirstTable;

/**
 * SearchFirstTable represents the model behind the search form of `app\models\FirstTable`.
 */
class SearchFirstTable extends FirstTable
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'created_at', 'updated_at'], 'integer'],
            [['field_1', 'field_2', 'field_3', 'field_4', 'field_5', 'field_6', 'field_7', 'field_8', 'field_9', 'field_10','compare_field_first','compare_field_second'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = FirstTable::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'field_1', $this->field_1])
            ->andFilterWhere(['like', 'field_2', $this->field_2])
            ->andFilterWhere(['like', 'field_3', $this->field_3])
            ->andFilterWhere(['like', 'field_4', $this->field_4])
            ->andFilterWhere(['like', 'field_5', $this->field_5])
            ->andFilterWhere(['like', 'field_6', $this->field_6])
            ->andFilterWhere(['like', 'field_7', $this->field_7])
            ->andFilterWhere(['like', 'field_8', $this->field_8])
            ->andFilterWhere(['like', 'field_9', $this->field_9])
            ->andFilterWhere(['like', 'field_10', $this->field_10]);

        return $dataProvider;
    }



    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search_matches($params)
    {
        //$query = FirstTable::find();

        $query = FirstTable::find()->innerJoinWith('match',true);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        //echo time(); exit;
        //$query->where()

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'field_1', $this->field_1]);
        
        //$query->join('inner join','second_table','first_table.'.$this->compare_field_first.'=second_table.'.$this->compare_field_second);

        //->andFilterWhere(['like', 'field_10', $this->field_10]);



        return $dataProvider;
    }


}
