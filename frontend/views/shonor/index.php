<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ShonorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Shonors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shonor-index">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('新添奖项', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'snum',
            'stime',
            'sname',
            'sid',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>