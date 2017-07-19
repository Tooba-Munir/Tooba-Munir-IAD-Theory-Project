<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Signup;


class SignupSearch extends Signup
{
    
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['firstName', 'lastName', 'username', 'password'], 'safe'],
        ];
    }

   
    public function scenarios()
    {
        
        return Model::scenarios();
    }

    
    public function search($params)
    {
        $query = Signup::find();

        $session=Yii::$app->user->id;


        $dataProvider = new ActiveDataProvider([
        
                'query' => Signup::find()->where(['id'=>$session]),

        ]);

        $this->load($params);

        if (!$this->validate()) {
            
            return $dataProvider;
        }

        
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'firstName', $this->firstName])
            ->andFilterWhere(['like', 'lastName', $this->lastName])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'password', $this->password]);

        return $dataProvider;
    }
}
