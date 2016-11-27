<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\apotik\models\Antrian */

$this->title = 'Update Antrian: ' . $model->nomor;
$this->params['breadcrumbs'][] = ['label' => 'Antrians', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nomor, 'url' => ['view', 'id' => $model->nomor]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="antrian-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
