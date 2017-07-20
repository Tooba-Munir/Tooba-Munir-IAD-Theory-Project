<?php
use yii\helpers\Html;
use yii\widgets\Pjax;




?>  
<?php Pjax::begin(); ?>


<h2 style="text-align: center;font-family: Trebuchet MS, sans-serif;"><strong>
<?=$model->date;?></strong></h2></br>


<label style="font-family: Trebuchet MS, sans-serif; font-size: 24px;">Title:</label>
<i style="font-family: Trebuchet MS, sans-serif; font-size: 24px;">
<?=$model->title;?> </i></br>
<label style="font-family: Trebuchet MS, sans-serif; font-size: 24px;">Type:</label>

<i style="font-family: Trebuchet MS, sans-serif; font-size: 24px;">
<?=$model->type;?> </i></br>
<label style="font-family: Trebuchet MS, sans-serif; font-size: 24px;">Note:</label>

<i style="font-family: Trebuchet MS, sans-serif; font-size: 24px;">
<?=$model->note;?></i></br>
<p>
<?= Html::a('Update', ['update', 'id' => $model->notes_id], ['class' => 'btnstartupdate']) ?>&nbsp;
<?= Html::a('Delete', ['delete', 'id' => $model->notes_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?></p>
<?php Pjax::end(); ?>

