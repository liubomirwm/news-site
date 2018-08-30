<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\assets\AppAsset;
use app\widgets\Alert;
use app\widgets\CategoriesNav;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;

AppAsset::register($this);
$this->registerJsFile('@web/javascript/handle-resize-categories-navbar.js',
    ['depends' => [yii\web\JqueryAsset::className()]])
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
    <nav>
        <div class="container-fluid">
            <button id="navbar-toggle-button">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggle-icon"></span>
            </button>
            <div id="header-logo" class="nav-item pull-left">
                <a href="<?= Url::to(['/']) ?>">News Site</a>
            </div>
            <div id="navbar-dropdown-menu">
                <?php $currentUserRoles = Yii::$app->authManager->getRolesByUser(Yii::$app->user->id); ?>
                <div id="user-actions" class="nav-item pull-left">
                    <?php if (!Yii::$app->user->isGuest): ?>
                    <p>Manage <span class="caret"></span></p>
                    <ul id="user-actions-list">
                        <?php if (isset($currentUserRoles['admin'])): ?>
                            <li><a href="<?= Url::to(['user/index'], true) ?>">Manage users</a></li>
                            <li><a href="<?= Url::to(['article/index'], true) ?>">Manage articles</a></li>
                            <li><a href="<?= Url::to(['category/index'], true) ?>">Manage categories</a></li>
                            <li><a href="<?= Url::to(['user/index'], true) ?>">View my profile</a></li>
                        <?php elseif (isset($currentUserRoles['author'])): ?>
                            <li><a href="<?= Url::to(['article/create'], true) ?>">Add a new article</a></li>
                            <li><a href="<?= Url::to(['article/index'], true) ?>">View my articles</a></li>
                            <li><a href="<?= Url::to(['user/view', 'id' => Yii::$app->user->id],
                                    true) ?>">View my profile</a></li>
                        <?php endif; ?>
                        <?php endif; ?>
                    </ul>
                </div>
                <?= CategoriesNav::widget(); ?>
                <div id="login-logout" class="nav-item pull-right">
                    <!--                Login/Logout-->
                    <?php if (!Yii::$app->user->isGuest): ?>
                        <?= Html::beginForm(['site/logout']); ?>
                        <?= Html::submitButton("Logout (" . Yii::$app->user->identity->name . ")",
                            ['class' => 'btn btn-link logout', 'style' => 'text-decoration: none']) ?>
                        <?= Html::endForm(); ?>
                    <?php else: ?>
                        <?= Html::a("Login", ['site/login'], ['style' => 'padding-right: 20px;']) ?>
                        <?= Html::a("Register", ['site/register']) ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <?= Breadcrumbs::widget(['links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],]) ?>
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
