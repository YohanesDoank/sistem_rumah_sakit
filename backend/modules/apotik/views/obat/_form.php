<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\modules\apotik\models\Pemasok;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use kartik\money\MaskMoney;

/* @var $this yii\web\View */
/* @var $model backend\modules\apotik\models\Obat */
/* @var $form yii\widgets\ActiveForm */
$result = $this->context->getmaxid();
$maxid = 0;
foreach ($result as $row) {
    $maxid = $row['max_id'];
    $maxid += 1;
}
?>

<?= Html::a('<i class="fa fa-fw fa-home"> |</i> Menu Utama Obat', ['index'], ['class' => 'btn btn-success']) ?>
<br><br>
<div class="customer-form">
        <div class="box">
            <div class="box-header with-border">
            <?php 
            if (Yii::$app->controller->action->id == "create") {
            ?>
             <h3 class="box-title"><i class="fa fa-medkit"></i><strong> Obat : <?php echo $maxid; ?></strong></h3>
            <?php } else{
            ?>
             <h3 class="box-title"><i class="fa fa-medkit"></i><strong> Obat : <?php echo $model->kode_obat; ?></strong></h3>
            <?php } ?>
                <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <!-- <button type="button" class="btn btn-box-tool" data-widget="" data-toggle="tooltip" title=""> -->
              </div>
            </div>
            <div class="box-body">
                <div class="obat-form">

                <?php $form = ActiveForm::begin(); ?>
                <div class="row">
                    <div class="col-sm-12">  
                        <?= $form->field($model, 'nama_obat')->textInput(['maxlength' => true, 'placeholder' => 'Isi dengan nama Obat'])->label('<i class="fa fa-fw fa-plus-circle"></i> Nama Obat :') ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">  
                        <?=
                        $form->field($model, 'jenis_obat')->textInput(['maxlength' => true, 'placeholder' => 'Isi salah satu saja (SUPLEMEN | CAIR | VITAMIN | KAPSUL | TABLET)'])->label('<i class="fa fa-fw fa-codepen"></i> Jenis Obat :')
                            // $model->jenis_obat = $model->jenis_obat; 
                        //     echo $form->field($model, 'jenis_obat')->radioList([
                        //         '0' => 'CAIR',
                        //         '1' => 'KAPSUL',
                        //         '2' => 'KAPLET',
                        //         '3' => 'TABLET',
                        //         '4' => 'VITAMIN',
                        // ])->label('<i class="fa fa-fw fa-codepen"></i> Jenis Obat :'); 
                        ?>
                    </div>
                    <div class="col-sm-6">  
                        <?= $form->field($model, 'adverse_drug_reaction')->textInput(['maxlength' => true, 'placeholder' => 'Isi dengan adverse drug reaction'])->label('<i class="fa fa-fw fa-blind"></i> Adverse Drug Reaction :') ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">  
                        <?= $form->field($model, 'kontraindikasi_obat')->textarea(['rows' => 6, 'placeholder' => 'Tuliskan Kontraindikasi Obat'])->label('<i class="fa fa-fw fa-blind"></i> Kontraindikasi Obat :') ?>
                    </div>
                    <div class="col-sm-6">  
                        <?= $form->field($model, 'indikasi_obat')->textarea(['rows' => 6, 'placeholder' => 'Tuliskan Indikasi Obat'])->label('<i class="fa fa-fw fa-blind"></i> Indikasi Obat :') ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">  
                        <?= $form->field($model, 'cara_minum')->textInput(['maxlength' => true, 'placeholder' => 'Tuliskan cara minum Obat'])->label('<i class="fa fa-fw fa-glass"></i> Cara minum :') ?>
                    </div>
                    <div class="col-sm-6">  
                        
                            <?=$form->field($model, 'harga_satuan')->widget(MaskMoney::classname(), [
                                'pluginOptions' => [
                                    'prefix' => 'Rp ',
                                    'allowNegative' => false,
                                    'precision' => 2, 
                                    'format' => 'currency'
                                ]])->label('<i class="fa fa-fw fa-dollar"></i> Harga Satuan :');  
                            ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <?= $form->field($model, 'tgl_kadaluarsa')->textInput(['maxlength' => true, 'type' => 'date'])->label('<i class="fa fa-fw fa-calendar-times-o"></i> Tanggal Kadaluarsa :') ?>
                    </div>
                    <div class="col-sm-6">
                        <?= $form->field($model, 'stok')->textInput(['maxlength' => true, 'type' => 'number', 'placeholder' => 'Isi Stok Obat'])->label('<i class="fa fa-fw fa-ambulance"></i> Stok :') ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">  
                            <?= $form->field($model, 'id_pemasok_obat')->widget(Select2::classname(), [
                                'data' => ArrayHelper::map(Pemasok::find()->all(),'id_pemasok', 'nama'),
                                'language' => 'id',
                                'options' => ['placeholder' => 'Select Pemasok ...', 'id' => 'pemasok'],
                                'pluginOptions' => [
                                    'allowClear' => true
                                ],  
                            ])->label('<i class="fa fa-fw fa-user-circle"></i> Pemasok Obat :'); ?>
                    </div>
                    <div class="col-sm-6">  
                        <?= $form->field($model, 'id_admin')->hiddenInput(['value' => Yii::$app->user->identity->id])->label(false) ?>
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