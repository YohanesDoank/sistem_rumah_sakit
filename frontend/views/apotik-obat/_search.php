<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\apotik\models\ApotikObatSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="apotik-obat-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'obat_id') ?>

    <?= $form->field($model, 'obat_nama') ?>

    <?= $form->field($model, 'obat_jenis') ?>

    <?= $form->field($model, 'obat_harga') ?>

    <?= $form->field($model, 'obat_pengirim') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
