<?php

namespace app\models;

use Yii;
use app\modules\employee\models\Employees;
use app\modules\course\models\Courses;

/**
 * This is the model class for table "cour_emp".
 *
 * @property integer $c_id
 * @property integer $e_id
 *
 * @property Courses $c
 * @property Employees $e
 */
class CourEmp extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cour_emp';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['c_id', 'e_id'], 'required'],
            [['c_id', 'e_id'], 'integer'],
            [['c_id'], 'exist', 'skipOnError' => true, 'targetClass' => Courses::className(), 'targetAttribute' => ['c_id' => 'id']],
            [['e_id'], 'exist', 'skipOnError' => true, 'targetClass' => Employees::className(), 'targetAttribute' => ['e_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'c_id' => 'C ID',
            'e_id' => 'E ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getC()
    {
        return $this->hasOne(Courses::className(), ['id' => 'c_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getE()
    {
        return $this->hasOne(Employees::className(), ['id' => 'e_id']);
    }
}
