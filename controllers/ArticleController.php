<?php

namespace app\controllers;

use app\models\Article;
use app\models\ArticleSearch;
use app\models\Category;
use app\models\CreateArticleForm;
use app\models\UpdateArticleForm;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

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
        $categoriesDropdownData = $this->getCategoriesDropdownData();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $newArticle = new Article();
            $newArticle->title = $model->title;
            $newArticle->text = $model->text;
            $newArticle->description = $model->description;
            $newArticle->category_id = $model->category_id;
            $newArticle->user_id = Yii::$app->user->id;
            if ($newArticle->save()) {
                return $this->redirect(['view', 'id' => $newArticle->id]);
            }
        }

        return $this->render('create', [
            'model' => $model, 'categoriesDropdownData' => $categoriesDropdownData
        ]);
    }

    /**
     * Updates an existing Article model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $updateArticleFormModel = new UpdateArticleForm();
        $updateArticleFormModel->category_id = $model->category_id;
        $updateArticleFormModel->text = $model->text;
        $updateArticleFormModel->description = $model->description;
        $updateArticleFormModel->title = $model->title;

        $categoriesDropdownData = $this->getCategoriesDropdownData();

        if ($updateArticleFormModel->load(Yii::$app->request->post()) && $updateArticleFormModel->validate()) {
            $model->title = $updateArticleFormModel->title;
            $model->text = $updateArticleFormModel->text;
            $model->description = $updateArticleFormModel->description;
            $model->category_id = $updateArticleFormModel->category_id;
            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'Article updated successfully');
                return $this->redirect(['view', 'id' => $model->id]);
            }

            Yii::$app->session->setFlash('error', 'There was a problem while saving the update. Try again!');
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
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Article model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Article the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Article::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    protected function getCategoriesDropdownData()
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
}
