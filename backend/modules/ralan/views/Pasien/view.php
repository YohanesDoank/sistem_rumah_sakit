<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\ralan\models\Pasien */

$this->title = 'Pasien : '.$model->id_pasien;
$this->params['breadcrumbs'][] = ['label' => 'Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pasien-view">


    <h1><?= Html::encode($this->title) ?></h1>
    <div class="row">
      <div class="col-sm-9">
        <?= Html::a('<i class="fa fa-fw fa-home"> |</i> Menu Utama Pasien', ['index'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('<i class="fa fa-fw fa-plus-circle"> |</i> Tambah Pasien Lagi', ['create'], ['class' => 'btn btn-primary']) ?>
      </div>
      <div class="col-sm-3">
        <?= Html::a('<i class="fa fa-fw fa-exchange"> | </i> Update', ['update', 'id' => $model->id_pasien], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('<i class="fa fa-fw fa-trash"> |</i> Delete', ['delete', 'id' => $model->id_pasien], [
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
            'id_pasien',
            'nama',
            'tgl_lahir',
            'jenis_kelamin',
            'gol_dar',
            'no_telpon',
            'alamat',
            'pekerjaan',
            'tgl_daftar',
            'status',
            'id_admin',
        ],
    ]) ?>

</div>
