<?php

namespace backend\modules\ralan\controllers;

use Yii;
use backend\modules\ralan\models\Poli;
use backend\modules\ralan\models\PoliSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Json;
use backend\modules\ralan\models\Jadwal;
/**
 * PoliController implements the CRUD actions for Poli model.
 */
class PoliController extends Controller
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
     * Lists all Poli models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PoliSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Poli model.
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
     * Creates a new Poli model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Poli();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_poli]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Poli model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_poli]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Poli model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

// public function actionLists($id_dokter)
//     {
//         $countPoli = Poli::find()
//                 ->where(['id_dokter' => $id_dokter])
//                 ->count();
    
//         $polis = Poli::find()
//                 ->where(['id_dokter' => $id_dokter])
//                 ->all();
 
//         if($countPoli > 0 )
//         {
//             foreach($polis as $poli ){
//                 echo "<option value='".$poli->id_poli."'>".$poli->nama_poli."</option>";
//             }
//         }
//         else{
//             echo "<option> - </option>";
//         }
 
//     }

        public function actionGetIdDokter($poli_id)
    {
        $id_dokter=Poli::findOne($poli_id);
        echo Json::encode($id_dokter);

    }

    public function actionListJadwal($jenis_poli)
    {

        //Count
        $countjadwal = Jadwal::find()->where(['jenis_poli'=> $jenis_poli])->count();

        $jadwal = Jadwal::find()->where(['jenis_poli'=>$jenis_poli])->all();
        if($countjadwal >0){
            foreach($jadwal as $jadwal) echo "option value='".$jadwal->jenis_poli."'>".$jadwal->jadwal."</option>";
        }else{
            echo "<option-</option>";
        }
    }

    /**
     * Finds the Poli model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Poli the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Poli::findOne($id)) !== null) {
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

