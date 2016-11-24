<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\ralan\models\Pendaftaran */

$this->title = 'Update Pendaftaran: ' . $model->no_pendaftaran;
$this->params['breadcrumbs'][] = ['label' => 'Pendaftarans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_pendaftaran, 'url' => ['view', 'id' => $model->no_pendaftaran]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pendaftaran-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
