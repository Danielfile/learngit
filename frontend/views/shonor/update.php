<?php

/* @var $this yii\web\View */
/* @var $model app\models\Shonor */

$this->title = 'Update Shonor: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Shonors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="shonor-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>