<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\ranap\models\Ranjang */

$this->title = $model->kode_ranjang;
$this->params['breadcrumbs'][] = ['label' => 'Ranjangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ranjang-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->kode_ranjang], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->kode_ranjang], [
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
            'kode_ranjang',
            'kode_kamar',
            'status',
        ],
    ]) ?>

</div>
