<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Autorita_Documenti".
 *
 * @property int $idAutorita_Documenti
 * @property int $documento
 * @property int $autorita
 */
class AutoritaDocumenti extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Autorita_Documenti';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['documento', 'autorita'], 'required'],
            [['documento', 'autorita'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idAutorita_Documenti' => 'Id Autorita  Documenti',
            'documento' => 'Documento',
            'autorita' => 'Autorita',
        ];
    }

    /**
     * {@inheritdoc}
     * @return AutoritaDocumentiQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AutoritaDocumentiQuery(get_called_class());
    }
}
