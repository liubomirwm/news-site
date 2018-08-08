<?php

use yii\db\Migration;

/**
 * Class m180808_082111_add_user_id_foreign_key_to_article
 */
class m180808_082111_add_user_id_foreign_key_to_article extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('article', 'user_id', $this->integer()->notNull());
        $this->addForeignKey('fk_article_user', 'article', 'user_id', 'user', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_article_user', 'article');
        $this->dropColumn('article', 'user_id');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180808_082111_add_user_id_foreign_key_to_article cannot be reverted.\n";

        return false;
    }
    */
}
