<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
$this->context->layout='noteslayout';


$this->title = $model->title;
?>
<div class="notes-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->notes_id], ['class' => 'btnstartupdate']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->notes_id], [
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
        
            'title',
            'type',
            'note',
            'user_Id',
            'date',
        ],
    ]) ?>

</div>
