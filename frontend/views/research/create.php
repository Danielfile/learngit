<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Research */

$this->title = 'Create Research';
$this->params['breadcrumbs'][] = ['label' => 'Researches', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="research-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>