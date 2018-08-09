<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Nazioni]].
 *
 * @see Nazioni
 */
class NazioniQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Nazioni[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Nazioni|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
