<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\modules\ralan\models\Dokter;
use backend\modules\ralan\models\DokterSearch;

use yii\helpers\ArrayHelper;
use yii\filters\VerbFilter;
use yii\web\NotFoundHttpException;
use yii\web\controller;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model backend\modules\ralan\models\Poli */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="poli-form">

    <?php $form = ActiveForm::begin(); ?>

    <!-- <?= $form->field($model, 'id_dokter')->dropDownList(
    ArrayHelper::map(Dokter::find()->all(),'id_dokter', 'nama_dokter','spesialis'),
        ['prompt'=>'Select Dokter', 'id'=>'id_dokter', 'style'=>'width : 260px'] 
    )?> -->
<?= $form->field($model, 'id_dokter')->widget(Select2::classname(),[
        'data' => ArrayHelper::map(Dokter::find()->all(), 'id_dokter','nama_dokter'),
        'language' => 'en',
        'options' => ['placeholder' => 'Select Dokter', 'style'=>'width : 260px', 'id'=>'id_dokter'],
        'pluginOptions'=> [
            'allowClear' => true
        ],
    ]);
    
?>  
<div class="row">
    <div class="col-sm-4">
        <?= $form->field($model, 'nama_poli')->textInput(['maxlength' => true, 'style'=>'width : 260px', 'readonly'=>true]) ?>
    </div>
    <div class="col-sm-4 ">
        <?= $form->field($model, 'sesi')->dropdownList(['1' => '1 (07.00-13.00)', '2' => '2 (14.00-20.00)'], ['prompt' => '---Pilih Sesi berdasarkan waktu---','style'=>'width : 260px', 'id'=>'sesi']) ?>
        
    </div>
</div>

    
    
    <?= $form->field($model, 'hari')->dropdownList(['Mon' => 'Senin', 'Tue' => 'Selasa', 'Wed' => 'Rabu', 'Thu' => 'Kamis', 'Fri' => 'Jumat', 'Sat' => 'Sabtu','Sun' => 'Minggu'], ['prompt' => '---Pilih Hari---', 'style'=>'width : 260px']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php 
$script = <<< JS
$('#id_dokter').change(function(){
    var dokter_id = $(this).val();
    //alert(dokter_id);
    $.get('index.php?r=ralan/dokter/get-spesialis', {dokter_id : dokter_id}, function(data){ 
        // alert(data); 
        var data = $.parseJSON(data);
        // alert(data.spesialis);
        $('#poli-nama_poli').attr('value', data.spesialis);
    });
   });

// $('#sesi').change(function(){
//     var session = $(this).val();
//     alert(session);
     
//     if(session==1)
//         $('#poli-jam_kerja').attr('value', '07.00-13.00');
//     if(session==2)
//         $('#poli-jam_kerja').attr('value', '14.00-20.00');
//    });
JS;
$this->registerJs($script); 
?>
 