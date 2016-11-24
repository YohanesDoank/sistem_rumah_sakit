<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\ranap\models\DokterSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dokter-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kode_dokter') ?>

    <?= $form->field($model, 'nama_dokter') ?>

    <?= $form->field($model, 'alamat') ?>

    <?= $form->field($model, 'no_telp') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
