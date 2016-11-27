<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\apotik\models\apoteker */
$result = $this->context->getmaxid();
$maxid = 0;
foreach ($result as $row) {
	$maxid = $row['max_id'];
	$maxid += 1;
}

$this->title = 'Create Apoteker : '.$maxid;
$this->params['breadcrumbs'][] = ['label' => 'Apoteker', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="apoteker-create">

    <h1><i class="fa fa-user-circle"> </i> <?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
