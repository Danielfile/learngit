<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
    <h1>上传记录</h1>
    <ul>
        <?php foreach ($uploadlooks as $uploadlook): ?>
            <li>
                <?= Html::encode("{$uploadlook->id} ({$uploadlook->name})") ?>:
                <?= $uploadlook->filename ?>
            </li>
        <?php endforeach; ?>
    </ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>