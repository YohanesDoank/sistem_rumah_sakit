<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\apotik\models\apoteker */
/* @var $form yii\widgets\ActiveForm */
$result = $this->context->getmaxid();
$maxid = 0;
foreach ($result as $row) {
    $maxid = $row['max_id'];
    $maxid += 1;
} ?>
<?= Html::a('<i class="fa fa-fw fa-home"> |</i> Menu Utama Apoteker', ['index'], ['class' => 'btn btn-success']) ?>
<br><br>
<div class="customer-form">
        <div class="box">
            <div class="box-header with-border">
            <?php 
            if (Yii::$app->controller->action->id == "create") {
            ?>
             <h3 class="box-title"><i class="fa fa-user-circle"></i><strong> Apoteker : <?php echo $maxid; ?></strong></h3>
            <?php } else{
            ?>
             <h3 class="box-title"><i class="fa fa-user-circle"></i><strong> Apoteker : <?php echo $model->id_apoteker; ?></strong></h3>
            <?php } ?>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <!-- <button type="button" class="btn btn-box-tool" data-widget="" data-toggle="tooltip" title=""> -->
              </div>
            </div>
            <div class="box-body">
                <div class="apoteker-form">
                    <?php $form = ActiveForm::begin(); ?>
                    <!-- <?= $form->field($model, 'id_apoteker')->textInput() ?> -->
                    <div class="row">
                        <div class="col-sm-6">
                            <?= $form->field($model, 'nama')->textInput(['maxlength' => true, 'placeholder' => 'Isi dengan nama Apoteker'])->label('<i class="fa fa-fw fa-user-circle"></i> Nama : ') ?>  
                        </div>
                        <div class="col-sm-6">
                            <?= $form->field($model, 'alamat')->textInput(['maxlength' => true, 'placeholder' => 'Isi Alamat Apoteker'])->label('<i class="fa fa-fw fa-address-card"></i> Alamat : ')  ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <?= $form->field($model, 'no_telp')->textInput(['type' => 'number', 'placeholder' => 'Isi nomor Telpon Apoteker'])->label('<i class="fa fa-fw fa-phone-square"></i> Nomor Telepon : ')  ?>
                        </div>
                        <div class="col-sm-6">
                            <?= $form->field($model, 'jam_mulai')->textInput(['type' => 'time'])->label('<i class="fa fa-fw fa-clock-o"></i> Jam Mulai : ') ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <?= $form->field($model, 'jam_selesai')->textInput(['type' => 'time'])->label('<i class="fa fa-fw fa-clock-o"></i> Jam Selesai : ') ?>        
                        </div>
                        <div class="col-sm-6">
                            <?= $form->field($model, 'id_admin')->hiddenInput(['value' => Yii::$app->user->identity->id])->label(false) ?>        
                        </div>
                    </div> 

                    <div class="form-group">
                        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>

                </div>
            </div>
        </div>
    </div>