<?php

use yii\db\Migration;

/**
 * Class m180814_063410_change_max_length_of_title_column_in_article_to_120
 */
class m180814_063410_change_max_length_of_title_column_in_article_to_120 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('article', 'title', $this->string(120)->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->alterColumn('article', 'title', $this->string(60)->notNull());
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180814_063410_change_max_length_of_title_column_in_article_to_120 cannot be reverted.\n";

        return false;
    }
    */
}
