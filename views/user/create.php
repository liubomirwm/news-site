<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = 'Create User';
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="col-md-5">
        <?php $form = ActiveForm::begin() ?>
        <?= $form->field($model, 'name')->textInput(['autofocus' => true]); ?>
        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'password')->passwordInput() ?>
        <?= $form->field($model, 'repeatPassword')->passwordInput() ?>
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary btn-lg']) ?>
        <?php ActiveForm::end(); ?>
    </div>
</div>
