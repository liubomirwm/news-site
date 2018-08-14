<?php

namespace app\models\base;

use app\models\Article;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $resume
 * @property string $auth_key
 *
 * @property Article[] $articles
 */
class BaseUser extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'password', 'auth_key'], 'required'],
            [['name', 'email'], 'string', 'max' => 60],
            [['password', 'auth_key'], 'string', 'max' => 70],
            [['resume'], 'string', 'max' => 170],
            [['email'], 'unique'],
            [['email'], 'email']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'password' => 'Password',
            'resume' => 'Resume',
            'auth_key' => 'Auth Key',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArticles()
    {
        return $this->hasMany(Article::className(), ['user_id' => 'id']);
    }
}
