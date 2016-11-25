<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\apotik\models\ApotikObat */

$this->title = 'Create Apotik Obat';
$this->params['breadcrumbs'][] = ['label' => 'Apotik Obats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="apotik-obat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
