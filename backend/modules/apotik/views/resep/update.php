<?php

use yii\helpers\Html;
use backend\modules\apotik\models\ResepObat;

/* @var $this yii\web\View */
/* @var $model backend\modules\apotik\models\Resep */

$this->title = 'Update Resep: ' . $model->nomor_resep;
$this->params['breadcrumbs'][] = ['label' => 'Resep', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nomor_resep, 'url' => ['view', 'nomor_resep' => $model->nomor_resep]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="resep-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'modelsJumlahObat' => (empty($modelsJumlahObat)) ? [new ResepObat] : $modelsJumlahObat
    ]) ?>

</div>
