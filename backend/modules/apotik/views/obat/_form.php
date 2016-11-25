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
?>

<div class="obat-form">

    <?php $form = ActiveForm::begin(); ?>
<div class="row">
    <div class="col-sm-12">  
        <?= $form->field($model, 'nama_obat')->textInput(['maxlength' => true]) ?>
    </div>
</div>
<div class="row">
    <div class="col-sm-6">  
        
        <?= $form->field($model, 'jenis_obat')->widget(Select2::classname(), [
            'data' => ['CAIR', 'KAPSUL', 'KAPLET', 'TABLET', 'VITAMIN'],
            'language' => 'id',
            'options' => ['placeholder' => 'Select Jenis Obat ...'],
            'pluginOptions' => [
                'allowClear' => true
            ],  
        ]); ?>
    </div>
    <div class="col-sm-6">  
        <?= $form->field($model, 'adverse_drug_reaction')->textInput(['maxlength' => true]) ?>
    </div>
</div>
<div class="row">
    <div class="col-sm-6">  
        <?= $form->field($model, 'kontraindikasi_obat')->textarea(['rows' => 6]) ?>
    </div>
    <div class="col-sm-6">  
        <?= $form->field($model, 'indikasi_obat')->textarea(['rows' => 6]) ?>
    </div>
</div>
<div class="row">
    <div class="col-sm-6">  
        <?= $form->field($model, 'cara_minum')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-sm-6">  
        
            <?=$form->field($model, 'harga_satuan')->widget(MaskMoney::classname(), [
                'pluginOptions' => [
                    'prefix' => 'Rp ',
                    'allowNegative' => false,
                    'precision' => 2, 
                    'format' => 'currency'
                ]]);  
            ?>
    </div>
</div>
<div class="row">
    <div class="col-sm-6">  
            <?= $form->field($model, 'id_pemasok_obat')->widget(Select2::classname(), [
                'data' => ArrayHelper::map(Pemasok::find()->all(),'id_pemasok', 'nama'),
                'language' => 'id',
                'options' => ['placeholder' => 'Select Pemasok ...', 'id' => 'pemasok'],
                'pluginOptions' => [
                    'allowClear' => true
                ],  
            ]); ?>
    </div>
    <div class="col-sm-6">  
        <?= $form->field($model, 'id_admin')->textInput(['value' => Yii::$app->user->identity->id]) ?>
    </div>
</div>



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
