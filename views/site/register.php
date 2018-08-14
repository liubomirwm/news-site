<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 08-Aug-18
 * Time: 14:35
 */

/* @var \app\models\RegisterForm $model */

use yii\bootstrap\ActiveForm;
use yii\bootstrap\Html;

?>

<?php
$this->title = 'Register';
$this->params['breadcrumb'][] = $this->title;
?>

<h1>Register</h1>
<div class="row">
    <div class="col-md-5">
        <?php $form = ActiveForm::begin() ?>
        <?= $form->field($model, 'name')->textInput(['autofocus' => true]); ?>
        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'password')->passwordInput() ?>
        <?= $form->field($model, 'repeatPassword')->passwordInput() ?>
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary btn-lg',
            'style' => 'resize: both;']) ?>
        <?php ActiveForm::end(); ?>
    </div>
</div>