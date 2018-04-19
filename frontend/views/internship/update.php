<?php

/* @var $this yii\web\View */
/* @var $model app\models\Internship */

$this->title = Yii::t('app', 'Update Internship: {nameAttribute}', [
    'nameAttribute' => $model->sid,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Internships'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->sid, 'url' => ['view', 'id' => $model->sid]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="internship-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>