<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\apotik\models\AntrianSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Antrians';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="antrian-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Antrian', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nomor',
            'nomor_resep',
            'tanggal_antrian',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>