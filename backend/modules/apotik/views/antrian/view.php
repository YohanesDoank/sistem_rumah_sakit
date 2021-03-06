<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\apotik\models\Antrian */

$this->title = $model->nomor;
$this->params['breadcrumbs'][] = ['label' => 'Antrian', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="antrian-view">

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
            'nomor_resep',
            'tanggal_antrian',
        ],
    ]) ?>

</div>
