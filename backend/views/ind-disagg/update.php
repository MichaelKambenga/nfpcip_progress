<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\IndDisagg */

$this->title = 'Update Ind Disagg: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Ind Disaggs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ind-disagg-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
