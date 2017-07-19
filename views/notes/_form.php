<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\BackendUser;


$session=Yii::$app->user->id;

?>

<div class="notes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->dropDownList(['Note' => 'Note', 'Link' => 'Link', 'Quotes' => 'Quotes','E-mail'=>'E-mail','Contact'=>'Contact']); ?>

    <?= $form->field($model, 'note')->textarea(['rows' => 5.5]) ?>

    <?= $form->field($model, 'user_Id')->textInput(['readonly'=> true,'value'=>  $session]) ?>

    <?= $form->field($model, 'date')->textInput(['readonly' => true, 'value' => date('d-M-Y')]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btnstart' : 'btnstart']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
