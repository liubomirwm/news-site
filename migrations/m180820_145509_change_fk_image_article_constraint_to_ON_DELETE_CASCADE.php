<?php

use yii\db\Migration;

/**
 * Class m180820_145509_change_fk_image_article_constraint_to_ON_DELETE_CASCADE
 */
class m180820_145509_change_fk_image_article_constraint_to_ON_DELETE_CASCADE extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropForeignKey('fk_image_v_article', 'image');
        $this->addForeignKey('fk_image_v_article', 'image', 'article_id'
            , 'article', 'id', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_image_v_article', 'image');
        $this->addForeignKey('fk_image_v_article', 'image', 'article_id'
            , 'article', 'id');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180820_145509_change_fk_image_article_constraint_to_ON_DELETE_CASCADE cannot be reverted.\n";

        return false;
    }
    */
}
