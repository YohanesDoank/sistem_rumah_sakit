<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\apotik\models\ResepObat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="resep-obat-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
		<div class="col-sm-6">
    		<?= $form->field($model, 'id_resep')->textInput() ?>
		</div>
		<div class="col-sm-6">
    		<?= $form->field($model, 'kode_obat')->textInput(['maxlength' => true]) ?>
		</div>
		<div class="col-sm-6">
    		<?= $form->field($model, 'jumlah')->textInput() ?>
		</div>
    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
