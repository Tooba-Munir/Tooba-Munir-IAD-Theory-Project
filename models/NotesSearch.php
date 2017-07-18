<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Notes;

/**
 * NotesSearch represents the model behind the search form about `app\models\Notes`.
 */
class NotesSearch extends Notes
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['notes_id', 'user_Id'], 'integer'],
            [['title', 'type', 'note', 'date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Notes::find();

        // add conditions that should always apply here

        // $dataProvider = new ActiveDataProvider([
        //     'query' => $query,
        // ]);
        $session=Yii::$app->user->id;
        $dataProvider = new ActiveDataProvider([
    'query' => Notes::find()->where(['user_Id'=>$session]),
]);


        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
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
