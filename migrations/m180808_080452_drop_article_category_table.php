<?php

use yii\db\Migration;

/**
 * Handles the dropping of table `article_category`.
 */
class m180808_080452_drop_article_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropTable('article_category');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
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
}
