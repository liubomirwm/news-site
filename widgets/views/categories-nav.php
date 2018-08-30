<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 28-Aug-18
 * Time: 14:43
 */

/* @var $categories array */

?>
<div id="categories" class="nav-item pull-left" style="position:relative;">
    <div id="more-categories">
        <p>More <span class="caret"></span></p>
        <ul id="more-categories-list">
            <?php foreach ($categories as $category): ?>
                <li><a href="<?= $category['url'] ?>"><?= $category['label'] ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <ul id="categories-list">
        <?php foreach ($categories as $category): ?>
            <li><a href="<?= $category['url'] ?>"><?= $category['label'] ?></a></li>
        <?php endforeach; ?>
    </ul>
</div>