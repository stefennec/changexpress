<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "TipologiaNazioni".
 *
 * @property int $idTipologiaNazione
 * @property string $tipologiaNazione
 */
class TipologiaNazioni extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'TipologiaNazioni';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tipologiaNazione'], 'required'],
            [['tipologiaNazione'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idTipologiaNazione' => 'Id Tipologia Nazione',
            'tipologiaNazione' => 'Tipologia Nazione',
        ];
    }

    /**
     * {@inheritdoc}
     * @return TipologiaNazioniQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TipologiaNazioniQuery(get_called_class());
    }
}
