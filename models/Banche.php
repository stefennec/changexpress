<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Banche".
 *
 * @property int $id
 * @property string $Nome
 * @property string $Indirizzo
 * @property string $Cap
 * @property string $Telefono
 * @property string $Referente
 */
class Banche extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Banche';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nome', 'Referente'], 'string'],
            [['Indirizzo', 'Cap', 'Telefono'], 'string', 'max' => 255],
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
            'Referente' => 'Referente',
        ];
    }

    /**
     * {@inheritdoc}
     * @return BancheQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new BancheQuery(get_called_class());
    }
}
