<?php

namespace app\controllers;

use app\models\Article;
use app\models\LoginForm;
use app\models\LoginForm2;
use app\models\RegisterForm;
use app\models\TestModel;
use app\models\User;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\Response;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $lastSixArticles = Article::find()->orderBy(['created_at' => SORT_DESC])->limit(6)->with('category')->all();
        return $this->render('index', ['model' => $lastSixArticles]);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $user = User::findOne(['email' => $model->email]);
            if ($user && Yii::$app->security->validatePassword($model->password, $user->password)) {
                Yii::$app->user->login($user);
                return $this->goBack();
            }

            $model->password = '';
            $model->addErrors(['email' => 'Email or password is wrong', 'password' => 'Email or password is wrong']);
        }
        return $this->render('login', ['model' => $model]);
    }

    public function actionRegister()
    {
        $model = new RegisterForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $user = new User();
            $user->name = $model->name;
            $user->email = $model->email;
            $user->password = Yii::$app->security->generatePasswordHash($model->password);

            if (!$user->save(false)) {
                $user->password = '';
                Yii::$app->session->setFlash('error', 'There was an error while registering. Please try again.');
                return $this->render('register', ['model' => $model]);
            }

            $auth = Yii::$app->authManager;
            $authorRole = $auth->getRole('author');
            $auth->assign($authorRole, $user->id);
            Yii::$app->session->setFlash('success', 'You have successfully registered and may now login.');
            return $this->goHome();
        }
        return $this->render('register', ['model' => $model]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
