<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Internship */

$this->title = $model->sid;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Internships'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="internship-view">

    <p>
        <?= Html::a(Yii::t('app', '更新'), ['update', 'id' => $model->sid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', '删除'), ['delete', 'id' => $model->sid], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', '删除?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'sid',
            'gintention',
            'iten_sch',
            'iten_busi',
        ],
    ]) ?>

</div>