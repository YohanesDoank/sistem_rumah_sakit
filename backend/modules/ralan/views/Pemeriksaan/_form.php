<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\modules\ralan\models\Medrec;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;


/* @var $this yii\web\View */
/* @var $model backend\modules\ralan\models\Pemeriksaan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pemeriksaan-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-3">
             
                 <?= $form->field($model, 'id_medrec')->widget(Select2::classname(),[
                    'data' => ArrayHelper::map(Medrec::find()->all(), 'id_mr','id_dokter', 'id_pasien'),
                    'language' => 'en',
                    'options' => ['placeholder' => 'Select Dokter', 'style'=>'width : 260px', 'id'=>'id_medrec'],
                    'pluginOptions'=> [
                        'allowClear' => true
                        ],
                    ])->label('<i class="fa fa-fw fa-user-md"></i> Id medrec: ');
        
                ?>   

        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'id_pasien')->textInput(['readonly'=>true]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'id_dokter')->textInput(['readonly'=>true]) ?>    
        </div>
   
    </div>
   
    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'jenis_pemeriksaan')->textInput() ?>  
        </div>
        <div class="col-md-3">
         <?php $date=date('Y-m-d');?>

           <?= $form->field($model, 'tanggal_pemeriksaan')->textInput(['type'=>'date', 'value'=>$date]) ?>  
        </div>
    </div>
    

    

    <?= $form->field($model, 'total_biaya_pemeriksaan')->textInput() ?>

    <?= $form->field($model, 'status_pemeriksaan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php 
$script = <<< JS
$('#id_medrec').change(function(){
    var medrec_id = $(this).val();
    alert(medrec_id);
    $.get('index.php?r=ralan/pemeriksaan/get-medrec', {medrec_id : medrec_id}, function(data){ 
        alert(data); 
        var data = $.parseJSON(data);
        $('#pemeriksaan-id_pasien').attr('value', data.id_pasien);
        $('#pemeriksaan-id_dokter').attr('value', data.id_dokter);
    });
   });
JS;
$this->registerJs($script); 
?>