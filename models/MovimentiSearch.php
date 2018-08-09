<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Movimenti;

/**
 * MovimentiSearch represents the model behind the search form of `app\models\Movimenti`.
 */
class MovimentiSearch extends Movimenti
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id', 'Provenienza', 'Destinazione', 'Operatore', 'Valuta', 'Quantita'], 'integer'],
            [['Data'], 'safe'],
            [['Cambio'], 'number'],
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
        $query = Movimenti::find();

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
            'Id' => $this->Id,
            'Provenienza' => $this->Provenienza,
            'Destinazione' => $this->Destinazione,
            'Operatore' => $this->Operatore,
            'Valuta' => $this->Valuta,
            'Quantita' => $this->Quantita,
            'Data' => $this->Data,
            'Cambio' => $this->Cambio,
        ]);

        return $dataProvider;
    }
}
