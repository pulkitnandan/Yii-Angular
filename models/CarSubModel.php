<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "carsubmodel".
 *
 * @property integer $carmakeid
 * @property integer $carmodelid
 * @property integer $carsubmodelid
 * @property string $name
 */
class CarSubModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'carsubmodel';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['carmakeid', 'carmodelid', 'carsubmodelid', 'name'], 'required'],
            [['carmakeid', 'carmodelid', 'carsubmodelid'], 'integer'],
            [['name'], 'string', 'max' => 40]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'carmakeid' => 'Carmakeid',
            'carmodelid' => 'Carmodelid',
            'carsubmodelid' => 'Carsubmodelid',
            'name' => 'Name',
        ];
    }
}
