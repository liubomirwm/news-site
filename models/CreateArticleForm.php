<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 10-Aug-18
 * Time: 09:45
 */

namespace app\models;


use yii\db\ActiveRecord;

class CreateArticleForm extends ActiveRecord
{
    public $title;
    public $text;
    public $description;
    public $image;
    public $category_id;

    public static function tableName()
    {
        return 'article';
    }


    public function rules()
    {
        return [
            [['title', 'text', 'category_id'], 'required'],
            [['category_id'], 'integer'],
            [['title'], 'string', 'max' => 120],
            [['text'], 'string', 'max' => 30000],
            [['description'], 'string', 'max' => 300],
            [['image'], 'image'],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(),
                'targetAttribute' => ['category_id' => 'id'], 'message' => "You have selected a non-existing category"],
        ];
    }

    public function attributeLabels()
    {
        return [
            'title' => 'Title',
            'text' => 'Content',
            'category_id' => 'Category'
        ];
    }

    public function upload()
    {

    }
}