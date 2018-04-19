<?php

/* @var $this yii\web\View */
/* @var $model app\models\Graduation */

$this->title = Yii::t('app', 'Update Graduation: {nameAttribute}', [
    'nameAttribute' => $model->sid,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Graduations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->sid, 'url' => ['view', 'id' => $model->sid]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="graduation-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>