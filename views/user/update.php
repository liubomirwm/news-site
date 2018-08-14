<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UpdateUserForm */

$this->title = 'Edit profile';
?>
<div class="row">

    <h1><?= Html::encode($this->title) ?></h1>
    <div class="col-md-5">
        <?php $form = ActiveForm::begin(); ?>
        <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
        <?= $form->field($model, 'resume')->textarea() ?>
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary btn-lg']) ?>
        <?php ActiveForm::end(); ?>
    </div>
</div>
