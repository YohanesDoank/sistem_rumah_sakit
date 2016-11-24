<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\ranap\models\TindakanOld */

$this->title = 'Update Tindakan Old: ' . $model->kode_tindakan;
$this->params['breadcrumbs'][] = ['label' => 'Tindakan Olds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_tindakan, 'url' => ['view', 'id' => $model->kode_tindakan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tindakan-old-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
