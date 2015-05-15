<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "carmodel".
 *
 * @property integer $carmakeid
 * @property integer $carmodelid
 * @property string $name
 */
class CarModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'carmodel';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['carmakeid', 'carmodelid', 'name'], 'required'],
            [['carmakeid', 'carmodelid'], 'integer'],
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
            'name' => 'Name',
        ];
    }
}
