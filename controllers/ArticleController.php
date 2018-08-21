<?php

namespace app\controllers;

use app\models\Article;
use app\models\ArticleSearch;
use app\models\Category;
use app\models\CreateArticleForm;
use app\models\Image;
use app\models\UpdateArticleForm;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;

/**
 * ArticleController implements the CRUD actions for Article model.
 */
class ArticleController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['index'],
                        'roles' => ['viewAllArticles']
                    ],
                    [
                        'allow' => true,
                        'actions' => ['view'],
                        'roles' => ['updateArticle']
                    ],
                    [
                        'allow' => true,
                        'actions' => ['read-article'],
                        'roles' => ['?', '@']
                    ],
                    [
                        'allow' => true,
                        'actions' => ['create'],
                        'roles' => ['createArticle']
                    ],
                    [
                        'allow' => true,
                        'actions' => ['update'],
                        'roles' => ['updateArticle']
                    ],
                    [
                        'allow' => true,
                        'actions' => ['delete'],
                        'roles' => ['deleteArticle']
                    ],
                ],
            ]
        ];
    }

    /**
     * Lists all Article models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ArticleSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Article model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
        $categoryName = $model->category->name;
        $userName = $model->user->name;
        return $this->render('view', [
            'model' => $model, 'categoryName' => $categoryName, 'userName' => $userName
        ]);
    }

    public function actionReadArticle($id)
    {
        $article = Article::findOne(['id' => $id]);
        $latestArticles = Article::find()->where(['not', ['id' => $id]])
            ->orderBy(['created_at' => SORT_DESC])->limit(10)->with('category')->all();
        if (!isset($article)) {
            throw new NotFoundHttpException('Article not found.');
        }

        return $this->render('read-article', ['article' => $article, 'latestArticles' => $latestArticles]);
    }

    /**
     * Creates a new Article model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new CreateArticleForm();

        if (!$model->load(Yii::$app->request->post())) {
            $categoriesDropdownData = $this->getCategoriesDropdownData();
            return $this->render('create', [
                'model' => $model, 'categoriesDropdownData' => $categoriesDropdownData
            ]);
        }

        $model->image = UploadedFile::getInstance($model, 'image');
        if (!$model->validate()) {
            $categoriesDropdownData = $this->getCategoriesDropdownData();
            return $this->render('create', [
                'model' => $model, 'categoriesDropdownData' => $categoriesDropdownData
            ]);
        }

        $newArticle = new Article();
        $newArticle->title = $model->title;
        $newArticle->text = $model->text;
        $newArticle->description = $model->description;
        $newArticle->category_id = $model->category_id;
        $newArticle->user_id = Yii::$app->user->id;
        if (!$newArticle->save()) {
            Yii::$app->session->setFlash('error', 'There was an error while saving the article. Try again.');
            $categoriesDropdownData = $this->getCategoriesDropdownData();
            return $this->render('create', [
                'model' => $model, 'categoriesDropdownData' => $categoriesDropdownData
            ]);
        }

        if (!isset($model->image)) {
            Yii::$app->session->setFlash('success', 'Article created successfully');
            return $this->redirect(['view', 'id' => $newArticle->id]);
        }
        $imageId = Yii::$app->security->generateRandomString();
        $savePath = Yii::getAlias("@webroot/images/" . $imageId . "." . $model->image->getExtension());
        if (!$model->image->saveAs($savePath)) {
            Yii::$app->session->setFlash('error', 'There was an error while saving the image to the new article.');
            Yii::$app->session->setFlash('success', 'Article created successfully');
            return $this->redirect(['view', 'id' => $newArticle->id]);
        }

        $newImage = new Image();
        $newImage->id = $imageId;
        $newImage->article_id = $newArticle->id;
        $newImage->extension = $model->image->getExtension();
        $newImage->save();
        Yii::$app->session->setFlash('success', 'Article created successfully');
        return $this->redirect(['view', 'id' => $newArticle->id]);
    }

    /**
     * Updates an existing Article model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public
    function actionUpdate($id)
    {
//        $model = $this->findModel($id);
        $model = Article::find()->where(['id' => $id])->with('images')->one();

        $updateArticleFormModel = new UpdateArticleForm();
        $updateArticleFormModel->category_id = $model->category_id;
        $updateArticleFormModel->text = $model->text;
        $updateArticleFormModel->description = $model->description;
        $updateArticleFormModel->title = $model->title;


        $categoriesDropdownData = $this->getCategoriesDropdownData();

        if ($updateArticleFormModel->load(Yii::$app->request->post())) {
            $updateArticleFormModel->image = UploadedFile::getInstance($updateArticleFormModel, 'image');
            if ($updateArticleFormModel->validate()) {
                $model->title = $updateArticleFormModel->title;
                $model->text = $updateArticleFormModel->text;
                $model->description = $updateArticleFormModel->description;
                $model->category_id = $updateArticleFormModel->category_id;
                if ($model->save()) {
                    if ($updateArticleFormModel->deleteImage) {
                        $image = $model->images[0];
                        $savePath = Yii::getAlias("@webroot/images/" . $image->id . "." . $image->extension);
                        unlink($savePath);
                        $image->delete();
                        Yii::$app->session->setFlash('success', 'Article updated successfully');
                        return $this->redirect(['view', 'id' => $model->id]);
                    }

                    if (!isset($updateArticleFormModel->image)) {
                        Yii::$app->session->setFlash('success', 'Article updated successfully');
                        return $this->redirect(['view', 'id' => $model->id]);
                    }

                    if ($model->images) {
                        $image = $model->images[0];
                        $savePath = Yii::getAlias("@webroot/images/" . $image->id . "." . $image->extension);
                        unlink($savePath);
                        $image->delete();
                    }

                    $newImageId = Yii::$app->security->generateRandomString();
                    $savePath = Yii::getAlias("@webroot/images/" . $newImageId . "."
                        . $updateArticleFormModel->image->getExtension());
                    $updateArticleFormModel->image->saveAs($savePath);
                    $image = new Image();
                    $image->id = $newImageId;
                    $image->article_id = $model->id;
                    $image->extension = $updateArticleFormModel->image->getExtension();
                    $image->save();

                    Yii::$app->session->setFlash('success', 'Article updated successfully');
                    return $this->redirect(['view', 'id' => $model->id]);
                }

                Yii::$app->session->setFlash('error', 'There was a problem while saving the update. Try again!');
            }
        }

        return $this->render('update', [
            'model' => $updateArticleFormModel, 'categoriesDropdownData' => $categoriesDropdownData
        ]);
    }

    /**
     * Deletes an existing Article model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public
    function actionDelete($id)
    {
        $article = Article::find()->where(['id' => $id])->with('images')->one();
        $images = $article->images;
        foreach ($images as $image) {
            $this->deleteImage($image);
            $image->delete();
        }

        $article->delete();
        Yii::$app->session->setFlash('success', 'Article deleted successfully');
        return $this->redirect(['index']);
    }

    /**
     * Finds the Article model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Article the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected
    function findModel($id)
    {
        if (($model = Article::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    protected
    function getCategoriesDropdownData()
    {
        $categories = Category::find()->all();
        $categoriesDropdownData = [];
        for ($i = 0, $count = count($categories); $i < $count; $i++) {
            $categoryName = $categories[$i]['attributes']['name'];
            $categoryId = $categories[$i]['attributes']['id'];
            $categoriesDropdownData[$categoryId] = $categoryName;
        }

        return $categoriesDropdownData;
    }

    protected function deleteImage($image)
    {
        $path = Yii::getAlias("@webroot/images/" . $image->id . "." . $image->extension);
        unlink($path);
    }
}
