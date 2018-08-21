<?php

use yii\db\Migration;

/**
 * Class m180821_140102_change_max_in_text_column_of_article_to_30000
 */
class m180821_140102_change_max_in_text_column_of_article_to_30000 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('article', 'text', $this->string(30000)->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->alterColumn('article', 'text', $this->string(10000)->notNull());
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180821_140102_change_max_in_text_column_of_article_to_30000 cannot be reverted.\n";

        return false;
    }
    */
}
