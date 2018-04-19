<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Shonor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shonor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'snum')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stime')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sid')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('保存', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>