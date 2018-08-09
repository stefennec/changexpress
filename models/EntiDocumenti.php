<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "EntiDocumenti".
 *
 * @property int $idEnteDocumento
 * @property string $nomeEnte
 */
class EntiDocumenti extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'EntiDocumenti';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nomeEnte'], 'required'],
            [['nomeEnte'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idEnteDocumento' => 'Id Ente Documento',
            'nomeEnte' => 'Nome Ente',
        ];
    }

    /**
     * {@inheritdoc}
     * @return EntiDocumentiQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new EntiDocumentiQuery(get_called_class());
    }
}
