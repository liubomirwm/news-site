<?php

use yii\db\Migration;

/**
 * Handles the dropping of table `article_user`.
 */
class m180808_081805_drop_article_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropTable('article_user');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->createTable('article_user', [
            'id' => 'INT PRIMARY KEY AUTO_INCREMENT',
            'article_id' => $this->integer()->notNull(),
            'user_id' => $this->integer()->notNull()
        ]);

        $this->addForeignKey('fk_article_user_v_user', 'article_user', 'article_id',
            'article', 'id', 'CASCADE');

        $this->addForeignKey('fk_article_user_v_article', 'article_user', 'user_id',
            'user', 'id', 'CASCADE');
    }
}
