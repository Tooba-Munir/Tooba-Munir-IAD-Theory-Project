<?php

use yii\helpers\Html;
$this->context->layout='noteslayout';

/* @var $this yii\web\View */
/* @var $model app\models\Notes */

$this->title = 'Update';
//$this->params['breadcrumbs'][] = ['label' => 'My Notes', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->notes_id]];
//$this->params['breadcrumbs'][] = 'Update';
?>
<div class="notes-update">
<div class="col-lg-5">
    <h3><strong><i><?= Html::encode($this->title) ?></i></strong></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
</div>
