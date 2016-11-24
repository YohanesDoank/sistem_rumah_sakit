<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\ralan\models\Pemeriksaan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pemeriksaan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_medrec')->textInput() ?>

    <?= $form->field($model, 'id_pasien')->textInput() ?>

    <?= $form->field($model, 'id_dokter')->textInput() ?>

    <?= $form->field($model, 'jenis_pemeriksaan')->textInput() ?>

    <?= $form->field($model, 'tanggal_pemeriksaan')->textInput() ?>

    <?= $form->field($model, 'total_biaya_pemeriksaan')->textInput() ?>

    <?= $form->field($model, 'status_pemeriksaan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
