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
#article-section {overflow-wrap: break-word; width: 100%;}
CSS;
$this->registerCss($css);
?>

<h1><?= $articles[0]->category->name ?></h1>

<?php foreach ($articles as $article): ?>
    <div class="row">
        <div id="article-section">
            <h2><?= $article->title ?></h2>
            <p><?= $article->description ?></p>
            <p><?= Html::a('Read more...', ['article/read-article', 'id' => $article->id], ['class' => 'btn btn-default']) ?>
        </div>
    </div>
<?php
endforeach;
echo LinkPager::widget([
    'pagination' => $pagination
]);
?>

