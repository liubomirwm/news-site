<?php

namespace app\models\base;

use app\models\Article;

/**
 * This is the model class for table "image".
 *
 * @property int $id
 * @property int $article_id
 * @property string $extension
 *
 * @property Article $article
 */
class BaseImage extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'image';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'article_id', 'extension'], 'required'],
            [['article_id'], 'integer'],
            [['id'], 'string', 'max' => 33],
            [['extension'], 'string', 'max' => 6],
            [['id'], 'unique'],
            [['article_id'], 'exist', 'skipOnError' => true, 'targetClass' => Article::className(), 'targetAttribute' => ['article_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'article_id' => 'Article ID',
            'extension' => 'Extension',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArticle()
    {
        return $this->hasOne(Article::className(), ['id' => 'article_id']);
    }
}
