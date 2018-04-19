<?php

/* @var $this yii\web\View */
/* @var $model app\models\Student */

$this->title = 'Update Student: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->sid, 'url' => ['view', 'id' => $model->sid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="student-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>