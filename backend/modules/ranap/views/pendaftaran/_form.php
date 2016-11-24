<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;

use backend\modules\ranap\models\Pasien;
use backend\modules\ranap\models\Dokter;
use backend\modules\ranap\models\Ranjang;


/* @var $this yii\web\View */
/* @var $model backend\modules\ranap\models\Pendaftaran */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pendaftaran-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'kode_pasien')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(Pasien::find()->all(),'id_pasien','id_pasien'),
            'language' => 'id',
            'options' => ['placeholder' => 'Pilih Nama Pasien....','id' => 'pasien'],
            'pluginOptions' => [
                'allowClear' => true
                    ],
                ]); ?>
        </div>
    </div>


    <div class="row">
        <div class="col-sm-3">
        <label class="control-label" for="namapasien">Nama Pasien</label>
        <input type="text" id="namapasien" class="form-control" name="namapasien" maxlength="500" readonly=""></input>
        </div>

        <div class="col-sm-3">
        <label class="control-label" for="namapasien">Alamat</label>
        <input type="text" id="alamatpasien" class="form-control" name="namapasien" maxlength="500" readonly=""></input>
        </div>

        <div class="col-sm-3">
        <label class="control-label" for="namapasien">Tanggal Lahir</label>
        <input type="text" id="tglpasien" class="form-control" name="namapasien" maxlength="500" readonly=""></input>
        </div>

        <div class="col-sm-1">
        <label class="control-label" for="namapasien">JK</label>
        <input type="text" id="jkpasien" class="form-control" name="namapasien" maxlength="500" readonly=""></input>
        </div>

        <div class="col-sm-1">
        <label class="control-label" for="namapasien">Gol Dar</label>
        <input type="text" id="golpasien" class="form-control" name="namapasien" maxlength="500" readonly=""></input>
        </div>
    </div>

    <br>
    <br>
    <br>

    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'kode_dokter')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(Dokter::find()->all(),'id_dokter','nama_dokter'),
            'language' => 'id',
            'options' => ['placeholder' => 'Pilih nama dokter....','id' => 'dokter'],
            'pluginOptions' => [
                'allowClear' => true
                    ],
                ]); ?>
        </div>

        <div class="col-sm-3">
        <label class="control-label" for="namapasien">ID Dokter</label>
        <input type="text" id="iddokter" class="form-control" name="namapasien" maxlength="500" readonly=""></input>
        </div>

        <div class="col-sm-3">
        <label class="control-label" for="namapasien">Spesialis</label>
        <input type="text" id="spesdokter" class="form-control" name="namapasien" maxlength="500" readonly=""></input>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'kode_ranjang')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(Ranjang::find()->where(['status' => '0']) -> all(),'kode_ranjang', 'kode_ranjang'),
            'language' => 'id',
            'options' => ['placeholder' => 'Pilih nama ranjang....','id' => 'ranjang'],
            'pluginOptions' => [
                'allowClear' => true
                    ],
                ]); ?>
        </div>

        <div class="col-sm-4">
        <?php $date = date('Y-m-d'); ?>
            <?= $form->field($model, 'tanggal_pendaftaran')->textInput(
            ['type' => 'date', 'value' => $date]) ?>
        </div>
        
        <div class="col-sm-4">
            <?= $form->field($model, 'uang_dp')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php
$script = <<< JS
$('#pasien').change(function(){
    var kode_pasien = $(this).val();
    
    $.get('index.php?r=ranap/pasien/get-name-address',{ kode_pasien : kode_pasien }, function(data){
        var data = $.parseJSON(data);
        // alert(data.alamat);
        $('#namapasien').attr('value',data.nama);
        $('#alamatpasien').attr('value',data.alamat);
        $('#tglpasien').attr('value',data.tgl_lahir);
        $('#jkpasien').attr('value',data.jenis_kelamin);
        $('#golpasien').attr('value',data.gol_dar);
    });
});

$('#dokter').change(function(){
    var kode_dokter = $(this).val();
    
    $.get('index.php?r=ranap/dokter/get-name-doctor',{ id_dokter : kode_dokter }, function(datad){
        var datad = $.parseJSON(datad);
        // alert(data.alamat);
        $('#iddokter').attr('value',datad.id_dokter);
        $('#spesdokter').attr('value',datad.spesialis);
    });
});

JS;
$this->registerJs($script);
?>
