<?php

namespace backend\modules\apotik\controllers;

use yii\web\Controller;
use backend\modules\apotik\models\Obat;
use backend\modules\apotik\models\Resep;
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
}