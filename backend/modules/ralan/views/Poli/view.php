<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\ralan\models\Poli */

$this->title = $model->id_poli;
$this->params['breadcrumbs'][] = ['label' => 'Poli', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="poli-view">

    <h1>ID Poli : <?= Html::encode($this->title) ?></h1>

    <div class="row">
      <div class="col-sm-9">
        <?= Html::a('<i class="fa fa-fw fa-home"> |</i> Menu Utama Poli', ['index'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('<i class="fa fa-fw fa-plus-circle"> |</i> Tambah Poli Lagi', ['create'], ['class' => 'btn btn-primary']) ?>
      </div>
      <div class="col-sm-3">
        <?= Html::a('<i class="fa fa-fw fa-exchange"> | </i> Update', ['update', 'id' => $model->id_poli], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('<i class="fa fa-fw fa-trash"> |</i> Delete', ['delete', 'id' => $model->id_poli], [
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
            'id_poli',
            'id_dokter',
            'nama_poli',
            'id_jadwal',
            
        ],
    ]) ?>

</div>
