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

    <?= $form->field($model, 'no_pendaftaran')->widget(Select2::classname(),[
                'data' => ArrayHelper::map(Pendaftaran::find()->all(), 'no_pendaftaran','no_pendaftaran'),
                'language' => 'en',
                'options' => ['placeholder' => 'Select no_pendaftaran', 'style'=>'width : 260px', 'id'=>'no_pendaftaran'],
                'pluginOptions'=> [
                    'allowClear' => true
                ],
            ]);
            
    ?>  

    <?= $form->field($model, 'id_pasien')->textInput(['readonly'=>true]) ?>

    <?= $form->field($model, 'id_dokter')->textInput(['readonly'=>true]) ?>

    <?= $form->field($model, 'diagnosa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tindakan_dokter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keluhan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cektensi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'beratbadan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tinggibadan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rujukan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'suhubadan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nadi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'riwayat_operasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alergi_obat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status_mr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'konsultasi')->textInput(['maxlength' => true]) ?>

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
        });
   });

JS;
$this->registerJs($script); 
?>
 