<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Research */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="research-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'from')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('保存', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>