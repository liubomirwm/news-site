<?php

use yii\db\Migration;

/**
 * Class m180810_144939_add_view_sll_articles_permission
 */
class m180810_144939_add_view_sll_articles_permission extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $auth = Yii::$app->authManager;
        $viewAllArticles = $auth->createPermission('viewAllArticles');
        $viewAllArticles->description = 'Can view the list of all articles which allows management';
        $auth->add($viewAllArticles);
        $auth->addChild($auth->getRole('admin'), $viewAllArticles);
        $auth->addChild($auth->getRole('author'), $viewAllArticles);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180810_144939_add_view_sll_articles_permission cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180810_144939_add_view_sll_articles_permission cannot be reverted.\n";

        return false;
    }
    */
}
