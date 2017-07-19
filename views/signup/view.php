<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

$this->context->layout='noteslayout';


$this->title = 'Update or Delete Account';
?>
<div class="signup-view">

            <h3><strong><i><?= Html::encode($this->title) ?></i></strong></h3>


    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btnstartupdate']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'firstName',
            'lastName',
            'username',
            'password',
        ],
    ]) ?>

</div>
