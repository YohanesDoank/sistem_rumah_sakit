<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\ranap\models\Pasien */

$this->title = 'Update Pasien: ' . $model->kode_pasien;
$this->params['breadcrumbs'][] = ['label' => 'Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_pasien, 'url' => ['view', 'id' => $model->kode_pasien]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pasien-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
