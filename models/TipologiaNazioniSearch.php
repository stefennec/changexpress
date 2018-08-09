<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TipologiaNazioni;

/**
 * TipologiaNazioniSearch represents the model behind the search form of `app\models\TipologiaNazioni`.
 */
class TipologiaNazioniSearch extends TipologiaNazioni
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idTipologiaNazione'], 'integer'],
            [['tipologiaNazione'], 'safe'],
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
        $query = TipologiaNazioni::find();

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
            'idTipologiaNazione' => $this->idTipologiaNazione,
        ]);

        $query->andFilterWhere(['like', 'tipologiaNazione', $this->tipologiaNazione]);

        return $dataProvider;
    }
}
