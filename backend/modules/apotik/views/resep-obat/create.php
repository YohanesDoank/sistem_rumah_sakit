<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\apotik\models\ResepObat */

$this->title = 'Create Resep Obat';
$this->params['breadcrumbs'][] = ['label' => 'Resep Obats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resep-obat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
