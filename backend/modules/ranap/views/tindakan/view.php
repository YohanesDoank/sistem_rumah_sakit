<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\ranap\models\Tindakan */

$this->title = $model->kode_tindakan;
$this->params['breadcrumbs'][] = ['label' => 'Tindakans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tindakan-view">


    <p>
        <?= Html::a('Update', ['update', 'id' => $model->kode_tindakan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->kode_tindakan], [
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
            'kode_tindakan',
            'nama_tindakan',
            'tanggal_tindakan',
            'kode_ranap',
            'kode_dokter',
            'kode_penyakit',
            'biaya_tindakan',
            'keterangan',
        ],
    ]) ?>

</div>
