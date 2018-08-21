<?php

use yii\db\Migration;

/**
 * Class m180820_135627_add_extension_column_to_image
 */
class m180820_135627_add_extension_column_to_image extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('image', 'extension', $this->string(6)->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('image', 'extension');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180820_135627_add_extension_column_to_image cannot be reverted.\n";

        return false;
    }
    */
}
