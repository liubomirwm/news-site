<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php
    $currentUserRoles = Yii::$app->authManager->getRolesByUser(Yii::$app->user->id);
    if (isset($currentUserRoles['admin']) || $model->id === Yii::$app->user->id): //if user is admin or is viewing his own profile
        ?>
        <p>
            <?= Html::a('Update profile', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Change password', ['user/change-password'], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->id], ['class' => 'btn btn-danger',
                'data' => ['confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',],]) ?>
        </p>
    <?php endif; ?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            ['attribute' => 'id', 'visible' => isset($currentUserRoles['admin'])],
            'name',
            ['attribute' => 'email', 'format' => 'email', 'visible' => !(Yii::$app->user->isGuest)],
            'resume',
        ],
    ]) ?>

</div>
