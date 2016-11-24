<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\ranap\models\Ranjang */

$this->title = 'Create Ranjang';
$this->params['breadcrumbs'][] = ['label' => 'Ranjangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ranjang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
