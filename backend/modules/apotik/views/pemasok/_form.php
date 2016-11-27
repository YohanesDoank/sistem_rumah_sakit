<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\apotik\models\Pemasok */
/* @var $form yii\widgets\ActiveForm */
$result = $this->context->getmaxid();
$last_id = 0;
foreach ($result as $row) {
    $last_id = $row['id_pemasok'];
} 
$last_id = substr($last_id, 4, strlen($last_id));
$last_id += 1;
$last_id = "PSK-".$last_id;
?>
<?= Html::a('<i class="fa fa-fw fa-home"> |</i> Menu Utama Pemasok', ['index'], ['class' => 'btn btn-success']) ?>
<br><br>
<div class="customer-form">
        <div class="box">
            <div class="box-header with-border">
            <?php 
            if (Yii::$app->controller->action->id == "create") {
            ?>
             <h3 class="box-title"><i class="fa fa-user-circle-o"></i><strong> Pemasok : <?php echo $last_id; ?></strong></h3>
            <?php } else{
            ?>
             <h3 class="box-title"><i class="fa fa-user-circle-o"></i><strong> Pemasok : <?php echo $model->id_pemasok; ?></strong></h3>
            <?php } ?>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <!-- <button type="button" class="btn btn-box-tool" data-widget="" data-toggle="tooltip" title=""> -->
              </div>
            </div>
            <div class="box-body">
                <div class="pemasok-form">

                    <?php $form = ActiveForm::begin(); ?>

                    <div class="row">
                        <div class="col-sm-12">  
                            <?= $form->field($model, 'nama')->textInput(['maxlength' => true, 'placeholder' => 'Isi dengan nama Pemasok Obat'])->label('<i class="fa fa-fw fa-user-circle-o"></i> Nama : ') ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">  
                            <?= $form->field($model, 'no_telp')->textInput(['maxlength' => true, 'type' => 'number', 'placeholder' => 'Isi Nomor Telpon Pemasok Obat'])->label('<i class="fa fa-fw fa-phone-square"></i> Nomor Telepon : ') ?>
                        </div>
                        <div class="col-sm-6">  
                            <?= $form->field($model, 'alamat')->textInput(['maxlength' => true, 'placeholder' => 'Isi Alamat Pemasok Obat'])->label('<i class="fa fa-fw fa-address-card-o"></i> Alamat : ') ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">  
                            <?= $form->field($model, 'id_admin')->hiddenInput(['value' => Yii::$app->user->identity->id])->label(false) ?>
                            <?= $form->field($model, 'id_pemasok')->hiddenInput(['value' => $last_id])->label(false) ?>
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