<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m180808_071709_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user', [
            'id' => 'INT PRIMARY KEY AUTO_INCREMENT',
            'name' => $this->string(60)->notNull(),
            'email' => $this->string(60)->notNull()->unique(),
            'password' => $this->string(70)->notNull(),
            'resume' => $this->string(170),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('user');
    }
}
