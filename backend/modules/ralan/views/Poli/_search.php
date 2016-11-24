<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\ralan\models\PoliSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="poli-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_poli') ?>

    <?= $form->field($model, 'id_dokter') ?>

    <?= $form->field($model, 'nama_poli') ?>



    <?php echo $form->field($model, 'sesi') ?>

    <?php  echo $form->field($model, 'hari') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
