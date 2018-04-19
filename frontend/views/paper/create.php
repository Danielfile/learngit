<?php


/* @var $this yii\web\View */
/* @var $model app\models\Paper */

$this->title = Yii::t('app', 'Create Paper');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Papers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="paper-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>