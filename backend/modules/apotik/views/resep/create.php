<?php

use yii\helpers\Html;
use backend\modules\apotik\models\ResepObat;

/* @var $this yii\web\View */
/* @var $model backend\modules\apotik\models\Resep */
/* @var $modelsJumlahObat backend\modules\apotik\models\ResepObat */

$this->title = 'Create Resep';
$this->params['breadcrumbs'][] = ['label' => 'Reseps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resep-create">

    <h1><?= Html::encode($this->title) ?></h1>
	<?php  $modelsResepObat = [new ResepObat];?>
    <?= $this->render('_form', [
        'model' => $model,
        'modelsJumlahObat' => (empty($modelsJumlahObat)) ? [new ResepObat] : $modelsJumlahObat
    ]) ?>

</div>
