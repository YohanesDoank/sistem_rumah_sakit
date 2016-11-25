<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\apotik\models\ResepObat */

$this->title = 'Update Resep Obat: ' . $model->nomor;
$this->params['breadcrumbs'][] = ['label' => 'Resep Obats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nomor, 'url' => ['view', 'id' => $model->nomor]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="resep-obat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
