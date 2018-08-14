<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var app\models\LoginForm $model */

use yii\bootstrap\ActiveForm;
use yii\bootstrap\Html;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<h1>Login</h1>
<div class="row">
    <div class="col-md-5">
        <?php $form = ActiveForm::begin(); ?>
        <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>
        <?= $form->field($model, 'password')->passwordInput() ?>
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary btn-lg']) ?>
        <?php ActiveForm::end(); ?>
    </div>
</div>