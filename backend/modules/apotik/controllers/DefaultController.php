<?php

namespace backend\modules\apotik\controllers;

use yii\web\Controller;
use backend\modules\apotik\models\Obat;
use backend\modules\apotik\models\Resep;
use backend\modules\apotik\models\Pembayaran;
/**
 * Default controller for the `apotik` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    
    public function actionIndex()
    {
        return $this->render('index');
    }

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

    public function beforeAction($action)
    {
      if (!parent::beforeAction($action)) {
          return false;
      }

      if (\Yii::$app->user->identity->role !== "apotik") {
          throw new \yii\web\ForbiddenHttpException('ANDA BUKAN DI BAGIAN APOTIK !');
      }

      return true;
    }
}
