<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\apotik\models\apoteker */

$this->title = 'Apoteker : '. $model->id_apoteker;
$this->params['breadcrumbs'][] = ['label' => 'Apoteker', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="apoteker-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <div class="row">
      <div class="col-sm-9">
        <?= Html::a('<i class="fa fa-fw fa-home"> |</i> Menu Utama Apoteker', ['index'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('<i class="fa fa-fw fa-plus-circle"> |</i> Tambah Apoteker Lagi', ['create'], ['class' => 'btn btn-primary']) ?>
      </div>
      <div class="col-sm-3">
        <?= Html::a('<i class="fa fa-fw fa-exchange"> | </i> Update', ['update', 'id' => $model->id_apoteker], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('<i class="fa fa-fw fa-trash"> |</i> Delete', ['delete', 'id' => $model->id_apoteker], [
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
            'id_apoteker',
            'nama',
            'alamat',
            'no_telp',
            'jam_mulai',
            'jam_selesai',
            'id_admin'
        ],
    ]) ?>

</div>
