<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;


$this->title = 'Login';
//$this->params['breadcrumbs'][] = $this->title;
?>

<div class="login-form">


    <h1 class="heading1"><?= Html::encode($this->title) ?></h1></br>

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

        <!-- <?= $form->field($model, 'rememberMe')->checkbox([
           // 'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
        ]) ?> -->

    
    
                <?= Html::submitButton('Login', ['class' => 'btn btn-success', 'name' => 'login-button']) ?>
				<h4><big><strong>Not a member?</strong></big> <i><strong>Then sign up for free!</strong></i></h4>
                <a href="/signup/create.php"></a>
				 

    <?php ActiveForm::end(); ?>
     </div>
     </div>
     