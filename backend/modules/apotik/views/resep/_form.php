<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use wbraganca\dynamicform\DynamicFormWidget;

use yii\helpers\ArrayHelper;
use yii\jui\DatePicker;
use yii\helpers\Json;
use kartik\select2\Select2;

use backend\modules\apotik\models\Pasien;
use backend\modules\apotik\models\Dokter;
use backend\modules\apotik\models\Apoteker;
use backend\modules\apotik\models\Obat;

/* @var $this yii\web\View */
/* @var $model backend\modules\apotik\models\Resep */
/* @var $form yii\widgets\ActiveForm */
$result = $this->context->getmaxid();
$maxid = 0;
foreach ($result as $row) {
    $maxid = $row['max_id'];
    $maxid += 1;
}

?>
<?php $this->title = 'Create Resep'; ?> 
<?= Html::a('Menu utama Resep', ['index'], ['class' => 'btn btn-success']) ?>
<br><br>
<div class="customer-form">
    <?php $form = ActiveForm::begin(['id' => 'dynamic-form']); ?>
        <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-list-alt"></i><strong> Resep <?php echo $maxid; ?></strong></h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <!-- <button type="button" class="btn btn-box-tool" data-widget="" data-toggle="tooltip" title=""> -->
              </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-sm-6">
                        <?= $form->field($model, 'id_pasien')->widget(Select2::classname(), [
                            'data' => ArrayHelper::map(Pasien::find()->all(),'id_pasien', 'nama'),
                            'language' => 'en',
                            'options' => ['placeholder' => 'Select Pasien ...', 'id' => 'pasien'],
                            'pluginOptions' => [
                                'allowClear' => true
                            ],  
                        ])->label('<i class="fa fa-user"></i> Nama Pasien : '); ?>
                    </div>
                    <div class="col-sm-6">
                        <?php $date = date('Y-m-d'); ?>
                        <?= $form->field($model, 'resep_tgl')->textInput(
                                ['type' => 'date','value' => $date]
                        )->label('<i class="fa fa-calendar"></i> Tanggal :')?> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <?= $form->field($model, 'id_dokter')->widget(Select2::classname(), [
                            'data' => ArrayHelper::map(Dokter::find()->all(),'id_dokter', 'nama_dokter', 'spesialis'),
                            'language' => 'en',
                            'options' => ['placeholder' => 'Select Dokter ...', 'id' => 'dokter'],
                            'pluginOptions' => [
                                'allowClear' => true
                            ],  
                        ])->label('<i class="fa fa-user-md"></i> Nama Dokter : '); ?>
                    </div>
                    <div class="col-sm-6">
                        <?= $form->field($model, 'id_apoteker')->widget(Select2::classname(), [
                            'data' => ArrayHelper::map(Apoteker::find()->all(),'id_apoteker', 'nama'),
                            'language' => 'en',
                            'options' => ['placeholder' => 'Select Apoteker ...', 'id' => 'apoteker'],
                            'pluginOptions' => [
                                'allowClear' => true
                            ], ])->label('<i class="fa fa-user-o"></i> Nama Apoteker : '); ?>
                    </div>
                </div>
                <div class="padding-v-md">
                    <div class="line line-dashed"></div>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
            <?php 
                DynamicFormWidget::begin([
                'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
                'widgetBody' => '.container-items', // required: css class selector
                'widgetItem' => '.item', // required: css class
                'limit' => 10, // the maximum times, an element can be cloned (default 999)
                'min' => 1, // 0 or 1 (default 1)
                'insertButton' => '.add-item', // css class
                'deleteButton' => '.remove-item', // css class
                'model' => $modelsJumlahObat[0],
                'formId' => 'dynamic-form',
                'formFields' => [
                    'id_resep',
                    'kode_obat',
                    'jumlah',
                ],
            ]); ?>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-list-ol"></i> Detail Obat
                    <button type="button" class="pull-right add-item btn btn-success btn-xs"><i class="fa fa-plus"></i> Tambah Obat Baru</button>
                    <div class="clearfix"></div>
                </div>
                
                    <div class="panel-body container-items"><!-- widgetContainer -->
                        <?php foreach ($modelsJumlahObat as $index => $modelObat): ?> 
                            <div class="item panel panel-default"><!-- widgetBody -->
                                <div class="panel-heading">
                                    <span class="panel-title-address">Obat: <?= ($index + 1) ?></span>
                                    <button type="button" class="pull-right remove-item btn btn-danger btn-xs"><i class="fa fa-minus"></i></button>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="panel-body">
                                        <?php
                                            // necessary for update action.
                                            if (!$modelObat->isNewRecord) {
                                                echo Html::activeHiddenInput($modelObat, "[{$index}]nomor");
                                            }
                                        ?>

                                        <!-- <?= $form->field($modelObat, '[{$index}]kode_obat')->widget(Select2::classname(), [
                                            'data' => ArrayHelper::map(Obat::find()->all(),'kode_obat', 'nama_obat'),
                                            'language' => 'en',
                                            'options' => ['placeholder' => 'Select Obat ...', 'id' => 'obat'],
                                            'pluginOptions' => [
                                                'allowClear' => true
                                            ],  
                                        ]); ?> -->
                                        <?= $form->field($modelObat, "[{$index}]kode_obat")->widget(Select2::classname(), [
                                            'data' => ArrayHelper::map(Obat::find()->all(),'kode_obat', 'nama_obat'),
                                            'language' => 'en',
                                            'options' => ['placeholder' => 'Select Obat ...', 'id' => 'obat'],
                                            'pluginOptions' => [
                                                'allowClear' => true
                                            ],  
                                        ]); ?>
                                        <!-- <?= $form->field($modelObat, "[{$index}]kode_obat")->textInput(['maxlength' => true]) ?> -->

                                        <?= $form->field($modelObat, "[{$index}]jumlah")->textInput(['maxlength' => true]) ?>
                                            
                                        </div><!-- end:row -->
                                    </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                <?php DynamicFormWidget::end(); ?>
            </div>
            <!-- /.box-footer-->
          </div>
    
                        <?= $form->field($model, 'id_admin')->hiddenInput(['value' => Yii::$app->user->identity->id, 'hidden' => 'true',])->label(false) ?>
    

    <div class="form-group">
        <?= Html::submitButton($modelObat->isNewRecord ? 'Create' : 'Update', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php 

$js = '
jQuery(".dynamicform_wrapper").on("afterInsert", function(e, item) {
    jQuery(".dynamicform_wrapper .panel-title-address").each(function(index) {
        jQuery(this).html("Obat : " + (index + 1))
    });
});

jQuery(".dynamicform_wrapper").on("afterDelete", function(e) {
    jQuery(".dynamicform_wrapper .panel-title-address").each(function(index) {
        jQuery(this).html("Obat : " + (index + 1))
    });
});

$(".dynamicform_wrapper").on("beforeInsert", function(e, item) {
    console.log("beforeInsert");
});

$(".dynamicform_wrapper").on("afterInsert", function(e, item) {
    console.log("afterInsert");
});

$(".dynamicform_wrapper").on("beforeDelete", function(e, item) {
    if (! confirm("Are you sure you want to delete this item?")) {
        return false;
    }
    return true;
});

$(".dynamicform_wrapper").on("afterDelete", function(e) {
    console.log("Deleted item!");
});

$(".dynamicform_wrapper").on("limitReached", function(e, item) {
    alert("Limit reached");
});

';

$this->registerJs($js);
 ?>