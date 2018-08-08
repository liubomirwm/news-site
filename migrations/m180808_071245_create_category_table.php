<?php

use yii\db\Migration;

/**
 * Handles the creation of table `category`.
 */
class m180808_071245_create_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('category', [
            'id' => 'INT PRIMARY KEY AUTO_INCREMENT',
            'name' => $this->string(60)->notNull()->unique()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('category');
    }
}
