<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Supporti".
 *
 * @property int $idSupporto
 * @property string $nomeSupporto
 * @property double $commissioneDefault
 */
class Supporti extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Supporti';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nomeSupporto', 'commissioneDefault'], 'required'],
            [['nomeSupporto'], 'string'],
            [['commissioneDefault'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idSupporto' => 'Id Supporto',
            'nomeSupporto' => 'Nome Supporto',
            'commissioneDefault' => 'Commissione Default',
        ];
    }

    /**
     * {@inheritdoc}
     * @return SupportiQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SupportiQuery(get_called_class());
    }
}
