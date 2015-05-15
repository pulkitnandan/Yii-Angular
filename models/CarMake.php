<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "carmake".
 *
 * @property string $name
 * @property integer $carmakeid
 */
class Carmake extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'carmake';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'carmakeid'], 'required'],
            [['carmakeid'], 'integer'],
            [['name'], 'string', 'max' => 40]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'carmakeid' => 'Carmakeid',
        ];
    }
}
