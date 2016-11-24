<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\ranap\models\RawatInapOld */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rawat-inap-old-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_pasien')->textInput() ?>

    <?= $form->field($model, 'kode_dokter')->textInput() ?>

    <?= $form->field($model, 'kode_ranjang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_pendaftaran')->textInput() ?>

    <?= $form->field($model, 'uang_dp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_keluar')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
