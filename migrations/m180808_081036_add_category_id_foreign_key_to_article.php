<?php

use yii\db\Migration;

/**
 * Class m180808_081036_add_category_id_foreign_key_to_article
 */
class m180808_081036_add_category_id_foreign_key_to_article extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('article', 'category_id', $this->integer()->notNull());
        $this->addForeignKey('fk_article_category', 'article', 'category_id',
            'category', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_article_category', 'article');
        $this->dropColumn('article', 'category_id');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180808_081036_add_category_id_foreign_key_to_article cannot be reverted.\n";

        return false;
    }
    */
}
