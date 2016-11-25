<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\apotik\models\Obat */

$this->title = 'Update Obat: ' . $model->kode_obat;
$this->params['breadcrumbs'][] = ['label' => 'Obats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_obat, 'url' => ['view', 'id' => $model->kode_obat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="obat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
