<?php

namespace app\models\base;

/**
 * This is the model class for table "article".
 *
 * @property int $id
 * @property string $title
 * @property string $text
 * @property string $created_at
 * @property string $updated_at
 * @property int $category_id
 * @property int $user_id
 *
 * @property Category $category
 * @property User $user
 * @property Image[] $images
 */
class BaseArticle extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'article';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'text', 'category_id', 'user_id'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['category_id', 'user_id'], 'integer'],
            [['title'], 'string', 'max' => 60],
            [['text'], 'string', 'max' => 6000],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'text' => 'Text',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'category_id' => 'Category ID',
            'user_id' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImages()
    {
        return $this->hasMany(Image::className(), ['article_id' => 'id']);
    }
}
