<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AutoritaDocumenti;

/**
 * AutoritaDocumentiSearch represents the model behind the search form of `app\models\AutoritaDocumenti`.
 */
class AutoritaDocumentiSearch extends AutoritaDocumenti
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idAutorita_Documenti', 'documento', 'autorita'], 'integer'],
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
        $query = AutoritaDocumenti::find();

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
            'idAutorita_Documenti' => $this->idAutorita_Documenti,
            'documento' => $this->documento,
            'autorita' => $this->autorita,
        ]);

        return $dataProvider;
    }
}
