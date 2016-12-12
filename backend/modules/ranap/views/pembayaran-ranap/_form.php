<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\ranap\models\PembayaranRanap */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pembayaran-ranap-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_bayar_ranap')->textInput() ?>

    <?= $form->field($model, 'kode_ranap')->textInput() ?>

    <?= $form->field($model, 'tanggal_bayar')->textInput() ?>

    <?= $form->field($model, 'hari_rawat')->textInput() ?>

    <?= $form->field($model, 'biaya_obat')->textInput() ?>

    <?= $form->field($model, 'biaya_kamar')->textInput() ?>

    <?= $form->field($model, 'biaya_tindakan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
