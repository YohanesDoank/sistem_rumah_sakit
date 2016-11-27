<?php

namespace backend\modules\ralan\controllers;

use Yii;
use backend\modules\ralan\models\Pendaftaran;
use backend\modules\ralan\models\PendaftaranSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\JSON;
/**
 * PendaftaranController implements the CRUD actions for Pendaftaran model.
 */
class PendaftaranController extends Controller
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
     * Lists all Pendaftaran models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PendaftaranSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Pendaftaran model.
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
     * Creates a new Pendaftaran model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Pendaftaran();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->no_pendaftaran]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Pendaftaran model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->no_pendaftaran]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Pendaftaran model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    public function actionGetNoAntrian($poli_id)
    {
        $no_antrian=Pendaftaran::find()->where(['id_poli' => $poli_id])->count();
        return $no_antrian;

    }

    public function actionGetId_pasien($no_reg)
    {
        $id_pasien=Pendaftaran::findOne($no_reg);
        echo Json::encode($id_pasien);

    }
    public function actionGetId_dokter($no_reg)
    {
        $id_dokter=Pendaftaran::findOne($no_reg);
        echo Json::encode($id_dokter);

    }

    public function actionGetId_poli($no_reg)
    {
        $id_poli=Pendaftaran::findOne($no_reg);
        echo Json::encode($id_poli);

    }
    /**
     * Finds the Pendaftaran model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Pendaftaran the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Pendaftaran::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
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
}
