<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\modules\ralan\models\Dokter;
use backend\modules\ralan\models\Medrec;
use backend\modules\ralan\models\Pendaftaran;
use kartik\select2\Select2;
/* @var $this yii\web\View */
/* @var $model backend\modules\ralan\models\Medrec */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="medrec-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'no_pendaftaran')->widget(Select2::classname(),[
                'data' => ArrayHelper::map(Pendaftaran::find()->all(), 'no_pendaftaran','no_pendaftaran'),
                'language' => 'en',
                'options' => ['placeholder' => 'Select no_pendaftaran', 'style'=>'width : 260px', 'id'=>'no_pendaftaran'],
                'pluginOptions'=> [
                    'allowClear' => true
                ],
            ]);
            
        ?>  
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'id_pasien')->textInput(['readonly'=>true]) ?>
        </div>

        <div class="col-md-3">
            <?= $form->field($model, 'id_dokter')->textInput(['readonly'=>true]) ?>
        </div>

        <div class="col-md-3">
            
            <label class="control-label" for="x">Id Poli</label>
            <input type="text" id="idpoli" class="form-control" name="idpoli" maxlength="500" readonly=""></input>
        
        
        </div>
    </div>
        <div class="row">
            <div class="col-md-12">
            
                <?= $form->field($model, 'diagnosa')->textInput(['maxlength' => true]) ?>
        
            </div>
            
        </div>
    

        <div class="row">
            <div class="col-md-12">
            
                <?= $form->field($model, 'tindakan_dokter')->textInput(['maxlength' => true]) ?>
        
            </div>
            
        </div>

        <div class="row">
            <div class="col-md-12">
            
                <?= $form->field($model, 'keluhan')->textInput(['maxlength' => true]) ?>
        
            </div>
            
        </div>

        <div class="row">
            <div class="col-md-2">
                <?= $form->field($model, 'cektensi')->textInput(['maxlength' => true]) ?>
            </div>

             <div class="col-md-2">
                <?= $form->field($model, 'beratbadan')->textInput(['maxlength' => true]) ?>
            </div>

             <div class="col-md-2">
                <?= $form->field($model, 'tinggibadan')->textInput(['maxlength' => true]) ?>
            </div>

            <div class="col-md-2">
                <?= $form->field($model, 'suhubadan')->textInput(['maxlength' => true]) ?>
            </div>

            <div class="col-md-2">
                <?= $form->field($model, 'nadi')->textInput(['maxlength' => true]) ?>
            </div>
            
        </div>

        <div class="row">
            <div class="col-md-12">
            
                <?= $form->field($model, 'rujukan')->textInput(['maxlength' => true]) ?>
        
            </div>
            
        </div>

        <div class="row">
            <div class="col-md-12">
            
                <?= $form->field($model, 'riwayat_operasi')->textInput(['maxlength' => true]) ?>
        
            </div>
            
        </div>

        <div class="row">
            <div class="col-md-12">
            
                <?= $form->field($model, 'alergi_obat')->textInput(['maxlength' => true]) ?>
        
            </div>
            
        </div>

        <div class="row">
            <div class="col-md-12">
            
                <?= $form->field($model, 'status_mr')->textInput(['maxlength' => true]) ?>
        
            </div>
            
        </div>

        <div class="row">
            <div class="col-md-12">
            
                <?= $form->field($model, 'konsultasi')->textInput(['maxlength' => true]) ?>
        
            </div>
            
        </div>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php 
$script = <<< JS
$('#no_pendaftaran').change(function(){
    var no_reg = $(this).val();
    //lert(no_reg);
        $.get('index.php?r=ralan/pendaftaran/get-id_pasien', {no_reg : no_reg}, function(data){ 
    //         alert(data); 
               var data = $.parseJSON(data);
    //           alert(data.id_pasien);
               $('#medrec-id_pasien').attr('value', data.id_pasien);
        });

        $.get('index.php?r=ralan/pendaftaran/get-id_dokter', {no_reg : no_reg}, function(data){ 
    //         alert(data); 
               var data = $.parseJSON(data);
    //           alert(data.id_dokter);
               $('#medrec-id_dokter').attr('value', data.id_dokter);
               $('#idpoli').attr('value',data.spesialis);
        });
        $.get('index.php?r=ralan/pendaftaran/get-id_poli', {no_reg : no_reg}, function(data){
            //alert(data);
            var data = $.parseJSON(data);
            //alert(data.id_poli);
            $('#idpoli').attr('value',data.id_poli);
             
        });
   });

JS;
$this->registerJs($script); 
?>
 