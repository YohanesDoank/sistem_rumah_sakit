<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\ralan\models\Pasien */

$this->title = $model->id_pasien;
$this->params['breadcrumbs'][] = ['label' => 'Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pasien-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_pasien], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_pasien], [
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
