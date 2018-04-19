<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GraduationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="graduation-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'sid') ?>

    <?= $form->field($model, 'gdestination') ?>

    <?= $form->field($model, 'sch_way') ?>

    <?= $form->field($model, 'work_way') ?>

    <?= $form->field($model, 'std_field') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>