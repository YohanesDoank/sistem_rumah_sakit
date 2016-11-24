<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\ranap\models\TindakanOldSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'History Tindakan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tindakan-old-index">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <!--<p>
        <?= Html::a('Create Tindakan Old', ['create'], ['class' => 'btn btn-success']) ?>
    </p> -->
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
            // 'kode_penyakit',
            // 'biaya_tindakan',
            // 'keterangan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
