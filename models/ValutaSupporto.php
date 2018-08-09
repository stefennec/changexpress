<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ValutaSupporto".
 *
 * @property int $Id
 * @property int $Nome
 * @property int $Supporto
 * @property int $CommisioneDefault
 */
class ValutaSupporto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ValutaSupporto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nome', 'Supporto', 'CommisioneDefault'], 'required'],
            [['Nome', 'Supporto', 'CommisioneDefault'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'Nome' => 'Nome',
            'Supporto' => 'Supporto',
            'CommisioneDefault' => 'Commisione Default',
        ];
    }

    /**
     * {@inheritdoc}
     * @return ValutaSupportoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ValutaSupportoQuery(get_called_class());
    }
}
