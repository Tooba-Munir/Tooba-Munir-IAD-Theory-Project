<?php



use yii\helpers\Html;
use yii\bootstrap\ActiveForm;


$this->title = 'Login';
?>

<div class="login-form">


        <h2><strong><i><?= Html::encode($this->title) ?></i></strong></h2>


    <p><strong><i><big>Please fill out the following fields to login:</big></i></strong></p>

    <?php $form = ActiveForm::begin([
       'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
           'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>
        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'password')->passwordInput() ?>

       

    
    
                <?= Html::submitButton('Login', ['class' => 'btnstart', 'name' => 'login-button']) ?>
				<h4><big><strong>Not a member?</strong></big> <i><strong>Then sign up for free!</strong></i></h4>
                <a href="/signup/create.php"></a>
				 

    <?php ActiveForm::end(); ?>
    <img src="<?= Yii::$app->request->baseUrl ?>/loginUser.png" alt="loginUser" style="width:300px;height:300px; margin-left: 800px; margin-top: -50px;"></img>

     </div>
     </div>
     