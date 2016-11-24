<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\ranap\models\Pendaftaran */

$this->title = $model->kode_ranap;
$this->params['breadcrumbs'][] = ['label' => 'Pendaftarans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pendaftaran-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Ubah', ['update', 'id' => $model->kode_ranap], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Hapus / Pasien Keluar', ['delete', 'id' => $model->kode_ranap], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Apakah anda yakin akan menghapus / Pasien akan keluar ?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'kode_ranap',
            'kode_pasien',
            'kode_dokter',
            'kode_ranjang',
            'tanggal_pendaftaran',
            'uang_dp',
        ],
    ]) ?>

</div>
