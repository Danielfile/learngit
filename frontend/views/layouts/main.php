<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;
use frontend\assets\AppAsset;
use common\models\User;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => '首页', 'url' => ['/site/index']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => '联系', 'url' => ['/site/contact']];
        $menuItems[] = ['label' => '登录', 'url' => ['/site/login']];
        $menuItems[] = ['label' => '注册', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => '关于', 'url' => ['/site/about']];
    } else {
        $menuItems[] = ['label' => '上传', 'url' => ['/upload/index']];
        $model = Yii::$app->user;
        $who = User::findOne(['id' => $model->id])->attributes;
        switch ($who['who']) {
            case 0:
                $menuItems[] = ['label' => '竞赛', 'url' => ['/competition/index']];
                $menuItems[] = ['label' => '科研', 'url' => ['/research/index']];
                $menuItems[] = ['label' => '论文', 'url' => ['/paper/index']];
                $menuItems[] = ['label' => '教师', 'url' => ['/teacher/index']];
                break;
            case 1:
                $menuItems[] = ['label' => '竞赛', 'url' => ['/competition/index']];
                $menuItems[] = ['label' => '科研', 'url' => ['/research/index']];
                $menuItems[] = ['label' => '论文', 'url' => ['/paper/index']];
                $menuItems[] = ['label' => '教师', 'url' => ['/teacher/index']];
                break;
            case 2:
                $menuItems[] = ['label' => '获奖', 'url' => ['/shonor/index']];
                $menuItems[] = ['label' => '实习', 'url' => ['/internship/index']];
                $menuItems[] = ['label' => '毕业', 'url' => ['/graduation/index']];
                $menuItems[] = ['label' => '学生', 'url' => ['/student/index']];
                break;
            default:
                $menuItems[] = '';
                break;
        }
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                '退出',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-left'],
        'items' => $menuItems,
    ]);

    NavBar::end();
    ?>

    <div class="container">
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left"> 版权所有 © 燕山大学电子商务系 <?= date('Y') ?></p>

        <p class="pull-right">冀ICP备05023975号-1    冀公网安备 13030202001682号</p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
