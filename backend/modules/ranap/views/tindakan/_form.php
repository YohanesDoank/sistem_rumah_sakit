<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;

use backend\modules\ranap\models\Pendaftaran;
use backend\modules\ranap\models\Dokter;
use backend\modules\ranap\models\JenisPenyakit;
/* @var $this yii\web\View */
/* @var $model backend\modules\ranap\models\Tindakan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tindakan-form">

    <?php $form = ActiveForm::begin(); ?>

    
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'nama_tindakan')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-sm-4">
            <?php $date = date('Y-m-d'); ?>
                <?= $form->field($model, 'tanggal_tindakan')->textInput(
                ['type' => 'date', 'value' => $date]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
                <?= $form->field($model, 'kode_ranap')->widget(Select2::classname(), [
                'data' => ArrayHelper::map(Pendaftaran::find()->all(),'kode_ranap','kode_ranap'),
                'language' => 'id',
                'options' => ['placeholder' => 'Pilih Kode Rawat....','id' => 'koderanap'],
                'pluginOptions' => [
                    'allowClear' => true
                        ],
                    ]); ?>
        </div>

        <div class="col-sm-2">
        <label class="control-label" for="namapasien">Nama Pasien</label>
        <input type="text" id="namapasien" class="form-control" name="namapasien" maxlength="500" readonly=""></input>
        </div>

        <div class="col-sm-2">
        <label class="control-label" for="namapasien">Kode Dokter Rawat</label>
        <input type="text" id="dokterpasien" class="form-control" name="namapasien" maxlength="500" readonly=""></input>
        </div>

        <div class="col-sm-2">
        <label class="control-label" for="namapasien">Kode Kamar</label>
        <input type="text" id="koderanjang" class="form-control" name="namapasien" maxlength="500" readonly=""></input>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'kode_dokter')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(Dokter::find()->all(),'id_dokter','nama_dokter','id_dokter'),
            'language' => 'id',
            'options' => ['placeholder' => 'Pilih nama dokter....','id' => 'kodedokter'],
            'pluginOptions' => [
                'allowClear' => true
                    ],
                ]); ?>
        </div>

        <div class="col-sm-3">
        <label class="control-label" for="namapasien">ID Dokter</label>
        <input type="text" id="namadokter" class="form-control" name="namapasien" maxlength="500" readonly=""></input>
        </div>

        <div class="col-sm-3">
        <label class="control-label" for="namapasien">Spesialis</label>
        <input type="text" id="spesdokter" class="form-control" name="namapasien" maxlength="500" readonly=""></input>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'kode_penyakit')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(JenisPenyakit::find()->all(),'kode_penyakit','nama_penyakit'),
            'language' => 'id',
            'options' => ['placeholder' => 'Pilih Jenis Penyakit....','id' => 'kodepenyakit'],
            'pluginOptions' => [
                'allowClear' => true
                    ],
                ]); ?>
        </div>

        <div class="col-sm-3">
        <label class="control-label" for="namapasien">Keterangan</label>
        <input type="text" id="ketpenyakit" class="form-control" name="namapasien" maxlength="500" readonly=""></input>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-8">
            <?= $form->field($model, 'biaya_tindakan')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-8">
            <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php
$script = <<< JS
$('#koderanap').change(function(){
    var kode_ranap = $(this).val();
    
    $.get('index.php?r=ranap/pendaftaran/get-name-ranjang',{ kode_ranap : kode_ranap }, function(data){
        var data = $.parseJSON(data);
        var pkode_pasien = data.kode_pasien
        
        $.get('index.php?r=ranap/pasien/get-name-address',{ kode_pasien : pkode_pasien }, function(datap){
        var datap = $.parseJSON(datap);
            //alert(datap.nama_pasien);
            $('#namapasien').attr('value',datap.nama);
        });
        $('#koderanjang').attr('value',data.kode_ranjang);
        $('#dokterpasien').attr('value',data.kode_dokter);

    });
});

$('#kodedokter').change(function(){
var dkode_dokter = $(this).val();

$.get('index.php?r=ranap/dokter/get-name-doctor',{ id_dokter : dkode_dokter }, function(datad){
        var datad = $.parseJSON(datad);
            //alert(datad.nama_dokter);
            $('#namadokter').attr('value',datad.id_dokter);
            $('#spesdokter').attr('value',datad.spesialis);
        });
        

});

$('#kodepenyakit').change(function(){
var kode_penyakit = $(this).val();

$.get('index.php?r=ranap/jenis-penyakit/get-ket-penyakit',{ kode_penyakit : kode_penyakit }, function(datak){
        var datak = $.parseJSON(datak);
            //alert(datad.nama_dokter);
            $('#ketpenyakit').attr('value',datak.keterangan);
        });
        

});



JS;
$this->registerJs($script);
?>
