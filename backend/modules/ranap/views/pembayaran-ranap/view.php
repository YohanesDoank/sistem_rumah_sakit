<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\ranap\models\PembayaranRanap */

$this->title = $model->kode_bayar_ranap;
$this->params['breadcrumbs'][] = ['label' => 'Pembayaran Ranaps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pembayaran-ranap-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->kode_bayar_ranap], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->kode_bayar_ranap], [
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
            'kode_bayar_ranap',
            'kode_ranap',
            'tanggal_bayar',
            'hari_rawat',
            'biaya_obat',
            'biaya_kamar',
            'biaya_tindakan',
        ],
    ]) ?>

</div>
