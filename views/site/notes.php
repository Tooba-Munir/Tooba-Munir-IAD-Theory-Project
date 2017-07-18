<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = 'Notes';
/* @var $this yii\web\View */
/* @var $model app\models\Notes */
/* @var $form ActiveForm */
?>
<div class="notes">
<div class="col-lg-5">
 <h1 class="heading1"><?= Html::encode('Add Notes') ?></h1>
    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'title')->textInput(['autofocus' => true]) ?>
        <?= $form->field($model, 'type')->dropDownList(['a' => 'Note', 'b' => 'Link', 'c' => 'Quotes']); ?>
        <?= $form->field($model, 'note')->textarea(['rows' => 6])?>
        <?= $form->field($model, 'user_Id') ?>
        <?= $form->field($model, 'date')->textInput(['readonly' => true, 'value' => date('d-M-Y')])?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- notes -->
