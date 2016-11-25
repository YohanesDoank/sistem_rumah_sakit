<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\apotik\models\apoteker */

$this->title = 'Create Apoteker';
$this->params['breadcrumbs'][] = ['label' => 'Apotekers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="apoteker-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>