<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 08-Aug-18
 * Time: 14:18
 */

namespace app\models;


use yii\db\ActiveRecord;

class RegisterForm extends ActiveRecord
{
    public $name;
    public $email;
    public $password;
    public $repeatPassword;

    public static function tableName()
    {
        return 'user';
    }


    public function rules()
    {
        return [
            [['name', 'email', 'password', 'repeatPassword'], 'required'],
            [['name', 'email'], 'string', 'max' => 60],
            [['password', 'repeatPassword'], 'string', 'min' => 8, 'max' => 70],
            [['repeatPassword'], 'compare', 'compareAttribute' => 'password',
                'operator' => '===', 'skipOnEmpty' => false],
            [['email'], 'unique', 'message' => 'There is already a registered user with that email address!'],
            [['email'], 'email']
        ];
    }


}