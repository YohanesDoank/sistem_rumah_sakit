<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\apotik\models\Pembayaran */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pembayaran', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pembayaran-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <div class="row">
      <div class="col-sm-9">
        <?= Html::a('<i class="fa fa-fw fa-home"> |</i> Menu Utama Pembayaran Resep', ['index'], ['class' => 'btn btn-success']) ?>
      </div>
      <div class="col-sm-3">
        <?= Html::a('<i class="fa fa-fw fa-exchange"> | </i> Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('<i class="fa fa-fw fa-trash"> |</i> Delete', ['delete', 'id' => $model->id], [
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
            'id',
            'status',
            'nomor_resep',
            'tgl_pembayaran',
            'total_pembayaran',
            'metode_pembayaran',
        ],
    ]) ?>

</div>
