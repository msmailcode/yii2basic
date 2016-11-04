<?php
namespace app\modules\admin\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;
use app\modules\admin\models\LoginForm;

class IndexController extends Controller
{
  public $layout = 'main';
  
  public function behaviors()
  {
      return [
          'access' => [
              'class' => AccessControl::className(),
              //'only' => ['login', 'logout', 'signup'],//actionMethod
              'rules' => [
                  [
                      'allow' => true,
                      'actions' => ['login'],
                      'roles' => ['?'],
                  ],
                  [
                      'allow' => true,
                      'actions' => ['logout','index'],
                      'roles' => ['@'],
                  ],
              ],
              'denyCallback' => function ($rule, $action) {
                $this->redirect(array('/admin/index/login'));
            }
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
    return $this->render('index');
  }
  
  /**
  * Login action.
  *
  * @return string
  */
  public function actionLogin()
  {
    $model = new LoginForm();
    if ($model->load(Yii::$app->request->post()) && $model->login()) {
        return $this->render('index');
    }
    return $this->render('login', [
        'model' => $model,
    ]);
  }
  
  /**
   * Logout action.
   *
   * @return string
   */
  public function actionLogout()
  {
      Yii::$app->user->logout();

      return $this->goHome();
  }
}