<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Nazioni".
 *
 * @property int $idNazione
 * @property string $nomeNazione
 * @property string $siglaNazione
 * @property int $tipologiaNazione
 */
class Nazioni extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Nazioni';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nomeNazione', 'siglaNazione', 'tipologiaNazione'], 'required'],
            [['nomeNazione'], 'string'],
            [['tipologiaNazione'], 'integer'],
            [['siglaNazione'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idNazione' => 'Id Nazione',
            'nomeNazione' => 'Nome Nazione',
            'siglaNazione' => 'Sigla Nazione',
            'tipologiaNazione' => 'Tipologia Nazione',
        ];
    }

    /**
     * {@inheritdoc}
     * @return NazioniQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new NazioniQuery(get_called_class());
    }
}
