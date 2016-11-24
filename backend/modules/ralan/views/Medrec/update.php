<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\ralan\models\Medrec */

$this->title = 'Update Medrec: ' . $model->id_mr;
$this->params['breadcrumbs'][] = ['label' => 'Medrecs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_mr, 'url' => ['view', 'id' => $model->id_mr]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="medrec-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
