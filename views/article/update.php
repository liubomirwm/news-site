<?php

use dosamigos\ckeditor\CKEditor;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UpdateArticleForm */
/* @var $categoriesDropdownData */

$this->title = 'Update Article: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="article-update">

    <h1><?= Html::encode($this->title) ?></h1>

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

</div>
