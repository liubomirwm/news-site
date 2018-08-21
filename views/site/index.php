<?php

/* @var $this yii\web\View */

/* @var $model array */

use yii\bootstrap\Html;

$this->title = 'Home | News site';
?>

<?php
$css = <<<CSS
h1, h2, h3, h5, p {overflow-wrap: break-word; text-overflow: ellipsis; text-align: center;}
h3 {height: 22.31%;}
h5 {height: 4.34%;}
p {height: 18.11%;}
.news-article-preview {height: 355px; text-align: center; margin-top: 20px; overflow: hidden; text-overflow: ellipsis;}
.news-thumbnail-image {width: 200px; height: 112px; object-fit: cover;}
CSS;
$this->registerCss($css);
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>News site!</h1>

        <p class="lead">The latest news, as they happen</p>
    </div>

    <div class="body-content">
        <h1>Last 6 news</h1>
        <div class="row">
            <?php foreach ($model as $article): ?>
                <div class=" col-md-4 news-article-preview">
                    <?php if (!empty($article->images)): ?>
                        <?php
                        $path = './images/' . $article->images[0]->id . '.'
                            . $article->images[0]->extension;
                        echo "<img src='$path' class='news-thumbnail-image'>";
                        ?>
                    <?php else: ?>
                        <?php echo "<img src='./images/news-default.jpeg' class='news-thumbnail-image'>" ?>
                    <?php endif; ?>

                    <h3><?= $article->title ?></h3>
                    <h5><?= Html::a($article->category->name, ['category/show-articles',
                            'categoryId' => $article->category->id]) ?></h5>
                    <?php if (!empty($article->description)): ?>
                        <p><?= $article->description ?></p>
                    <?php endif; ?>
                    <p><?= Html::a('Read more...', ['article/read-article', 'id' => $article->id], ['class' => 'btn btn-default']) ?>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</div>
