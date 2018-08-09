<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[ValutaSupporto]].
 *
 * @see ValutaSupporto
 */
class ValutaSupportoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return ValutaSupporto[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return ValutaSupporto|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
