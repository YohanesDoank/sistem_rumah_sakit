<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\ranap\models\TindakanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Tindakan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tindakan-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Tambah Tindakan Baru', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_tindakan',
            'nama_tindakan',
            'tanggal_tindakan',
            'kode_ranap',
            'kode_dokter',
            'kode_penyakit',
            'biaya_tindakan',
            'keterangan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
