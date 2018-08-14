<?php

use dosamigos\ckeditor\CKEditor;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CreateArticleForm */
/* @var $form yii\widgets\ActiveForm */
/* @var $categoriesDropdownData array */
?>

<div class="article-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['autofocus' => true, 'maxlength' => 120]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => 300]) ?>


    <?= $form->field($model, 'text')->widget(CKEditor::className()) ?>

    <?= $form->field($model, 'category_id')->dropDownList($categoriesDropdownData) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
