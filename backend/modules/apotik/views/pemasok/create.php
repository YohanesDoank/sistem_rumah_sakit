<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\apotik\models\Pemasok */

$this->title = 'Create Pemasok';
$this->params['breadcrumbs'][] = ['label' => 'Pemasoks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pemasok-create">

    <h1><i class="fa fa-user-circle-o"></i> <?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
