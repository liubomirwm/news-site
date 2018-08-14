<?php

use app\rbac\OwnArticleRule;
use app\rbac\OwnProfileRule;
use yii\db\Migration;

/**
 * Class m180809_111207_init_rbac
 */
class m180809_111207_init_rbac extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $auth = Yii::$app->authManager;

        $createArticle = $auth->createPermission('createArticle');
        $createArticle->description = 'Can create new article';
        $auth->add($createArticle);

        $updateArticle = $auth->createPermission('updateArticle');
        $updateArticle->description = 'Can update an existing article';
        $auth->add($updateArticle);

        $ownArticleRule = new OwnArticleRule();
        $auth->add($ownArticleRule);

        $updateOwnArticle = $auth->createPermission('updateOwnArticle');
        $updateOwnArticle->description = 'Can update own article';
        $updateOwnArticle->ruleName = $ownArticleRule->name;
        $auth->add($updateOwnArticle);
        $auth->addChild($updateOwnArticle, $updateArticle);


        $deleteArticle = $auth->createPermission('deleteArticle');
        $deleteArticle->description = 'Can delete an existing article';
        $auth->add($deleteArticle);

        $deleteOwnArticle = $auth->createPermission('deleteOwnArticle');
        $deleteOwnArticle->description = 'Can delete own article';
        $deleteOwnArticle->ruleName = $ownArticleRule->name;
        $auth->add($deleteOwnArticle);
        $auth->addChild($deleteOwnArticle, $deleteArticle);

        $createCategory = $auth->createPermission('createCategory');
        $createCategory->description = 'Can create new category';
        $auth->add($createCategory);

        $updateCategory = $auth->createPermission('updateCategory');
        $updateCategory->description = 'Can update an existing category';
        $auth->add($updateCategory);

        $deleteCategory = $auth->createPermission('deleteCategory');
        $deleteCategory->description = 'Can delete an existing category';
        $auth->add($deleteCategory);

        $viewAllUsers = $auth->createPermission('viewAllUsers');
        $viewAllUsers->description = 'Can view all users';
        $auth->add($viewAllUsers);

        $createUser = $auth->createPermission('createUser');
        $createUser->description = 'Can create a new user';
        $auth->add($createUser);

        $updateUser = $auth->createPermission('updateUser');
        $updateUser->description = 'Can update an existing user';
        $auth->add($updateUser);

        $ownProfileRule = new OwnProfileRule();
        $auth->add($ownProfileRule);

        $updateOwnProfile = $auth->createPermission('updateOwnProfile');
        $updateOwnProfile->description = 'Can update their own profile';
        $updateOwnProfile->ruleName = $ownProfileRule->name;
        $auth->add($updateOwnProfile);

        $auth->addChild($updateOwnProfile, $updateUser);

        $deleteUser = $auth->createPermission('deleteUser');
        $deleteUser->description = 'Can delete an existing user';
        $auth->add($deleteUser);

        $deleteOwnProfile = $auth->createPermission('deleteOwnProfile');
        $deleteOwnProfile->description = 'Can delete their own profile';
        $deleteOwnProfile->ruleName = $ownProfileRule->name;
        $auth->add($deleteOwnProfile);

        $author = $auth->createRole('author');
        $auth->add($author);
        $auth->addChild($author, $createArticle);
        $auth->addChild($author, $updateOwnArticle);
        $auth->addChild($author, $deleteOwnArticle);
        $auth->addChild($author, $updateOwnProfile);
        $auth->addChild($author, $deleteOwnProfile);

        $admin = $auth->createRole('admin');
        $auth->add($admin);
        $auth->addChild($admin, $createArticle);
        $auth->addChild($admin, $updateArticle);
        $auth->addChild($admin, $deleteArticle);
        $auth->addChild($admin, $createCategory);
        $auth->addChild($admin, $updateCategory);
        $auth->addChild($admin, $deleteCategory);
        $auth->addChild($admin, $viewAllUsers);
        $auth->addChild($admin, $createUser);
        $auth->addChild($admin, $updateUser);
        $auth->addChild($admin, $deleteUser);


        $auth->assign($auth->getRole('admin'), 3);
        $auth->assign($auth->getRole('author'), 5);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180809_111207_init_rbac cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180809_111207_init_rbac cannot be reverted.\n";

        return false;
    }
    */
}
