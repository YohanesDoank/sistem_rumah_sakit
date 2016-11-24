<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\ranap\models\Kamar */

$this->title = 'Update Kamar: ' . $model->kode_kamar;
$this->params['breadcrumbs'][] = ['label' => 'Kamars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_kamar, 'url' => ['view', 'id' => $model->kode_kamar]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kamar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
