<?php

use yii\db\Migration;

/**
 * Handles the creation of table `article_category`.
 */
class m180808_072913_create_article_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('article_category', [
            'id' => $this->primaryKey(),
            'article_id' => $this->integer()->notNull(),
            'category_id' => $this->integer()->notNull()
        ]);

        $this->addForeignKey('fk_article_category_v_article', 'article_category', 'article_id',
            'article', 'id', 'CASCADE');

        $this->addForeignKey('fk_article_category_v_category', 'article_category',
            'article_id', 'category', 'id', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_article_category_v_article', 'article');
        $this->dropForeignKey('fk_article_category_v_category', 'article');
        $this->dropTable('article_category');
    }
}
