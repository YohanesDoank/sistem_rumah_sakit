<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\ralan\models\Poli */

$this->title = 'Create Poli';
$this->params['breadcrumbs'][] = ['label' => 'Poli', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="poli-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
