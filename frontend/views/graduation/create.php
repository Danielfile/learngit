<?php

/* @var $this yii\web\View */
/* @var $model app\models\Graduation */

$this->title = Yii::t('app', 'Create Graduation');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Graduations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="graduation-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>