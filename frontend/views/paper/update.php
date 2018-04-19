<?php

/* @var $this yii\web\View */
/* @var $model app\models\Paper */

$this->title = Yii::t('app', 'Update Paper: {nameAttribute}', [
    'nameAttribute' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Papers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="paper-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>