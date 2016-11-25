<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\apotik\models\apoteker */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="apoteker-form">

    <?php $form = ActiveForm::begin(); ?>

    <!-- <?= $form->field($model, 'id_apoteker')->textInput() ?> -->
    <div class="row">
        <div class="col-sm-6">
            <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>  
        </div>
        <div class="col-sm-6">
            <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <?= $form->field($model, 'no_telp')->textInput() ?>
        </div>
        <div class="col-sm-6">
            <?= $form->field($model, 'jam_mulai')->textInput() ?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <?= $form->field($model, 'jam_selesai')->textInput() ?>        
        </div>
        <div class="col-sm-6">
            <?= $form->field($model, 'id_admin')->textInput(['value' => Yii::$app->user->identity->id]) ?>        
        </div>
    </div> 

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
