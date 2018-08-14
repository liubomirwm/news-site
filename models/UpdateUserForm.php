<?php
/**
 * Created by PhpStorm.
 * User: liubo
 * Date: 012, 12, Aug, 2018
 * Time: 20:14
 */

namespace app\models;


use yii\base\Model;

class UpdateUserForm extends Model
{
    public $name;
    public $resume;

    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 60],
            ['resume', 'string', 'max' => 170]
        ];
    }


}