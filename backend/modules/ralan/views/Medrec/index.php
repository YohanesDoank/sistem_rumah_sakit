<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\ralan\models\MedrecSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Medrec';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="medrec-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Medrec', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_mr',
            'id_dokter',
            'id_pasien',
            'no_pendaftaran',
            'diagnosa',
            // 'tindakan_dokter',
            // 'keluhan',
            // 'cektensi',
            // 'beratbadan',
            // 'tinggibadan',
            // 'rujukan',
            // 'suhubadan',
            // 'nadi',
            // 'riwayat_operasi',
            // 'alergi_obat',
            // 'status_mr',
            // 'konsultasi',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
