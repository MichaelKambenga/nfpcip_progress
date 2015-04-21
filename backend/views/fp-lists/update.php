<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\FpLists */

$this->title = 'Update Fp Lists: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Fp Lists', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fp-lists-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
