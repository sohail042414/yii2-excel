<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%second_table}}".
 *
 * @property int $id
 * @property string|null $field_1
 * @property string|null $field_2
 * @property string|null $field_3
 * @property string|null $field_4
 * @property string|null $field_5
 * @property string|null $field_6
 * @property string|null $field_7
 * @property string|null $field_8
 * @property string|null $field_9
 * @property string|null $field_10
 * @property int $created_at
 * @property int $updated_at
 */
class SecondTable extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%second_table}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at'], 'required'],
            [['created_at', 'updated_at'], 'integer'],
            [['field_1', 'field_2', 'field_3', 'field_4', 'field_5', 'field_6', 'field_7', 'field_8', 'field_9', 'field_10'], 'string', 'max' => 64],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'field_1' => Yii::t('app', 'Field 1'),
            'field_2' => Yii::t('app', 'Field 2'),
            'field_3' => Yii::t('app', 'Field 3'),
            'field_4' => Yii::t('app', 'Field 4'),
            'field_5' => Yii::t('app', 'Field 5'),
            'field_6' => Yii::t('app', 'Field 6'),
            'field_7' => Yii::t('app', 'Field 7'),
            'field_8' => Yii::t('app', 'Field 8'),
            'field_9' => Yii::t('app', 'Field 9'),
            'field_10' => Yii::t('app', 'Field 10'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return SecondTableQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SecondTableQuery(get_called_class());
    }
}
