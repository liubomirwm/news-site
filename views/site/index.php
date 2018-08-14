<?php

/* @var $this yii\web\View */

/* @var $model array */

use yii\bootstrap\Html;

$this->title = 'Home | News site';
?>

<?php
$css = <<<CSS
h2, h3, h5, p {overflow-wrap: break-word; text-overflow: ellipsis;}
.news-article-preview {height: 250px;}
CSS;
$this->registerCss($css);
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>News site!</h1>

        <p class="lead">The latest news, as they happen</p>
    </div>

    <div class="body-content">
        <h1>Latest</h1>
        <div class="row">
            <?php foreach ($model as $article): ?>
                <div class=" col-md-4 news-article-preview">
                    <h3><?= $article->title ?></h3>
                    <h5><?= Html::a($article->category->name, ['category/show-articles',
                            'categoryId' => $article->category->id]) ?></h5>
                    <p><?= $article->description ?></p>
                    <p><?= Html::a('Read more...', ['article/read-article', 'id' => $article->id], ['class' => 'btn btn-default']) ?>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</div>
