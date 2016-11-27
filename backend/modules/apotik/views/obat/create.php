<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\apotik\models\Obat */
$result = $this->context->getmaxid();
$maxid = 0;
foreach ($result as $row) {
	$maxid = $row['max_id'];
	$maxid += 1;
}

$this->title = 'Create Obat : '.$maxid;
$this->params['breadcrumbs'][] = ['label' => 'Obat', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="obat-create">

    <h1><i class="fa fa-fw fa-plus-square"></i><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
