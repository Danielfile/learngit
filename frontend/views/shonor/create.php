<?php

/* @var $this yii\web\View */
/* @var $model app\models\Shonor */

$this->title = 'Create Shonor';
$this->params['breadcrumbs'][] = ['label' => 'Shonors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shonor-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>