<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CompetitionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="competition-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'tid') ?>

    <?= $form->field($model, 'cname') ?>

    <?= $form->field($model, 'when') ?>

    <?= $form->field($model, 'prize') ?>

    <?php // echo $form->field($model, 'auth') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>