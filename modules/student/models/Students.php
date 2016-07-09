<?php

namespace app\modules\student\models;

use Yii;
use app\modules\course\models\Courses;

/**
 * This is the model class for table "students".
 *
 * @property integer $id
 * @property string $full_name
 * @property string $user_name
 * @property string $email
 * @property string $phone
 * @property integer $c_id
 *
 * @property Courses $c
 */
class Students extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'students';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['full_name', 'user_name', 'email', 'phone', 'c_id'], 'required'],
            [['c_id'], 'integer'],
            [['full_name', 'user_name', 'email'], 'string', 'max' => 32],
            [['phone'], 'string', 'max' => 22],
            [['c_id'], 'exist', 'skipOnError' => true, 'targetClass' => Courses::className(), 'targetAttribute' => ['c_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
//             'full_name' => 'Full Name',
//             'user_name' => 'User Name',
            'email' => 'Full Name',
            'phone' => 'Phone',
            'c_id' => 'Course',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getC()
    {
        return $this->hasOne(Courses::className(), ['id' => 'c_id']);
    }
}
