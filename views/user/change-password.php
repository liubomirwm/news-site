<?php

/**
 * Created by PhpStorm.
 * User: liubo
 * Date: 012, 12, Aug, 2018
 * Time: 19:25
 */

use yii\bootstrap\ActiveForm;
use yii\bootstrap\Html;

/* @var $model \app\models\ChangePasswordForm */
?>
<?php
$this->title = 'Change password';
$this->params['breadcrumb'][] = $this->title;
?>

<h1><?= $this->title ?></h1>

<div class="row">
    <div class="col-md-5">
        <?php $form = ActiveForm::begin(); ?>
        <?= $form->field($model, 'currentPassword')->passwordInput() ?>
        <?= $form->field($model, 'newPassword')->passwordInput() ?>
        <?= $form->field($model, 'repeatPassword')->passwordInput() ?>
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary btn-lg']) ?>
        <?php ActiveForm::end(); ?>
    </div>
</div>
