<?php

use yii\helpers\Html;
use backend\modules\apotik\models\ResepObat;

/* @var $this yii\web\View */
/* @var $model backend\modules\apotik\models\Resep */
/* @var $modelsJumlahObat backend\modules\apotik\models\ResepObat */
$result = $this->context->getmaxid();
$maxid = 0;
foreach ($result as $row) {
	$maxid = $row['max_id'];
	$maxid += 1;
}

$this->title = 'Create Resep : '.$maxid;
$this->params['breadcrumbs'][] = ['label' => 'Resep', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resep-create">

    <h1><i class='fa fa-list-alt'></i> <?= Html::encode($this->title) ?></h1>

	<?php  $modelsResepObat = [new ResepObat];?>
    <?= $this->render('_form', [
        'model' => $model,
        'modelsJumlahObat' => (empty($modelsJumlahObat)) ? [new ResepObat] : $modelsJumlahObat
    ]) ?>

</div>
