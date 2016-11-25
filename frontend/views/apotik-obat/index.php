<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\apotik\models\ApotikObatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Apotik Obats';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="apotik-obat-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Apotik Obat', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'obat_id',
            'obat_nama',
            'obat_jenis',
            'obat_harga',
            'obat_pengirim',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
