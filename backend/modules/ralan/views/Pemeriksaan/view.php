<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\ralan\models\Pemeriksaan */

$this->title = $model->id_pemeriksaan;
$this->params['breadcrumbs'][] = ['label' => 'Pemeriksaans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pemeriksaan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_pemeriksaan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_pemeriksaan], [
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
            'id_pemeriksaan',
            'id_medrec',
            'id_pasien',
            'id_dokter',
            'jenis_pemeriksaan',
            'tanggal_pemeriksaan',
            'total_biaya_pemeriksaan',
            'status_pemeriksaan',
        ],
    ]) ?>

</div>
