<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\ranap\models\RawatInapOld */

$this->title = 'Create Rawat Inap Old';
$this->params['breadcrumbs'][] = ['label' => 'Rawat Inap Olds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rawat-inap-old-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
