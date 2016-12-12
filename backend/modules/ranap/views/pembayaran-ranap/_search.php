<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\ranap\models\PembayaranRanapSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pembayaran-ranap-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kode_bayar_ranap') ?>

    <?= $form->field($model, 'kode_ranap') ?>

    <?= $form->field($model, 'tanggal_bayar') ?>

    <?= $form->field($model, 'hari_rawat') ?>

    <?= $form->field($model, 'biaya_obat') ?>

    <?php // echo $form->field($model, 'biaya_kamar') ?>

    <?php // echo $form->field($model, 'biaya_tindakan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
