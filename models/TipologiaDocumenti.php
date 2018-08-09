<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "TipologiaDocumenti".
 *
 * @property int $idTipologiaDocumenti
 * @property string $nomeDocumento
 */
class TipologiaDocumenti extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'TipologiaDocumenti';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nomeDocumento'], 'required'],
            [['nomeDocumento'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idTipologiaDocumenti' => 'Id Tipologia Documenti',
            'nomeDocumento' => 'Nome Documento',
        ];
    }

    /**
     * {@inheritdoc}
     * @return TipologiaDocumentiQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TipologiaDocumentiQuery(get_called_class());
    }
}
