<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\ralan\models\PendaftaranSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pendaftaran';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pendaftaran-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pendaftaran', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_pendaftaran',
            'id_pasien',
            'tanggal_pendaftaran',
            'id_poli',
            'id_dokter',

            'no_antrian',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
