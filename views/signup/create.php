<?php

use yii\helpers\Html;
$this->title = 'Create Account';

/* @var $this yii\web\View */
/* @var $model app\models\Signup */
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="signup-create">
<img src="<?= Yii::$app->request->baseUrl ?>/addUser.png" alt="addUser" style="width:250px;height:250px; margin-left: 350px; margin-top: 300px;"></img>

<div class="col-lg-5">

    <h3><strong><i><?= Html::encode($this->title) ?></i></strong></h3>


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
