<?php

use yii\helpers\Html;
use yii\widgets\ListView;


$this->context->layout='noteslayout';

$this->title = 'My Account';
?>
<div class="signup-index">

        <h3><strong><i><?= Html::encode($this->title) ?></i></strong></h3>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    
    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView'=>'viewaccount',
       
    ]); ?>
</div>
