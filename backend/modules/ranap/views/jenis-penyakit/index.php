<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\ranap\models\JenisPenyakitSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jenis Penyakits';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenis-penyakit-index">
        <?= Html::a('Tambah Jenis Penyakit', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_penyakit',
            'nama_penyakit',
            'keterangan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
