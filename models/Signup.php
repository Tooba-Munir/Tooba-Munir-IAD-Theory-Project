<?php

namespace app\models;

use Yii;


class Signup extends \yii\db\ActiveRecord
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
}
