<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\ralan\models\PemeriksaanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pemeriksaan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_pemeriksaan') ?>

    <?= $form->field($model, 'id_medrec') ?>

    <?= $form->field($model, 'id_pasien') ?>

    <?= $form->field($model, 'id_dokter') ?>

    <?= $form->field($model, 'jenis_pemeriksaan') ?>

    <?php // echo $form->field($model, 'tanggal_pemeriksaan') ?>

    <?php // echo $form->field($model, 'total_biaya_pemeriksaan') ?>

    <?php // echo $form->field($model, 'status_pemeriksaan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
