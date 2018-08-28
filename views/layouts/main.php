<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\assets\AppAsset;
use app\widgets\Alert;
use app\widgets\CategoriesNav;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);

    $currentUserRoles = Yii::$app->authManager->getRolesByUser(Yii::$app->user->id);
    if (isset($currentUserRoles['admin'])) {
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav'],
            'items' => [
                ['label' => 'Profile (' . Yii::$app->user->identity->name . ')', 'items' => [
                    ['label' => 'Manage users', 'url' => ['user/index']],
                    ['label' => 'Manage articles', 'url' => ['article/index']],
                    ['label' => 'Manage categories', 'url' => ['category/index']],
                    ['label' => 'View my profile', 'url' => ['user/view', 'id' => Yii::$app->user->id]],
                ]],

            ],
        ]);
    } else if (isset($currentUserRoles['author'])) {
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav'],
            'items' => [
                ['label' => 'Author actions', 'items' => [
                    ['label' => 'Add a new article', 'url' => ['article/create']],
                    ['label' => 'View my articles', 'url' => ['article/index']],
                    ['label' => 'View my profile', 'url' => ['user/view', 'id' => Yii::$app->user->id]],
                ]],

            ],
        ]);
    }

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav'],
        'items' => [
            Yii::$app->user->isGuest ? (
            ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->name . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            ),
            Yii::$app->user->isGuest ? ['label' => 'Register', 'url' => ['/site/register']] : ''
        ],
    ]);

    echo CategoriesNav::widget();

    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; The local news company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
