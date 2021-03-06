<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\apotik\models\PemasokSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pemasok';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pemasok-index">

    <h1><i class="fa fa-fw fa-user-circle-o"></i><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('<i class="fa fa-fw fa-plus"> |</i> Create Pemasok', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_pemasok',
            'nama',
            'no_telp',
            'alamat',
            // 'id_admin',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
