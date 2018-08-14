<?php
/**
 * Created by PhpStorm.
 * User: liubo
 * Date: 012, 12, Aug, 2018
 * Time: 19:18
 */

namespace app\models;


use yii\base\Model;

class ChangePasswordForm extends Model
{
    public $currentPassword;
    public $newPassword;
    public $repeatPassword;

    public function rules()
    {
        return [
            [['currentPassword', 'currentPassword', 'repeatPassword'], 'required'],
            [['currentPassword', 'newPassword', 'repeatPassword'], 'string', 'min' => 8],
            [['repeatPassword'], 'compare', 'compareAttribute' => 'newPassword']
        ];
    }


}