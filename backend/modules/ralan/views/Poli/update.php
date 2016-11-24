<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\ralan\models\Poli */

$this->title = 'Update Poli: ' . $model->id_poli;
$this->params['breadcrumbs'][] = ['label' => 'Polis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_poli, 'url' => ['view', 'id' => $model->id_poli]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="poli-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
