<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\modules\ralan\models\Pasien;
use backend\modules\ralan\models\Poli;
use yii\db\Query;
use backend\modules\ralan\models\Dokter;
use backend\modules\ralan\models\Jadwal;
use kartik\select2\Select2;
//use kartik\widgets\Depdrop;
$connection = \Yii::$app->db;
/* @var $this yii\web\View */
/* @var $model backend\modules\ralan\models\Pendaftaran */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pendaftaran-form">

    <?php $form = ActiveForm::begin(); ?>

<div class="row">
        <div class="col-sm-4">
    
            <?= $form->field($model, 'id_pasien')->widget(Select2::classname(),[
                'data' => ArrayHelper::map(Pasien::find()->all(), 'id_pasien','nama'),
                'language' => 'en',
                'options' => ['placeholder' => 'Select Pasien', 'style'=>'width : 260px', 'id'=>'id_pasien'],
                'pluginOptions'=> [
                    'allowClear' => true
                ],
            ]);
            
            ?>  
       </div>
    </div>

 

    <?php $date=date('Y-m-d');

 //    $antrian = Pendaftaran::find()
 // ->where(['id_poli' => '1'])
 // ->orderBy('no_antrian DESC')
 // ->all();

     ?>

<?php 
    

        $day=date('D');
        if($day=='Mon')
            $day='senin';
        else if($day=='Tue')
            $day='selasa';
        else if($day=='Wed')
            $day='rabu';
        else if($day=='Thu')
            $day='kamis';
        else if($day=='Fri')
            $day='jumat';
        else if($day=='Sat')
            $day='sabtu';
        else if($day=='Sun')
            $day='minggu';
 ?>
   

    <?= $form->field($model, 'tanggal_pendaftaran')->textInput(['type'=>'date', 'value'=>$date, 'style'=>'width : 260px',]) ; ?>



    <?= $form->field($model, 'id_poli')->widget(Select2::classname(),[
        'data' => ArrayHelper::map(Poli::find()->where(['hari'=>'senin'])->all(), 'id_poli', 'id_jadwal'),
        'language' => 'en',
        'options' => ['placeholder' => 'Select Poli', 'style'=>'width : 260px', 'id'=>'id_poli'],
        'pluginOptions'=> [
            'allowClear' => true
        ],
    ]); ?>


    

    <div class="row">
        <div class="col-sm-2">
        <?= $form->field($model, 'id_dokter')->textInput(['readonly'=>true,]) ?>
        </div>

        <div class="row">
        <div class="col-sm-4">
        <label class="control-label" for="namadokter">Nama Dokter</label>
        <input type="text" id="namadokter" class="form-control" name="namadokter" maxlength="500" readonly=""></input>
        </div>

        <div class="col-sm-4">
        <label class="control-label" for="spesialis">Spesialis</label>
        <input type="text" id="spesialis" class="form-control" name="spesialis" maxlength="500" readonly=""></input>
        </div>
           
        </div>
        
        
    </div>
   
    <?= $form->field($model, 'no_antrian')->textInput(['style'=>'width : 60px', 'readonly'=>true])?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php 
$script = <<< JS
$('#id_poli').change(function(){
    var poli_id = $(this).val();
    //alert(poli_id);
 
 $.get('index.php?r=ralan/pendaftaran/get-no-antrian', {poli_id : poli_id}, function(data){ 
        //alert(data); 
        //var data = $.parseJSON(data);
        var data2= parseInt(data);
        data2++;
        alert(data2);
        $('#pendaftaran-no_antrian').attr('value', data2);
   });

    $.get('index.php?r=ralan/poli/get-id-dokter', {poli_id : poli_id}, function(data){ 
    //     //alert(data); 
         var data = $.parseJSON(data);
         //alert(data.id_dokter);
         $('#pendaftaran-id_dokter').attr('value', data.id_dokter);
        var dokter_id = data.id_dokter;
        //alert(dokter_id);
        $.get('index.php?r=ralan/dokter/get-nama-dokter', {dokter_id : dokter_id}, function(data){
            alert(data);
            var data = $.parseJSON(data);
            alert(data.nama_dokter);
            $('#namadokter').attr('value',data.nama_dokter);
            $('#spesialis').attr('value', data.spesialis);
             
        });
        
    });

   
   });
JS;
$this->registerJs($script); 
?>
 
 