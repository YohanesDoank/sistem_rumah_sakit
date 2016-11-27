<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\ralan\models\Dokter */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dokter-form">

    <div class="box-body">
                <div class="dokter-form">
                    <?php $form = ActiveForm::begin(); ?>
                    <!-- <?= $form->field($model, 'id_dokter')->textInput() ?> -->
                    <div class="row">
                        <div class="col-sm-6">
                            <?= $form->field($model, 'nama_dokter')->textInput(['maxlength' => true, 'placeholder' => 'Isi dengan nama Dokter'])->label('<i class="fa fa-fw fa-user-circle"></i> Nama Dokter: ') ?>  
                        </div>
    
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <?= $form->field($model, 'spesialis')->textInput(['maxlength' => true, 'placeholder' => 'Isi dengan spesialis Dokter'])->label('<i class="fa fa-fw fa-address-card"></i> Spesialis : ')  ?>
                        </div>
                        <div class="col-sm-6">
                            <?= $form->field($model, 'posisi')->dropdownList(['ralan' => 'Rawat Jalan', 'ranap' => 'Rawat Inap'])->label('<i class="fa fa-user-md"></i> Posisi (Rawat Jalan atau Rawat Inap) : ') ?>
                        </div>
                    </div>
                    

                    <div class="form-group">
                        <?= Html::submitButton($model->isNewRecord ? 'Input Dokter Baru' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>

                </div>
            </div>

</div>
