<?php

use yii\db\Migration;

/**
 * Class m180814_134747_add_default_to_resume_column_of_user
 */
class m180814_134747_add_default_to_resume_column_of_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('user', 'resume', $this->string(170)->defaultValue(''));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->alterColumn('user', 'resume', $this->string(170));
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180814_134747_add_default_to_resume_column_of_user cannot be reverted.\n";

        return false;
    }
    */
}
