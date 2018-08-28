<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 13-Aug-18
 * Time: 17:17
 */

/* @var $articles array */

/* @var $pagination  \yii\data\Pagination */

use yii\bootstrap\Html;
use yii\widgets\LinkPager;

?>

<?php
$css = <<<CSS
#article-section {overflow-wrap: break-word;}
.news-thumbnail-image {width: 200px; height: 112px; object-fit: fill; margin-top: 20px; margin-bottom: 10px;}
CSS;
$this->registerCss($css);
?>

<?php if (!empty($articles)): ?>
    <h1><?= $articles[0]->category->name ?></h1>

    <?php foreach ($articles as $article): ?>
        <div class="row">
            <div class="col-md-3">
                <?php
                if (!empty($article->images)) {
                    $image = $article->images[0];
                    $path = "/news-site/web/images/" . $image->id . "." . $image->extension;
                    echo "<img src='$path' class='news-thumbnail-image'>";
                } else {
                    $path = "/news-site/web/images/news-default.jpeg";
                    echo "<img src='$path' class='news-thumbnail-image'>";
                }
                ?>
            </div>
            <div class="col-md-9 article-section">
                <h2><?= $article->title ?></h2>
                <p><?= $article->description ?></p>
                <p><?= Html::a('Read more...', ['article/read-article', 'id' => $article->id], ['class' => 'btn btn-default']) ?>
            </div>
        </div>
    <?php
    endforeach;
else:
    echo '<p>There are no articles in this category yet.</p>';
endif;
echo LinkPager::widget([
    'pagination' => $pagination
]);
?>

