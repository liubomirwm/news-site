<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 09-Aug-18
 * Time: 14:26
 */

namespace app\rbac;


use app\models\Article;
use yii\rbac\Item;
use yii\rbac\Rule;

class OwnArticleRule extends Rule
{
    public $name = 'isOwnArticle';

    /**
     * Executes the rule.
     *
     * @param string|int $user the user ID. This should be either an integer or a string representing
     * the unique identifier of a user. See [[\yii\web\User::id]].
     * @param Item $item the role or permission that this rule is associated with
     * @param array $params parameters passed to [[CheckAccessInterface::checkAccess()]].
     * @return bool a value indicating whether the rule permits the auth item it is associated with.
     */
    public function execute($user, $item, $params)
    {
        $article = Article::find()->where(['id' => \Yii::$app->request->get('id')])->one();
        if (isset($article)) {
            return $user === $article->user_id;
        }

        return false;
    }
}