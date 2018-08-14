<?php
/**
 * Created by PhpStorm.
 * User: liubo
 * Date: 012, 12, Aug, 2018
 * Time: 22:15
 */

namespace app\models;


use yii\db\ActiveRecord;

class CreateUserForm extends ActiveRecord
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