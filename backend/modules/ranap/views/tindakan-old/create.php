<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\ranap\models\TindakanOld */

$this->title = 'Create Tindakan Old';
$this->params['breadcrumbs'][] = ['label' => 'Tindakan Olds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tindakan-old-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
