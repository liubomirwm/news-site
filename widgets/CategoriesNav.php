<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 23-Aug-18
 * Time: 15:26
 */

namespace app\widgets;


use app\models\Category;
use yii\bootstrap\Widget;
use yii\helpers\Url;

class CategoriesNav extends Widget
{
    public function run()
    {
        $categories = Category::find()->orderBy(['id' => SORT_ASC])->asArray()->all();
        $items = [];
        foreach ($categories as $category) {
            $items[] = [
                'label' => $category['name'],
                'url' => Url::to(['category/show-articles', 'categoryId' => $category['id']])
            ];
        }

        return $this->render('categories-nav', ['categories' => $items]);
    }
}