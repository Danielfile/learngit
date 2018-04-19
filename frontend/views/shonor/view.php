<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Shonor */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Shonors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shonor-view">

    <p>
        <?= Html::a('更新', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '删除？',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'snum',
            'stime',
            'sname',
            'sid',
        ],
    ]) ?>

</div>