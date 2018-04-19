<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Competition */

$this->title = 'Update Competition: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Competitions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="competition-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>