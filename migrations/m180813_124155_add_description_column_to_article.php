<?php

use yii\db\Migration;

/**
 * Class m180813_124155_add_description_column_to_article
 */
class m180813_124155_add_description_column_to_article extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('article', 'description', $this->string(300));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('article', 'description');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180813_124155_add_description_column_to_article cannot be reverted.\n";

        return false;
    }
    */
}
