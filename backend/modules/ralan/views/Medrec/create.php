<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\ralan\models\Medrec */

$this->title = 'Create Medrec';
$this->params['breadcrumbs'][] = ['label' => 'Medrecs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="medrec-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
