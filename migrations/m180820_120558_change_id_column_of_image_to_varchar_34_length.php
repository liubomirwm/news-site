<?php

use yii\db\Migration;

/**
 * Class m180820_120558_change_id_column_of_image_to_varchar_34_length
 */
class m180820_120558_change_id_column_of_image_to_varchar_34_length extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('image', 'id', $this->string(33));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->alterColumn('image', 'id', 'INT PRIMARY KEY');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180820_120558_change_id_column_of_image_to_varchar_34_length cannot be reverted.\n";

        return false;
    }
    */
}
