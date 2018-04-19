<?php


/* @var $this yii\web\View */
/* @var $model app\models\Internship */

$this->title = Yii::t('app', 'Create Internship');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Internships'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="internship-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>