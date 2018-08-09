<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Uffici".
 *
 * @property int $id
 * @property int $Nome
 * @property string $Indirizzo
 * @property int $Cap
 * @property string $Telefono
 * @property string $PartitaIva
 */
class Uffici extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Uffici';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nome', 'Cap'], 'integer'],
            [['Indirizzo', 'Telefono', 'PartitaIva'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Nome' => 'Nome',
            'Indirizzo' => 'Indirizzo',
            'Cap' => 'Cap',
            'Telefono' => 'Telefono',
            'PartitaIva' => 'Partita Iva',
        ];
    }

    /**
     * {@inheritdoc}
     * @return UfficiQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UfficiQuery(get_called_class());
    }
}
