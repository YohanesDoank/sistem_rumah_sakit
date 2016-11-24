<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\ranap\models\Tindakan */

$this->title = 'Update Tindakan: ' . $model->kode_tindakan;
$this->params['breadcrumbs'][] = ['label' => 'Tindakans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_tindakan, 'url' => ['view', 'id' => $model->kode_tindakan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tindakan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
