<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Article */
/* @var $categoryName string */
/* @var $userName string */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?php
$css = <<<CSS
table.detail-view {
    table-layout: fixed;
}

table.detail-view td {
    max-width: 100%;
    overflow-wrap: break-word;        
}
CSS;
$this->registerCss($css);
?>
<div class="article-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?php $currentUserRoles = Yii::$app->authManager->getRolesByUser(Yii::$app->user->id); ?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            ['attribute' => 'id', 'visible' => isset($currentUserRoles['admin'])],
            'title',
            'description',
            ['attribute' => 'text', 'label' => 'Content', 'format' => 'Html', 'value' => Html::a('Read article', Url::toRoute(['article/read-article',
                'id' => $model->id], true))],
            'created_at',
            'updated_at',
            ['attribute' => 'category_id', 'label' => 'Category', 'value' => $categoryName],
            ['attribute' => 'user_id', 'label' => 'author', 'format' => 'Html', 'value' => Html::a($userName, Url::toRoute(['user/view',
                'id' => $model->user_id])), 'visible' => isset($currentUserRoles['admin'])]
        ],
    ]) ?>

</div>
