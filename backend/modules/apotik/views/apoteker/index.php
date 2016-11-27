<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\apotik\models\ApotekerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Apoteker';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="apoteker-index">

    <h1><i class="fa fa-fw fa-user-circle"></i><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('<i class="fa fa-fw fa-plus"> |</i> Create Apoteker', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_apoteker',
            'nama',
            'alamat',
            'no_telp',
            'jam_mulai',
            'jam_selesai',
            // 'id_admin',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
