<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\ranap\models\JenisPenyakit */

$this->title = 'Update Jenis Penyakit: ' . $model->kode_penyakit;
$this->params['breadcrumbs'][] = ['label' => 'Jenis Penyakits', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_penyakit, 'url' => ['view', 'id' => $model->kode_penyakit]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jenis-penyakit-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
