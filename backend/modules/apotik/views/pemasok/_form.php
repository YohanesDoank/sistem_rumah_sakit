<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\apotik\models\Pemasok */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pemasok-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-sm-6">  
            <?= $form->field($model, 'id_pemasok')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-6">  
            <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">  
            <?= $form->field($model, 'no_telp')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-6">  
            <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">  
            <?= $form->field($model, 'id_admin')->textInput(['value' => Yii::$app->user->identity->id]) ?>
        </div>
    </div>    
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
