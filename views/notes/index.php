<?php

use yii\helpers\Html;
use yii\grid\GridView;
$this->context->layout='noteslayout';



$this->title = 'My Notes';
?>
<div class="notes-index">

    <h3><strong><i><?= Html::encode($this->title) ?></i></strong></h3>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Notes', ['create'], ['class' => 'btnstart']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            
            'title',
            'type',
            'note',
            
             'date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
