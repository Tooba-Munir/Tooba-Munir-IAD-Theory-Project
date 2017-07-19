<?php

namespace app\models;

use Yii;


class BackendUser extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
   
    public static function tableName()
    {
        return 'user';
    }

    
    public function rules()
    {
        return [
            [['firstName', 'lastName', 'username', 'password'], 'required'],
            [['firstName', 'lastName', 'username', 'password'], 'string', 'max' => 100],
            [['username'], 'unique'],
            [ 'unique'],
        ];
    }

    
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstName' => 'First Name',
            'lastName' => 'Last Name',
            'username' => 'Username',
            'password' => 'Password',
            
        ];
    }
    public static function findIdentity($id){
        return static::findOne($id);
    }
 
    public static function findIdentityByAccessToken($token, $type = null){
        throw new NotSupportedException();
    }
 
    public function getId(){
        return $this->id;
    }
 
    public function getAuthKey(){
        
        throw new NotSupportedException();
    }
 
    public function validateAuthKey($authKey){
    
    throw new NotSupportedException();
    }
    public static function findByUsername($username){
        return self::findOne(['username'=>$username]);
    }
 
    public function validatePassword($password){
        return $this->password === $password;
    }
}

