<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 08-Aug-18
 * Time: 13:23
 */

namespace app\models;


use yii\db\ActiveRecord;

class LoginForm extends ActiveRecord
{
    public $email;
    public $password;

    public static function tableName()
    {
        return 'user';
    }


    public function rules()
    {
        return [
            [['email', 'password'], 'required'],
            [['email'], 'string', 'max' => 60],
            [['email'], 'email'],
            [['password'], 'string', 'min' => 8, 'max' => 70],
        ];
    }

    public function attributeLabels()
    {
        return [
            'email' => 'Email',
            'password' => 'Password',
        ];
    }


}