<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\ranap\models\RawatInapOldSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'History Rawat Inap';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rawat-inap-old-index">

    <!-- <p>
        <?= Html::a('Rawat Inap Old', ['create'], ['class' => 'btn btn-success']) ?>
    </p> --!>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_ranap',
            'kode_pasien',
            'kode_dokter',
            'kode_ranjang',
            'tanggal_pendaftaran',
            'uang_dp',
            'tanggal_keluar',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
