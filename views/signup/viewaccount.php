<?php
use yii\helpers\Html;
use yii\widgets\Pjax;




?>  
<?php Pjax::begin(); ?>


<h1 style="text-align: center; font-family: Trebuchet MS, sans-serif;"><strong>
<?=$model->username;?></strong></h1></br>


<label style="font-family: Trebuchet MS, sans-serif; font-size: 30px;">First Name:</label>
<i style="font-family: Trebuchet MS, sans-serif; font-size: 30px;">
<?=$model->firstName;?> </i></br>
<label  style="font-family: Trebuchet MS, sans-serif; font-size: 30px;" >Last Name:</label>

<i style="font-family: Trebuchet MS, sans-serif; font-size: 30px;">
<?=$model->lastName;?> </i></br>

<?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btnstartupdate']) ?>&nbsp;
</p>
<?php Pjax::end(); ?>

