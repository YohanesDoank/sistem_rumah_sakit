<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\ranap\models\Pendaftaran */

$this->title = 'Pendaftaran Baru Rawat Inap';
$this->params['breadcrumbs'][] = ['label' => 'Pendaftarans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pendaftaran-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
