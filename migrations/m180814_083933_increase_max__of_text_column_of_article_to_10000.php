<?php

use yii\db\Migration;

/**
 * Class m180814_083933_increase_max__of_text_column_of_article_to_10000
 */
class m180814_083933_increase_max__of_text_column_of_article_to_10000 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('article', 'text', $this->string(10000)->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->alterColumn('article', 'text', $this->string(6000)->notNull());
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180814_083933_increase_max__of_text_column_of_article_to_10000 cannot be reverted.\n";

        return false;
    }
    */
}
