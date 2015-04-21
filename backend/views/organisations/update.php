<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Organisations */

$this->title = 'Update Organisations: ' . ' ' . $model->organisation_name_short;
$this->params['breadcrumbs'][] = ['label' => 'Organisations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->organisation_id, 'url' => ['view', 'id' => $model->organisation_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="organisations-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
