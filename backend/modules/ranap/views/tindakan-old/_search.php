<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\ranap\models\TindakanOldSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tindakan-old-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kode_tindakan') ?>

    <?= $form->field($model, 'nama_tindakan') ?>

    <?= $form->field($model, 'tanggal_tindakan') ?>

    <?= $form->field($model, 'kode_ranap') ?>

    <?= $form->field($model, 'kode_dokter') ?>

    <?php // echo $form->field($model, 'kode_penyakit') ?>

    <?php // echo $form->field($model, 'biaya_tindakan') ?>

    <?php // echo $form->field($model, 'keterangan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
