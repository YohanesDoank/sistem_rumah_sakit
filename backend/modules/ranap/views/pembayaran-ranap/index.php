<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\ranap\models\PembayaranRanapSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pembayaran Ranaps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pembayaran-ranap-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pembayaran Ranap', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_bayar_ranap',
            'kode_ranap',
            'tanggal_bayar',
            'hari_rawat',
            //'biaya_obat',
            'biaya_kamar',
            'biaya_tindakan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
