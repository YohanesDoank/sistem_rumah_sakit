<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\ranap\models\Tindakan */

$this->title = 'Tambah Tindakan';
$this->params['breadcrumbs'][] = ['label' => 'Tindakans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tindakan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
