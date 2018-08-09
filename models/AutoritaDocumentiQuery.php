<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[AutoritaDocumenti]].
 *
 * @see AutoritaDocumenti
 */
class AutoritaDocumentiQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return AutoritaDocumenti[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return AutoritaDocumenti|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
