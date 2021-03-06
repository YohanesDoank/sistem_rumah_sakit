<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\AdminLoginForm;
use backend\modules\apotik\models\Obat;
use backend\modules\apotik\models\Resep;
use backend\modules\apotik\models\Pembayaran;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
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
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
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
        if (\Yii::$app->user->identity->role === "apotik") {
            return $this->render('@backend/modules/apotik/views/default/index');
        }else if (\Yii::$app->user->identity->role === "ralan") {
            return $this->render('@backend/modules/ralan/views/default/index');
        }else if (\Yii::$app->user->identity->role === "ranap") {
            return $this->render('@backend/modules/ranap/views/default/index');
        }
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new AdminLoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
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

    // fungsi buat index apotik ---> start
    public function getjumlahresep()
    {
      $models = Resep::find()->count();
      return $models;
    }

    public function getjumlahobat()
    {
      $models = Obat::find()->count();
      return $models;
    }

    public function getpembayaranlunas()
    {
      $models = Pembayaran::find()->where(['status' => 'LUNAS'])->count();
      return $models;
    }


    public function getpembayaranbelumlunas()
    {
      $models = Pembayaran::find()->where(['status' => 'BELUM'])->count();
      return $models;
    }

    // <--- end for apotik
}
