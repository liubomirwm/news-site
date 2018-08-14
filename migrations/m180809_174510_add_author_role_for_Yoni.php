<?php

use yii\db\Migration;

/**
 * Class m180809_174510_add_author_role_for_Yoni
 */
class m180809_174510_add_author_role_for_Yoni extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $auth = Yii::$app->authManager;
        $auth->assign($auth->getRole('author'), 4);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180809_174510_add_author_role_for_Yoni cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180809_174510_add_author_role_for_Yoni cannot be reverted.\n";

        return false;
    }
    */
}
