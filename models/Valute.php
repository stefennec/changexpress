<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Valute".
 *
 * @property int $idValuta
 * @property string $nomeValuta
 * @property string $siglaValuta
 * @property double $rateUfficialeVendita
 * @property double $rateUfficialeAcquisto
 * @property double $differenzialeVendita
 * @property double $differenzialeAcquisto
 */
class Valute extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Valute';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nomeValuta', 'siglaValuta'], 'required'],
            [['nomeValuta'], 'string'],
            [['rateUfficialeVendita', 'rateUfficialeAcquisto', 'differenzialeVendita', 'differenzialeAcquisto'], 'number'],
            [['siglaValuta'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idValuta' => 'Id Valuta',
            'nomeValuta' => 'Nome Valuta',
            'siglaValuta' => 'Sigla Valuta',
            'rateUfficialeVendita' => 'Rate Ufficiale Vendita',
            'rateUfficialeAcquisto' => 'Rate Ufficiale Acquisto',
            'differenzialeVendita' => 'Differenziale Vendita',
            'differenzialeAcquisto' => 'Differenziale Acquisto',
        ];
    }

    /**
     * {@inheritdoc}
     * @return ValuteQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ValuteQuery(get_called_class());
    }
}
