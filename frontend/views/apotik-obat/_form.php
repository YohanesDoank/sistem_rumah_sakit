<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\apotik\models\ApotikObat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="apotik-obat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'obat_nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'obat_jenis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'obat_harga')->textInput() ?>

    <?= $form->field($model, 'obat_pengirim')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
