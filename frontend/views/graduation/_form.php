<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Graduation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="graduation-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'sid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gdestination')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sch_way')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'work_way')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'std_field')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', '保存'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>