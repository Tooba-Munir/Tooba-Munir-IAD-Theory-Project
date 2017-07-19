<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Notes;


class NotesSearch extends Notes
{
   
    public function rules()
    {
        return [
            [['notes_id', 'user_Id'], 'integer'],
            [['title', 'type', 'note', 'date'], 'safe'],
        ];
    }

    
    public function scenarios()
    {
        
        return Model::scenarios();
    }

   
    public function search($params)
    {
        $query = Notes::find();

        
        $session=Yii::$app->user->id;
        $dataProvider = new ActiveDataProvider([
    'query' => Notes::find()->where(['user_Id'=>$session]),
]);


        $this->load($params);

        if (!$this->validate()) {
            
            return $dataProvider;
        }

        
        $query->andFilterWhere([
            'notes_id' => $this->notes_id,
            'user_Id' => $this->user_Id,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'note', $this->note])
            ->andFilterWhere(['like', 'date', $this->date]);

        return $dataProvider;
    }
}
