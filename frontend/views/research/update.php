<?php

/* @var $this yii\web\View */
/* @var $model app\models\Research */

$this->title = 'Update Research: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Researches', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="research-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>