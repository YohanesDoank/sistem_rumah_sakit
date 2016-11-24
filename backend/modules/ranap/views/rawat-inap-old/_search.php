<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\ranap\models\RawatInapOldSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rawat-inap-old-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kode_ranap') ?>

    <?= $form->field($model, 'kode_pasien') ?>

    <?= $form->field($model, 'kode_dokter') ?>

    <?= $form->field($model, 'kode_ranjang') ?>

    <?= $form->field($model, 'tanggal_pendaftaran') ?>

    <?php // echo $form->field($model, 'uang_dp') ?>

    <?php // echo $form->field($model, 'tanggal_keluar') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
