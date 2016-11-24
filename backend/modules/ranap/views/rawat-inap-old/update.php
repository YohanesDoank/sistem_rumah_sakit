<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\ranap\models\RawatInapOld */

$this->title = 'Update Rawat Inap Old: ' . $model->kode_ranap;
$this->params['breadcrumbs'][] = ['label' => 'Rawat Inap Olds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_ranap, 'url' => ['view', 'id' => $model->kode_ranap]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rawat-inap-old-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
