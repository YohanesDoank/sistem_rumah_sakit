<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\apotik\models\ResepObat */

$this->title = $model->nomor;
$this->params['breadcrumbs'][] = ['label' => 'Resep Obats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resep-obat-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->nomor], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->nomor], [
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
            'nomor',
            'id_resep',
            'kode_obat',
            'jumlah',
        ],
    ]) ?>

</div>
