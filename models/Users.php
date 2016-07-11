<?php

namespace app\models;

use Yii;
use app\modules\employee\models\Employees;
use app\modules\student\models\Students;

/**
 * This is the model class for table "users".
 *
 * @property integer $id
 * @property string $user_type
 * @property string $username
 * @property string $password
 * @property string $authkey
 *
 * @property Employees $employee 
 * @property Students $student
 */
class Users extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_type'], 'required'],
            [['user_type'], 'string', 'max' => 32],
            [['username', 'password'], 'string', 'max' => 22],
            [['authkey'], 'string', 'max' => 35],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_type' => 'User Type',
            'username' => 'Username',
            'password' => 'Password',
            'authkey' => 'Authkey',
        ];
    }
    
    public function getAuthKey() {
        return $this->authkey;
    }

    public function getId() {
        return $this->id;
    }

    public function validateAuthKey($authKey) {
        return $this->authkey===$authKey;
    }

    public static function findIdentity($id) {
        return static::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null) {
        throw new \yii\base\NotSupportedException();
    }
    
    public static function findByUsername($username){
        return self::findOne(['username'=>$username]);
    }

        public function validatePassword($password){
        return $this->password===$password;
    }
    
    public function generateAuthKey()
    {
        $this->auth_key = Security::generateRandomKey();
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployee()
    {
    	return $this->hasOne(Employees::className(), ['user_id' => 'id']);
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudent()
    {
    	return $this->hasOne(Students::className(), ['user_id' => 'id']);
    }
    
}
