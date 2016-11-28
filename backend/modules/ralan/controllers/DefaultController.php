<?php

namespace backend\modules\ralan\controllers;

use yii\web\Controller;

/**
 * Default controller for the `ralan` module
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
}

public function beforeAction($action)
    {
      if (!parent::beforeAction($action)) {
          return false;
      }

      if (\Yii::$app->user->identity->role !== "ralan") {
          throw new \yii\web\ForbiddenHttpException('ANDA BUKAN DI BAGIAN RAWAT JALAN !');
      }

      return true;
    }