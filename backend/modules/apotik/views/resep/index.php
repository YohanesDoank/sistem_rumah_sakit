<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\apotik\models\ResepSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '[APOTIK]';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resep-index">
    <h1><i class='fa fa-list-alt'></i> Data Resep</h1> 
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('<i class="fa fa-fw fa-plus-circle"> | </i> Create Resep', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nomor_resep',
            'id_pasien',
            'id_dokter',
            'id_apoteker',
            'resep_tgl',
            'id_admin',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
