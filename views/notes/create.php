<?php

use yii\helpers\Html;
$this->context->layout='noteslayout';

$this->title = 'Add Notes';

?>
<div class="notes-create">
<img src="<?= Yii::$app->request->baseUrl ?>/create.png" alt="Create" style="width:250px;height:250px; margin-left: 350px; margin-top: 300px;"></img>

<div class="col-lg-5">
    <h3><strong><i><?= Html::encode($this->title) ?></i></strong></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
