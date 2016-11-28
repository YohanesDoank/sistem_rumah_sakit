<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\apotik\models\Pembayaran */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pembayaran-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nomor_resep')->textInput() ?>

    <?= $form->field($model, 'tgl_pembayaran')->textInput() ?>

    <?= $form->field($model, 'total_pembayaran')->textInput() ?>

    <?= $form->field($model, 'metode_pembayaran')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
