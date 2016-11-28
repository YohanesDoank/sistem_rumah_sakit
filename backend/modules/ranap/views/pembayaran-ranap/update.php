<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\ranap\models\PembayaranRanap */

$this->title = 'Update Pembayaran Ranap: ' . $model->kode_bayar_ranap;
$this->params['breadcrumbs'][] = ['label' => 'Pembayaran Ranaps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_bayar_ranap, 'url' => ['view', 'id' => $model->kode_bayar_ranap]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pembayaran-ranap-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
