<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\ranap\models\DokterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dokters';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dokter-index">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Dokter', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_dokter',
            'nama_dokter',
            'alamat',
            'no_telp',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
