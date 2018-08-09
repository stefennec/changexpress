<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Valute;

/**
 * ValuteSearch represents the model behind the search form of `app\models\Valute`.
 */
class ValuteSearch extends Valute
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idValuta'], 'integer'],
            [['nomeValuta', 'siglaValuta'], 'safe'],
            [['rateUfficialeVendita', 'rateUfficialeAcquisto', 'differenzialeVendita', 'differenzialeAcquisto'], 'number'],
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
        $query = Valute::find();

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
            'idValuta' => $this->idValuta,
            'rateUfficialeVendita' => $this->rateUfficialeVendita,
            'rateUfficialeAcquisto' => $this->rateUfficialeAcquisto,
            'differenzialeVendita' => $this->differenzialeVendita,
            'differenzialeAcquisto' => $this->differenzialeAcquisto,
        ]);

        $query->andFilterWhere(['like', 'nomeValuta', $this->nomeValuta])
            ->andFilterWhere(['like', 'siglaValuta', $this->siglaValuta]);

        return $dataProvider;
    }
}
