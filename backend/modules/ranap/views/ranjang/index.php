<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\ranap\models\RanjangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ranjang';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ranjang-index">

    <!-- <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p> -->
        <?= Html::a('Daftar Ranjang Baru', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_ranjang',
            'kode_kamar',
            'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
