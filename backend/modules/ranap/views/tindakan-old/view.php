<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\ranap\models\TindakanOld */

$this->title = $model->kode_tindakan;
$this->params['breadcrumbs'][] = ['label' => 'Tindakan Olds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tindakan-old-view">

    <h1><?= Html::encode($this->title) ?></h1>

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
