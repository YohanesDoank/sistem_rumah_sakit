<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\apotik\models\ObatSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="obat-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kode_obat') ?>

    <?= $form->field($model, 'nama_obat') ?>

    <?= $form->field($model, 'jenis_obat') ?>

    <?= $form->field($model, 'indikasi_obat') ?>

    <?= $form->field($model, 'kontraindikasi_obat') ?>

    <?php // echo $form->field($model, 'adverse_drug_reaction') ?>

    <?php // echo $form->field($model, 'cara_minum') ?>

    <?php // echo $form->field($model, 'harga_satuan') ?>

    <?php // echo $form->field($model, 'id_pemasok_obat') ?>

    <?= $form->field($model, 'id_admin') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
