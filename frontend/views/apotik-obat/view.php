<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\apotik\models\ApotikObat */

$this->title = $model->obat_id;
$this->params['breadcrumbs'][] = ['label' => 'Apotik Obats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="apotik-obat-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->obat_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->obat_id], [
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
            'obat_id',
            'obat_nama',
            'obat_jenis',
            'obat_harga',
            'obat_pengirim',
        ],
    ]) ?>

</div>
