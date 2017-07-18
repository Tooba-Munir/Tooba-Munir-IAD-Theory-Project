<?php

use yii\helpers\Html;
$this->context->layout='noteslayout';

$this->title = 'Add Notes';
/* @var $this yii\web\View */
/* @var $model app\models\Notes */
//$this->params['breadcrumbs'][] = ['label' => 'My Notes', 'url' => ['index']];

//$this->title = 'Add Notes';
//$this->params['breadcrumbs'][] = ['label' => 'Notes', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="notes-create">
<div class="col-lg-5">
    <h3><strong><i><?= Html::encode($this->title) ?></i></strong></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
