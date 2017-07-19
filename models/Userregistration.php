<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;

/**
 * 
This is the model class for table "userregistration".
 *
 * 
@property integer $user_id
 * @property string $user_name
 * @property string $user_email
 * @property string $user_password
 * @property string $authKey
 */
class Userregistration extends \yii\db\ActiveRecord implements IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'userregistration';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_name', 'user_email', 'user_password', 'authKey'], 'required'],
            [['user_name', 'user_email', 'user_password', 'authKey'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'user_name' => 'User Name',
            'user_email' => 'User Email',
            'user_password' => 'User Password',
            'authKey' => 'Auth Key',
        ];
    }


	 public static function findIdentity($id)
    {
        return static::findOne($id);
    }

	public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }
	public function getAuthKey()
    {
        return $this->authKey;
    }

    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }
	
	public function getID(){
		return $this->user_id;
	}
	
	public static function findByUsername($user_name){
		return self::findOne(['user_name'=>$user_name]);
	}
	
	public function validatePassword($user_password){
		return $this->user_password === $user_password;
	}
}

