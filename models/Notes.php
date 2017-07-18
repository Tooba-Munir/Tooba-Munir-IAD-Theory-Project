<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "notes".
 *
 * @property integer $notes_id
 * @property string $title
 * @property string $type
 * @property string $note
 * @property integer $user_Id
 * @property string $date
 *
 * @property User $user
 */
class Notes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'notes';
    }

    /**
     * @inheritdoc
     */
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

    /**
     * @inheritdoc
     */
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(BackendUser::className(), ['id' => 'user_Id']);
    }
}
