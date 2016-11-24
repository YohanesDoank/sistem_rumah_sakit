<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\ranap\models\Ranjang */

$this->title = 'Update Ranjang: ' . $model->kode_ranjang;
$this->params['breadcrumbs'][] = ['label' => 'Ranjangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_ranjang, 'url' => ['view', 'id' => $model->kode_ranjang]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ranjang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
