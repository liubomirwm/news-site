<?php

namespace app\controllers;

use app\models\ChangePasswordForm;
use app\models\CreateUserForm;
use app\models\UpdateUserForm;
use app\models\User;
use app\models\UserSearch;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends Controller
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
                        'roles' => ['viewAllUsers']
                    ],
                    [
                        'allow' => true,
                        'actions' => ['view'],
                        'roles' => ['updateUser']
                    ],
                    [
                        'allow' => true,
                        'actions' => ['create'],
                        'roles' => ['createUser'],
                    ],
                    [
                        'allow' => true,
                        'actions' => ['update'],
                        'roles' => ['updateUser']
                    ],
                    [
                        'allow' => true,
                        'actions' => ['change-password'],
                        'roles' => ['@']
                    ],
                    [
                        'allow' => true,
                        'actions' => ['delete'],
                        'roles' => ['deleteUser']
                    ],
                ],
            ],
        ];
    }

    /**
     * Lists all User models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UserSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single User model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new User model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new CreateUserForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $user = new User();
            $user->name = $model->name;
            $user->email = $model->email;
            $user->password = Yii::$app->security->generatePasswordHash($model->password);

            if (!$user->save(false)) {
                $user->password = '';
                Yii::$app->session->setFlash('error', 'There was an error while saving the user. Please try again.');
                return $this->render('create', ['model' => $model]);
            }

            $auth = Yii::$app->authManager;
            $authorRole = $auth->getRole('author');
            $auth->assign($authorRole, $user->id);
            Yii::$app->session->setFlash('success', 'User successfully created.');
            return $this->redirect(['user/view', 'id' => $user->id]);
        }
        return $this->render('create', ['model' => $model]);
    }

    /**
     * Updates an existing User model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $user = User::findOne(['id' => $id]);
        $model = new UpdateUserForm();
        if (!isset($user)) {
            throw new NotFoundHttpException('User does not exist');
        }
        $model->name = $user->name;
        $model->resume = $user->resume;

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $user->name = $model->name;
            $user->resume = $model->resume;
            if ($user->save()) {
                Yii::$app->session->addFlash('success', 'Profile edited successfully!');
                return $this->redirect(['view', 'id' => $user->id]);
            }

            Yii::$app->session->addFlash('success', 'There was an error while editing the profile.');
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function actionChangePassword()
    {
        $model = new ChangePasswordForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $user = User::findOne(['id' => Yii::$app->user->id]);
            $isValidPassword = Yii::$app->security->validatePassword($model->currentPassword, $user->password);
            if ($isValidPassword) {
                $user->password = Yii::$app->security->generatePasswordHash($model->newPassword);
                if ($user->save()) {
                    Yii::$app->session->addFlash('success', 'Password changed successfully!');
                    return $this->goHome();

                }

                Yii::$app->session->addFlash('error', 'There was a server error. Please try again.');
            } else {
                $model->addError('currentPassword', 'Wrong password!');
            }
        }
        return $this->render('change-password', ['model' => $model]);
    }

    /**
     * Deletes an existing User model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        if ($this->findModel($id)->delete()) {
            Yii::$app->user->logout();
            Yii::$app->session->addFlash('success', 'User successfully deleted');
        } else {
            Yii::$app->session->addFlash('error',
                'There was an error while deleting the user! You may try again.');
        }
        return $this->redirect(['index']);
    }

    /**
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
