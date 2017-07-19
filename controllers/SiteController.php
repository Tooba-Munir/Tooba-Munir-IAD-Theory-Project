<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\Notes;
use app\models\Signup;
class SiteController extends Controller
{
    
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    
    public function actionIndex()
    {
        return $this->render('index');


}
    

    

    
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
          // return $this->goBack();
return $this->redirect(['/notes/create']);
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

   
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

   
    public function actionAbout()
    {
        return $this->render('about');
    }



public function actionNotes()
{
    $model = new Notes();

    if ($model->load(Yii::$app->request->post())) {
        if ($model->validate()) {
        
            return;
        }
    }

    return $this->render('notes', [
        'model' => $model,
    ]);
}



public function actionSignup()
{
    $model = new Signup();

    if ($model->load(Yii::$app->request->post())) {
        if ($model->validate()) {
            
            return;
        }
    }

    return $this->render('signup', [
        'model' => $model,
    ]);
}

public function actionUsers()
{
    $model=new Users();
    if($model->load(Yii::$app->request->post()) && $model->validate())
    {
        Yii::$app->session->setFlash('success','Login Successful!');
    }

    return $this->render('users',['model'=>$model]);



}


 public function actionAdmin()
    {
        return $this->render('admin');


}

}

