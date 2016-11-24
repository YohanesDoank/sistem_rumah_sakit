<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\ralan\models\PemeriksaanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pemeriksaans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pemeriksaan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pemeriksaan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_pemeriksaan',
            'id_medrec',
            'id_pasien',
            'id_dokter',
            'jenis_pemeriksaan',
            // 'tanggal_pemeriksaan',
            // 'total_biaya_pemeriksaan',
            // 'status_pemeriksaan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
