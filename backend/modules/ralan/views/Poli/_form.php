<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\modules\ralan\models\Dokter;
use backend\modules\ralan\models\DokterSearch;
use backend\modules\ralan\models\Jadwal;

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

<?= $form->field($model, 'id_dokter')->widget(Select2::classname(),[
        'data' => ArrayHelper::map(Dokter::find()->all(), 'id_dokter','nama_dokter', 'spesialis'),
        'language' => 'en',
        'options' => ['placeholder' => 'Select Dokter', 'style'=>'width : 260px', 'id'=>'id_dokter'],
        'pluginOptions'=> [
            'allowClear' => true
        ],
    ])->label('<i class="fa fa-fw fa-user-md"></i> Nama Dokter: ');
    
?>  
<div class="row">
    <div class="col-sm-4">
        <?= $form->field($model, 'nama_poli')->textInput(['maxlength' => true, 'style'=>'width : 260px', 'readonly'=>true])->label('<i class="fa fa-medkit"></i> Nama Poli: '); ?>
    </div>
    <div class="col-sm-4 ">
    	<?= $form->field($model, 'id_jadwal')->widget(Select2::classname(), [
    		'data' => ArrayHelper::map(Jadwal::find()->where(['status_terisi'=>0])->all(), 'id_jadwal',function($model, $defaultValue) {
        return $model['jenis_poli'].' | ruang: '.$model['ruang'].' | sesi: '.$model['sesi'];
        },'hari'),
    		'language' =>'en',
    		'options' => ['placeholder' =>'Select Jadwal', 'id'=>'id_jadwal',],
    		'pluginOptions' =>[
    				'allowClear' =>true
    			],

    		])->label('<i class="fa fa-calendar"></i> Jadwal: ') ;

    	?>

    	
        
    </div>
    <div class="col-sm-4 ">
        

        <?= $form->field($model, 'hari')->textInput(['maxlength' => true, 'readonly'=>true])->label('<i class="fa fa-calendar"></i> Hari poli aktif: '); ?>
        
    </div>
</div>

    
    


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

$('#id_jadwal').change(function(){
    var jadwal_id = $(this).val();
    //alert(jadwal_id);
    $.get('index.php?r=ralan/poli/get-hari', {jadwal_id : jadwal_id}, function(data){ 
        //alert(data); 
        var data = $.parseJSON(data);
        //alert(data.hari);
        $('#poli-hari').attr('value', data.hari);
    });
   });
JS;
$this->registerJs($script); 
?>
 