<?php

namespace app\models;

use Yii;


class Notes extends \yii\db\ActiveRecord
{
   
    public static function tableName()
    {
        return 'notes';
    }

    
    public function rules()
    {
        return [
            [['title', 'type', 'note', 'user_Id', 'date'], 'required'],
            [['user_Id'], 'integer'],
            [['title', 'type', 'date'], 'string', 'max' => 100],
            [['note'], 'string', 'max' => 500],
            [['user_Id'], 'exist', 'skipOnError' => true, 'targetClass' => BackendUser::className(), 'targetAttribute' => ['user_Id' => 'id']],
        ];
    }

    
    public function attributeLabels()
    {
        return [
            'notes_id' => 'Notes ID',
            'title' => 'Title',
            'type' => 'Type',
            'note' => 'Note',
            'user_Id' => 'User  ID',
            'date' => 'Date',
        ];
    }

    
    public function getUser()
    {
        return $this->hasOne(BackendUser::className(), ['id' => 'user_Id']);
    }
}
