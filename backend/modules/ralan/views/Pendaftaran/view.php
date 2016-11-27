<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\ralan\models\Pendaftaran */

$this->title = $model->no_pendaftaran;
$this->params['breadcrumbs'][] = ['label' => 'Pendaftaran', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pendaftaran-view">

    <h1>No Pendaftaran : <?= Html::encode($this->title) ?></h1>

    <div class="row">
      <div class="col-sm-9">
        <?= Html::a('<i class="fa fa-fw fa-home"> |</i> Menu Utama Pendaftaran', ['index'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('<i class="fa fa-fw fa-plus-circle"> |</i> Tambah Pendaftaran Lagi', ['create'], ['class' => 'btn btn-primary']) ?>
      </div>
      <div class="col-sm-3">
        <?= Html::a('<i class="fa fa-fw fa-exchange"> | </i> Update', ['update', 'id' => $model->no_pendaftaran], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('<i class="fa fa-fw fa-trash"> |</i> Delete', ['delete', 'id' => $model->no_pendaftaran], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
      </div>
    </div>
    <br>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'no_pendaftaran',
            'id_pasien',
            'tanggal_pendaftaran',
            'id_poli',
            'id_dokter',
            'no_antrian',
        ],
    ]) ?>

</div>
