<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\ranap\models\RawatInapOld */

$this->title = $model->kode_ranap;
$this->params['breadcrumbs'][] = ['label' => 'Rawat Inap Olds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rawat-inap-old-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->kode_ranap], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->kode_ranap], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
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
            'tanggal_keluar',
        ],
    ]) ?>

</div>
