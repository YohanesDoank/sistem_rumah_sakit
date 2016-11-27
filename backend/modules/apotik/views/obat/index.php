<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\apotik\models\ObatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Obat';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="obat-index">

    <h1><i class="fa fa-fw fa-medkit"></i><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('<i class="fa fa-fw fa-plus"> |</i> Create Obat', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'kode_obat',
            'nama_obat',
            'jenis_obat',
            // 'indikasi_obat:ntext',
            // 'kontraindikasi_obat:ntext',
            // 'adverse_drug_reaction',
            // 'cara_minum',
            'harga_satuan',
            'tgl_kadaluarsa',
            'stok',
            'id_pemasok_obat',
            // 'id_pemasok_obat',
            // 'id_admin',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
