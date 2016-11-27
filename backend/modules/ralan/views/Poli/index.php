<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\modules\ralan\models\Jadwal;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\ralan\models\PoliSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Poli yang Tersedia: ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="poli-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Poli', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_poli',
            'id_dokter',
            [
                'label' => 'Nama Dokter',
                'value' => 'dokters.nama_dokter',
            ],
            'nama_poli',
            'id_jadwal',
            [
                'label' => 'Hari',
                'value' => 'jadwals.hari',
            ],
            [
                'label' => 'Ruang',
                'value' => 'jadwals.ruang',
            ],
            [
                'label' => 'Sesi',
                'value' => 'jadwals.sesi',
            ],
            ['class' => 'yii\grid\ActionColumn', 'template' => '{view} {update} {delete} '],
        ],
    ]); ?>
</div>
