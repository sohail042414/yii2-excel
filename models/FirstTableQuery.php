<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[FirstTable]].
 *
 * @see FirstTable
 */
class FirstTableQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return FirstTable[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return FirstTable|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
