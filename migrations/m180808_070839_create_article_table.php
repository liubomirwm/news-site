<?php

use yii\db\Migration;

/**
 * Handles the creation of table `article`.
 */
class m180808_070839_create_article_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('article', [
            'id' => 'INT PRIMARY KEY AUTO_INCREMENT',
            'title' => $this->string(60)->notNull(),
            'text' => $this->string(6000)->notNull(),
            'created_at' => 'TIMESTAMP NOT NULL DEFAULT NOW()',
            'updated_at' => 'TIMESTAMP NOT NULL DEFAULT NOW() ON UPDATE NOW()'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('article');
    }
}
