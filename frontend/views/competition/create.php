<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Competition */

$this->title = 'Create Competition';
$this->params['breadcrumbs'][] = ['label' => 'Competitions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="competition-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>