<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\ralan\models\Pasien */
/* @var $form yii\widgets\ActiveForm */
?>
<?php $date=date('Y-m-d');?>
<div class="box-body">
                <div class="pasien-form">
                    <?php $form = ActiveForm::begin(); ?>
                    <!-- <?= $form->field($model, 'id_pasien')->textInput() ?> -->
                    <div class="row">
                        <div class="col-sm-6">
                            <?= $form->field($model, 'nama')->textInput(['maxlength' => true, 'placeholder' => 'Isi dengan nama Pasien'])->label('<i class="fa fa-fw fa-user-circle"></i> Nama Pasien: ') ?>  
                        </div>
                         <div class="col-sm-4">
                            <?= $form->field($model, 'tgl_daftar')->textInput(['type'=>'date', 'value'=>$date, 'placeholder' => 'Isi Tanggal Daftar Pasien'])->label('<i class="fa fa-fw fa-calendar"></i> Tanggal Daftar : ')  ?>
                        </div>
    
                    </div>
                    
                    <div class="row">
                        
                        <div class="col-sm-4">
                            
                            <?= $form->field($model, 'tgl_lahir')->textInput(['type'=>'date', 'value'=>$date, 'placeholder' => 'Isi Tanggal Lahir Pasien'])->label('<i class="fa fa-fw fa-calendar"></i> Tanggal Lahir : ')  ?>
                        </div>
                        <div class="col-sm-3">
                            <?= $form->field($model, 'jenis_kelamin')->textInput(['maxlength' => true, 'placeholder' => 'Isi dengan jenis kelamin Pasien'])->label('<i class="fa fa-user-circle"></i> Jenis Kelamin : ')  ?>
                        </div>
                        <div class="col-sm-3">
                            <?= $form->field($model, 'gol_dar')->textInput(['maxlength' => true, 'placeholder' => 'Isi dengan golongan darah Pasien'])->label('<i class="fa fa-heart"></i> Golongan Darah : ') ?>
                        </div>

                    </div>
                    <div class="row">
                        
                        <div class="col-sm-5">
                            <?= $form->field($model, 'no_telpon')->textInput(['maxlength' => true, 'placeholder' => 'Isi dengan no Telepon Pasien'])->label('<i class="fa fa-fw fa-phone-square"></i> No Telepon : ') ?>
                        </div>

                        <div class="col-sm-5">
                            <?= $form->field($model, 'pekerjaan')->textInput(['maxlength' => true, 'placeholder' => 'Isi dengan Pekerjaan Pasien'])->label('<i class="fa fa-fw fa-address-card"></i> Pekerjaan : ') ?>
                        </div>
            
                    </div>
                    <div class="row">
                        <div class="col-sm-10">
                            <?= $form->field($model, 'alamat')->textInput(['maxlength' => true, 'placeholder' => 'Isi dengan Alamat Pasien'])->label('<i class="fa fa-fw fa-address-card"></i> Alamat : ') ?>
                        </div>
                        
                    </div> 

                    <div class="form-group">
                        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>

                </div>
</div>