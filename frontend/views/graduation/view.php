<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Graduation */

$this->title = $model->sid;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Graduations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="graduation-view">

    <p>
        <?= Html::a(Yii::t('app', '更新'), ['update', 'id' => $model->sid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', '删除'), ['delete', 'id' => $model->sid], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', '删除？'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'sid',
            'gdestination',
            'sch_way',
            'work_way',
            'std_field',
        ],
    ]) ?>

</div>