<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\ralan\models\Medrec */

$this->title = $model->id_mr;
$this->params['breadcrumbs'][] = ['label' => 'Medrecs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="medrec-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_mr], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_mr], [
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
            'id_mr',
            'id_dokter',
            'id_pasien',
            'no_pendaftaran',
            'diagnosa',
            'tindakan_dokter',
            'keluhan',
            'cektensi',
            'beratbadan',
            'tinggibadan',
            'rujukan',
            'suhubadan',
            'nadi',
            'riwayat_operasi',
            'alergi_obat',
            'status_mr',
            'konsultasi',
        ],
    ]) ?>

</div>
