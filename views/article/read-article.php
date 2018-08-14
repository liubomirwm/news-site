<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 13-Aug-18
 * Time: 13:38
 */

/* @var $article \app\models\Article */

/* @var $latestArticles array */

use yii\bootstrap\Html;

?>

<?php
$css = <<<CSS
/*#read-article-header {text-align: center;}*/
CSS;

$this->registerCss($css);
?>

<div class="row">
    <div class="col-md-8 text-center">
        <h1 class="text-center"><?= $article->title ?></h1>
        <?= $article->text ?>
    </div>
    <div class="col-md-3 col-md-offset-1">
        <h2>Latest news</h2>
        <?php foreach ($latestArticles as $article): ?>
            <div style="margin-bottom: 60px;">
                <h4><?= Html::a($article->title, ['article/read-article', 'id' => $article->id],
                        ['style' => 'color: black;']) ?></h4>
                <p><?= $article->created_at ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</div>