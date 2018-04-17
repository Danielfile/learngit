<?php

use yii\widgets\ActiveForm;

$this->title = '上传文件';
$this->params['breadcrumbs'][] = $this->title;

?>

<?php $form = ActiveForm::begin(['id' => 'index-form']); ?>

<?= $form->field($model, 'file')->fileInput()->label(false) ?>

<button>提交</button>

<?php ActiveForm::end() ?>
