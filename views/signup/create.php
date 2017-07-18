<?php

use yii\helpers\Html;
$this->title = 'Create Account';

/* @var $this yii\web\View */
/* @var $model app\models\Signup */
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="signup-create">
<div class="col-lg-5">

    <h3><strong><i><?= Html::encode($this->title) ?></i></strong></h3>


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
