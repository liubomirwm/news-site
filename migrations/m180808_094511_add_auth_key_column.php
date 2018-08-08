<?php

use yii\db\Migration;

/**
 * Class m180808_094511_add_auth_key_column
 */
class m180808_094511_add_auth_key_column extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('user', 'auth_key', $this->string(70)->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('user', 'auth_key');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180808_094511_add_auth_key_column cannot be reverted.\n";

        return false;
    }
    */
}
