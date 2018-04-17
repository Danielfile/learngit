<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = '登录';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login center-block">
    <div class="row center">
        <div class="col-lg-5 center">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput(['placeholder' => '请输入用户名','autofocus' => true])->label(false)  ?>

                <?= $form->field($model, 'password')->passwordInput(['placeholder' => '请输入密码'])->label(false) ?>

                <?= $form->field($model, 'rememberMe')->checkbox(['label' => '记住我'],true) ?>

                <div style="color:#999;margin:1em 0">
                    如果你忘记密码 <?= Html::a('重置', ['site/request-password-reset']) ?>.
                </div>

                <div class="form-group">
                    <?= Html::submitButton('登录', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
