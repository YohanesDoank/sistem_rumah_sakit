<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\ralan\models\MedrecSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="medrec-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_mr') ?>

    <?= $form->field($model, 'id_dokter') ?>

    <?= $form->field($model, 'id_pasien') ?>

    <?= $form->field($model, 'no_pendaftaran') ?>

    <?= $form->field($model, 'diagnosa') ?>

    <?php // echo $form->field($model, 'tindakan_dokter') ?>

    <?php // echo $form->field($model, 'keluhan') ?>

    <?php // echo $form->field($model, 'cektensi') ?>

    <?php // echo $form->field($model, 'beratbadan') ?>

    <?php // echo $form->field($model, 'tinggibadan') ?>

    <?php // echo $form->field($model, 'rujukan') ?>

    <?php // echo $form->field($model, 'suhubadan') ?>

    <?php // echo $form->field($model, 'nadi') ?>

    <?php // echo $form->field($model, 'riwayat_operasi') ?>

    <?php // echo $form->field($model, 'alergi_obat') ?>

    <?php // echo $form->field($model, 'status_mr') ?>

    <?php // echo $form->field($model, 'konsultasi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
