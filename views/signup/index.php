<?php

use yii\helpers\Html;
use yii\grid\GridView;


$this->context->layout='noteslayout';

$this->title = 'My Account';
?>
<div class="signup-index">

        <h3><strong><i><?= Html::encode($this->title) ?></i></strong></h3>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            
            'firstName',
            'lastName',
            'username',
            'password',

            ['class' => 'yii\grid\ActionColumn','template' => '{update}',],

        ],
    ]); ?>
</div>
