<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\apotik\models\ApotikObat */

$this->title = 'Update Apotik Obat: ' . $model->obat_id;
$this->params['breadcrumbs'][] = ['label' => 'Apotik Obats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->obat_id, 'url' => ['view', 'id' => $model->obat_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="apotik-obat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
