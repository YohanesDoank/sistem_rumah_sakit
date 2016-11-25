<?php

namespace backend\modules\apotik\controllers;


use Yii;
use backend\modules\apotik\models\Model;
use backend\models\Pasien;
use backend\modules\apotik\models\Resep;
use backend\modules\apotik\models\ResepSearch;

use backend\modules\apotik\models\ResepObat;

use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use yii\web\Response;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
/**
 * ResepController implements the CRUD actions for Resep model.
 */
class ResepController extends Controller
{
    /**
     * @inheritdoc
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
        ];
    }

    /**
     * Lists all Resep models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ResepSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);


        return $this->render('index', [

            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
        
    /**
     * Displays a single Resep model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Resep model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Resep();
        $modelsJumlahObat = [new ResepObat];

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $modelsJumlahObat = Model::createMultiple(ResepObat::classname());
            Model::loadMultiple($modelsJumlahObat, Yii::$app->request->post());

            // validate all models
            $valid = $model->validate();
            $valid = Model::validateMultiple($modelsJumlahObat) && $valid;
            $cek;

            if ($valid) {
                $transaction = \Yii::$app->db->beginTransaction();
                try {
                    if ($flag = $model->save(false)) {
                        foreach ($modelsJumlahObat as $modelsObat) 
                        {
                            $modelsObat->id_resep = $model->nomor_resep;
                            $cek = $model->nomor_resep;
                            if (! ($flag = $modelsObat->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }
                    }

                    if ($flag) {
                        $transaction->commit();
                        return $this->redirect(['view', 'id' => $model->nomor_resep]);
                    }
                    else{
                        echo "pasti kamu bisa";
                    }
                } catch (Exception $e) {
                    $transaction->rollBack();
                }
            }
        }
        else{
            return $this->render('create', [
                'model' => $model,
                'modelsJumlahObat' => (empty($modelsJumlahObat)) ? [new ResepObat] : $modelsJumlahObat
            ]);
        }


    }

    /**
     * Updates an existing Resep model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $modelsJumlahObat = $this->getresepobat($model->nomor_resep);

        if ($model->load(Yii::$app->request->post())) {

            $oldIDs = ArrayHelper::map($modelsJumlahObat, 'nomor', 'nomor');
            $modelsJumlahObat = Model::createMultiple(ResepObat::classname());
            Model::loadMultiple($modelsJumlahObat, Yii::$app->request->post());
            $deletedIDs = array_diff($oldIDs, array_filter(ArrayHelper::map($modelsJumlahObat, 'nomor', 'nomor')));

            // validate all models
            $valid = $model->validate();
            $valid = Model::validateMultiple($modelsJumlahObat) && $valid;

            if ($valid) {
                $transaction = \Yii::$app->db->beginTransaction();
                try {
                    if ($flag = $model->save(false)) {
                        if (!empty($deletedIDs)) {
                            ResepObat::deleteAll(['nomor' => $deletedIDs]);
                        }
                        foreach ($modelsJumlahObat as $modelJumlahObat) {
                            $modelJumlahObat->id_resep = $model->nomor_resep;
                            if (! ($flag = $modelJumlahObat->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }
                    }
                    if ($flag) {
                        $transaction->commit();
                        return $this->redirect(['view', 'id' => $model->nomor_resep]);
                    }
                } catch (Exception $e) {
                    $transaction->rollBack();
                }
            }
        }

        return $this->render('update', [
            'model' => $model,
            'modelsJumlahObat' => (empty($modelsJumlahObat)) ? [new ResepObat] : $modelsJumlahObat
        ]);
    }

    /**
     * Deletes an existing Resep model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Resep model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Resep the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Resep::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function getresepobat($id)
    {
      $models = ResepObat::find()->where(['id_resep' => $id])->all();
      return $models;
    }

    public function gettitle($id)
    {
      return "Apotik - Resep";
    }

}
