<?php

namespace app\modules\employee\models;

use Yii;

/**
 * This is the model class for table "employees".
 *
 * @property integer $id
 * @property string $full_name
 * @property string $user_name
 * @property string $email
 * @property string $phone
 *
 * @property CourEmp[] $courEmps
 * @property Courses[] $cs
 */



class Employees extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
	
	public $selectedCourses;
	
    public static function tableName()
    {
        return 'employees';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['full_name', 'user_name', 'email', 'phone','selectedCourses'], 'required'],
            [['full_name', 'user_name', 'email'], 'string', 'max' => 32],
            [['phone'], 'string', 'max' => 22],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'full_name' => 'Full Name',
            'user_name' => 'User Name',
            'email' => 'Email',
            'phone' => 'Phone',
        	'selectedCourses'=>'Seleted Courses'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCourEmps()
    {
        return $this->hasMany(CourEmp::className(), ['e_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCs()
    {
        return $this->hasMany(Courses::className(), ['id' => 'c_id'])->viaTable('cour_emp', ['e_id' => 'id']);
    }
}
