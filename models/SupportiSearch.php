<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Supporti;

/**
 * SupportiSearch represents the model behind the search form of `app\models\Supporti`.
 */
class SupportiSearch extends Supporti
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idSupporto'], 'integer'],
            [['nomeSupporto'], 'safe'],
            [['commissioneDefault'], 'number'],
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
        $query = Supporti::find();

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
            'idSupporto' => $this->idSupporto,
            'commissioneDefault' => $this->commissioneDefault,
        ]);

        $query->andFilterWhere(['like', 'nomeSupporto', $this->nomeSupporto]);

        return $dataProvider;
    }
}
