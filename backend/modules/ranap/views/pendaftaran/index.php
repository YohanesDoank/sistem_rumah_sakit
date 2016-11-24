<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\ranap\models\PendaftaranSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pendaftaran Rawat Inap';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pendaftaran-index">


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Pendaftaran Baru', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
