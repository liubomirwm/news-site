<?php

use yii\db\Migration;

/**
 * Handles the creation of table `image`.
 */
class m180808_072103_create_image_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('image', [
            'id' => 'INT PRIMARY KEY AUTO_INCREMENT',
            'article_id' => $this->integer()->notNull()
        ]);

        $this->addForeignKey('fk_image_v_article', 'image', 'article_id',
            'article', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_image_v_article', 'image');
        $this->dropTable('image');
    }
}
