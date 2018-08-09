<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Movimenti".
 *
 * @property int $Id
 * @property int $Provenienza
 * @property int $Destinazione
 * @property int $Operatore
 * @property int $Valuta
 * @property int $Quantita
 * @property string $Data
 * @property double $Cambio
 */
class Movimenti extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Movimenti';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Provenienza', 'Destinazione', 'Operatore', 'Valuta', 'Quantita', 'Cambio'], 'required'],
            [['Provenienza', 'Destinazione', 'Operatore', 'Valuta', 'Quantita'], 'integer'],
            [['Data'], 'safe'],
            [['Cambio'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'Provenienza' => 'Provenienza',
            'Destinazione' => 'Destinazione',
            'Operatore' => 'Operatore',
            'Valuta' => 'Valuta',
            'Quantita' => 'Quantita',
            'Data' => 'Data',
            'Cambio' => 'Cambio',
        ];
    }

    /**
     * {@inheritdoc}
     * @return MovimentiQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MovimentiQuery(get_called_class());
    }
}
