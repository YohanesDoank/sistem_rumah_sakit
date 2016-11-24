<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\ranap\models\Dokter */

$this->title = 'Update Dokter: ' . $model->kode_dokter;
$this->params['breadcrumbs'][] = ['label' => 'Dokters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_dokter, 'url' => ['view', 'id' => $model->kode_dokter]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dokter-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
