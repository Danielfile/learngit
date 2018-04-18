<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UploadSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '上传';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="upload-index">

    <p>
        <?= Html::a('上传新文件', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'uid',
            'name',
            'filename',
            'remarks',
            'upload_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>