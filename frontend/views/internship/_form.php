<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Internship */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="internship-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'sid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gintention')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'iten_sch')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'iten_busi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', '保存'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>